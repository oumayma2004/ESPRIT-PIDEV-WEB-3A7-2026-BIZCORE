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

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom complet',
                'attr'  => ['placeholder' => 'Votre nom complet'],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'attr'  => ['placeholder' => 'votre@email.com'],
            ])
            ->add('telephone', TextType::class, [
                'label' => 'Téléphone',
                'attr'  => ['placeholder' => '+216 XX XXX XXX'],
            ])
            ->add('nombrePlaces', IntegerType::class, [
    'label' => 'Nombre de places',
    'attr'  => ['min' => 1, 'placeholder' => '1'],
    'constraints' => [
        new \Symfony\Component\Validator\Constraints\Callback(
            function ($value, $context) {
                $reservation = $context->getRoot()->getData();
                $capacity    = $reservation->getEvenement()?->getCapacity();
                if ($capacity !== null && $value > $capacity) {
                    $context->buildViolation("Capacité maximale : {$capacity} place(s).")
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