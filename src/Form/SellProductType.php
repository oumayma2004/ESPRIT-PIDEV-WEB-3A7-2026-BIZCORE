<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Positive;
use Symfony\Component\Validator\Constraints\PositiveOrZero;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Validator\Constraints\Regex;

class SellProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomProduit', TextType::class, [
                'label' => 'Titre de l\'annonce',
                'attr' => ['placeholder' => 'Ex: Formation Symfony 6'],
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez saisir un titre.']),
                    new Length([
                        'min' => 3,
                        'minMessage' => 'Le titre doit faire au moins {{ limit }} caractères.',
                        'max' => 255,
                    ])
                ],
            ])
            ->add('categorie', ChoiceType::class, [
                'label' => 'Catégorie',
                'choices' => [
                    'Formations' => 'Formations',
                    'Services' => 'Services',
                    'Livres' => 'Livres',
                    'Chat bot' => 'Chat bot',
                    'Abonnement' => 'Abonnement',
                    'Application' => 'Application',
                    'Autre' => 'Autre',
                ],
                'placeholder' => 'Sélectionnez une catégorie',
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez sélectionner une catégorie.']),
                ],
            ])
            ->add('prix', \Symfony\Component\Form\Extension\Core\Type\TextType::class, [
                'label' => 'Prix (€)',
                'attr' => ['placeholder' => 'Ex: 49.99'],
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez saisir un prix.']),
                    new Positive(['message' => 'Le prix doit être strictement positif.']),
                ],
            ])
            ->add('stockDisponible', NumberType::class, [
                'label' => 'Quantité disponible',
                'html5' => true,
                'attr' => ['min' => 1],
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez saisir la quantité en stock.']),
                    new Positive(['message' => 'La quantité doit être supérieure à 0.']),
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description détaillée',
                'attr' => ['rows' => 5, 'placeholder' => 'Décrivez votre produit...'],
                'required' => false,
                'constraints' => [
                    new Length([
                        'min' => 10,
                        'minMessage' => 'La description doit faire au moins {{ limit }} caractères si elle est renseignée.',
                    ])
                ],
            ])
            ->add('imageFile', \Symfony\Component\Form\Extension\Core\Type\FileType::class, [
                'label' => 'Image du produit',
                'mapped' => false,
                'required' => false,
                'attr' => ['accept' => 'image/*'],
                'constraints' => [
                    new Image([
                        'maxSize' => '5M',
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/gif', 'image/webp'],
                        'mimeTypesMessage' => 'Veuillez uploader une image valide (JPG, PNG, GIF, WEBP).',
                    ])
                ],
            ])
            ->add('vendorName', \Symfony\Component\Form\Extension\Core\Type\TextType::class, [
                'label' => 'Nom du Vendeur',
                'mapped' => false,
                'required' => true,
                'attr' => ['placeholder' => 'Ex: Dhia jbali'],
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez saisir le nom du vendeur.']),
                    new Length([
                        'min' => 2,
                        'minMessage' => 'Le nom du vendeur doit faire au moins {{ limit }} caractères.',
                    ])
                ],
            ])
            ->add('telephone', \Symfony\Component\Form\Extension\Core\Type\TelType::class, [
                'label' => 'Numéro de téléphone',
                'mapped' => false,
                'required' => false,
                'attr' => ['placeholder' => 'Ex: +216 99 999 999'],
                'constraints' => [
                    new Regex([
                        'pattern' => '/^\+?[0-9\s\-\(\)]+$/',
                        'message' => 'Veuillez saisir un numéro de téléphone valide.',
                    ])
                ],
            ])
            ->add('rating', \Symfony\Component\Form\Extension\Core\Type\NumberType::class, [
                'label' => 'Note (Étoiles)',
                'mapped' => false,
                'required' => true,
                'html5' => true,
                'attr' => ['min' => 0, 'max' => 5, 'step' => '0.1', 'placeholder' => 'Ex: 4.8'],
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez saisir une note.']),
                    new Range([
                        'min' => 0,
                        'max' => 5,
                        'notInRangeMessage' => 'La note doit être comprise entre {{ min }} et {{ max }}.',
                    ])
                ],
            ])
            ->add('statut', ChoiceType::class, [
                'label' => 'Statut de l\'annonce',
                'choices' => [
                    'Actif (Disponible)' => 'Disponible',
                    'Inactif (Caché)' => 'Inactif',
                    'Suspendu' => 'Suspendu',
                    'Rupture' => 'Rupture',
                ],
                'data' => 'Disponible',
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez sélectionner un statut.']),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
