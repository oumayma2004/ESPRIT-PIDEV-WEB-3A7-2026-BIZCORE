<?php

namespace App\Form;

use App\Entity\Vendor;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Regex;

class VendorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom du vendeur',
                'attr'  => [
                    'placeholder' => 'Ex : Jean Dupont',
                    'class'       => 'form-control',
                    'maxlength'   => 100,
                ],
                'constraints' => [
                    new NotBlank(message: 'Le nom du vendeur est obligatoire.'),
                    new Length(
                        min: 2,
                        max: 100,
                        minMessage: 'Le nom doit contenir au moins {{ limit }} caractères.',
                        maxMessage: 'Le nom ne peut pas dépasser {{ limit }} caractères.'
                    ),
                    new Regex(
                        pattern: '/^[A-ZÀÂÇÉÈÊËÎÏÔÙÛÜŸÆŒ][a-zA-ZÀ-ÿ\s\-\']+$/',
                        message: 'Le nom doit commencer par une majuscule et ne contenir que des lettres.'
                    ),
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Adresse e-mail',
                'attr'  => [
                    'placeholder' => 'exemple@domaine.com',
                    'class'       => 'form-control',
                    'maxlength'   => 150,
                ],
                'constraints' => [
                    new NotBlank(message: "L'adresse e-mail est obligatoire."),
                    new Email(message: "L'adresse '{{ value }}' n'est pas une adresse e-mail valide."),
                    new Length(
                        max: 150,
                        maxMessage: "L'e-mail ne peut pas dépasser {{ limit }} caractères."
                    ),
                ],
            ])
            ->add('telephone', TextType::class, [
                'label'    => 'Téléphone',
                'required' => false,
                'attr'     => [
                    'placeholder' => '+216 XX XXX XXX',
                    'class'       => 'form-control',
                    'maxlength'   => 20,
                ],
                'constraints' => [
                    new Length(
                        max: 20,
                        maxMessage: 'Le numéro de téléphone ne peut pas dépasser {{ limit }} caractères.'
                    ),
                ],
            ])
            ->add('statut', ChoiceType::class, [
                'label'   => 'Statut',
                'choices' => [
                    'Actif'    => 'actif',
                    'Inactif'  => 'inactif',
                    'Suspendu' => 'suspendu',
                ],
                'attr' => ['class' => 'form-select'],
                'constraints' => [
                    new NotBlank(message: 'Le statut est obligatoire.'),
                ],
            ])
            ->add('products', \Symfony\Bridge\Doctrine\Form\Type\EntityType::class, [
                'class' => \App\Entity\Product::class,
                'choice_label' => 'nomProduit',
                'multiple' => true,
                'expanded' => false,
                'required' => false,
                'by_reference' => false,
                'label' => 'Produits associés',
                'attr' => [
                    'class' => 'form-control',
                    'style' => 'height: 120px;',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Vendor::class,
            // Désactive la validation HTML5 : Symfony valide côté serveur
            'attr'       => ['novalidate' => 'novalidate'],
        ]);
    }
}
