<?php
namespace App\Form;

use App\Entity\Reservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom complet',
                'attr'  => ['placeholder' => 'Votre nom complet'],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Le nom est obligatoire.',
                    ]),
                    new Assert\Length([
                        'min'        => 2,
                        'max'        => 100,
                        'minMessage' => 'Le nom doit contenir au moins {{ limit }} caractères.',
                        'maxMessage' => 'Le nom ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                    new Assert\Regex([
                        'pattern' => '/^[\pL\s\'\-]+$/u',
                        'message' => 'Le nom ne peut contenir que des lettres, espaces ou tirets.',
                    ]),
                ],
            ])

            ->add('email', EmailType::class, [
                'label' => 'Email',
                'attr'  => ['placeholder' => 'votre@email.com'],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => "L'adresse email est obligatoire.",
                    ]),
                    new Assert\Email([
                        'message' => "L'adresse '{{ value }}' n'est pas une adresse email valide.",
                        'mode'    => 'strict',
                    ]),
                    new Assert\Length([
                        'max'        => 180,
                        'maxMessage' => "L'adresse email ne peut pas dépasser {{ limit }} caractères.",
                    ]),
                ],
            ])

            ->add('telephone', TextType::class, [
                'label'    => 'Téléphone',
                'required' => false,
                'attr'     => ['placeholder' => '+216 XX XXX XXX'],
                'constraints' => [
                    new Assert\Regex([
                        'pattern' => '/^[\d\+\s\-]{8,15}$/',
                        'message' => 'Le numéro de téléphone est invalide (8 à 15 chiffres).',
                    ]),
                ],
            ])

            ->add('nombrePlaces', IntegerType::class, [
                'label' => 'Nombre de places',
                'attr'  => ['min' => 1, 'placeholder' => '1'],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Le nombre de places est obligatoire.',
                    ]),
                    new Assert\Type([
                        'type'    => 'integer',
                        'message' => 'Veuillez entrer un nombre entier.',
                    ]),
                    new Assert\GreaterThanOrEqual([
                        'value'   => 1,
                        'message' => 'Vous devez réserver au moins 1 place.',
                    ]),
                    new Assert\LessThanOrEqual([
                        'value'   => 50,
                        'message' => 'Vous ne pouvez pas réserver plus de 50 places à la fois.',
                    ]),
                    // Dynamic check against the event's remaining capacity
                    new Assert\Callback(
                        function (mixed $value, ExecutionContextInterface $context): void {
                            $reservation = $context->getRoot()->getData();
                            $capacity    = $reservation->getEvenement()?->getCapacity();

                            if ($capacity !== null && $value > $capacity) {
                                $context->buildViolation(
                                    "Capacité insuffisante : il ne reste que {$capacity} place(s) disponible(s)."
                                )->addViolation();
                            }

                            if ($capacity !== null && $capacity === 0) {
                                $context->buildViolation("Cet événement est complet.")
                                        ->addViolation();
                            }
                        }
                    ),
                ],
            ])

            ->add('statut', ChoiceType::class, [
                'label'   => 'Statut',
                'choices' => [
                    'Confirmé'   => 'confirmé',
                    'Annulé'     => 'annulé',
                    'En attente' => 'en attente',
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez choisir un statut.',
                    ]),
                    new Assert\Choice([
                        'choices' => ['confirmé', 'annulé', 'en attente'],
                        'message' => 'Statut invalide.',
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}