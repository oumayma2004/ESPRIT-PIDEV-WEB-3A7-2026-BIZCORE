<?php

namespace App\Form;

use App\Entity\Evenement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Positive;
use Symfony\Component\Validator\Constraints\GreaterThan;
<<<<<<< HEAD
use Symfony\Component\Validator\Constraints\Regex;
=======
>>>>>>> gdd

class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre',
                'attr' => ['novalidate' => 'novalidate'],
                'constraints' => [
                    new NotBlank(message: 'Le titre est obligatoire.'),
                    new Length(
                        min: 3,
                        max: 100,
                        minMessage: 'Le titre doit contenir au moins {{ limit }} caractères.',
                        maxMessage: 'Le titre ne peut pas dépasser {{ limit }} caractères.'
                    ),
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'constraints' => [
                    new NotBlank(message: 'La description est obligatoire.'),
                    new Length(
                        min: 10,
                        minMessage: 'La description doit contenir au moins {{ limit }} caractères.'
                    ),
                ],
            ])
            ->add('price', NumberType::class, [
                'label' => 'Prix (TND)',
                'scale' => 2,
                'constraints' => [
                    new NotBlank(message: 'Le prix est obligatoire.'),
                    new Positive(message: 'Le prix doit être un nombre positif.'),
                ],
            ])
            ->add('date', DateTimeType::class, [
    'label' => 'Date',
    'widget' => 'single_text',
    'constraints' => [
        new NotBlank(message: 'La date est obligatoire.'),
        new GreaterThan(
            value: 'today',
            message: 'La date doit être dans le futur.'
        ),
    ],
])
            ->add('capacity', IntegerType::class, [
                'label' => 'Capacité',
                'constraints' => [
                    new NotBlank(message: 'La capacité est obligatoire.'),
                    new Positive(message: 'La capacité doit être un nombre positif.'),
                ],
            ])
<<<<<<< HEAD
            ->add('lieu', TextType::class, [
    'label'    => 'Lieu / Adresse',
    'required' => true,
    'attr'     => [
        'placeholder' => 'Ex: Avenue Habib Bourguiba, Tunis',
        'class'       => 'form-control',
        'minlength'   => 5,
        'maxlength'   => 255,
    ],
    'constraints' => [
        new NotBlank(message: 'Le lieu est obligatoire.'),
        new Length([
            'min'        => 5,
            'max'        => 255,
            'minMessage' => 'Le lieu doit contenir au moins {{ limit }} caractères.',
            'maxMessage' => 'Le lieu ne peut pas dépasser {{ limit }} caractères.',
        ]),
        new Regex([
            'pattern' => '/^[a-zA-ZÀ-ÿ0-9\s\,\.\-\/]+$/u',
            'message' => 'Le lieu contient des caractères non valides.',
        ]),
    ],
])
=======
>>>>>>> gdd
            ->add('image', FileType::class, [
                'label' => 'Image (jpg/png/gif)',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/gif'],
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPEG, PNG, GIF).',
                        'maxSizeMessage' => 'Le fichier est trop volumineux. La taille maximale est 2Mo.',
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
            'attr' => ['novalidate' => 'novalidate'], // Disable HTML5 validation globally
        ]);
    }
}