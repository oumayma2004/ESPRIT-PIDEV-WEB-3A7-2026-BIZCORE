<?php

namespace App\Form;

use App\Entity\DomaineCoaching;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class DomaineCoachingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomDomaine', TextType::class, [
                'label' => 'Nom du domaine',
                'attr'  => ['class' => 'form-control', 'placeholder' => 'Ex: Leadership', 'maxlength' => 100],
                'constraints' => [
                    new Assert\NotBlank(message: 'Le nom du domaine est obligatoire.'),
                    new Assert\Length(min: 2, max: 100,
                        minMessage: 'Le nom doit contenir au minimum {{ limit }} caractères.',
                        maxMessage: 'Le nom ne peut pas dépasser {{ limit }} caractères.'),
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr'  => ['class' => 'form-control', 'rows' => 4, 'placeholder' => 'Description complète du domaine...'],
                'constraints' => [
                    new Assert\NotBlank(message: 'La description est obligatoire.'),
                    new Assert\Length(min: 10, minMessage: 'La description doit contenir au minimum {{ limit }} caractères.'),
                ],
            ])
            ->add('niveauDifficulte', ChoiceType::class, [
                'label'   => 'Niveau de difficulté',
                'choices' => [
                    'Débutant'      => 'Débutant',
                    'Intermédiaire'  => 'Intermédiaire',
                    'Expert'         => 'Expert',
                ],
                'attr' => ['class' => 'form-select'],
                'constraints' => [
                    new Assert\NotBlank(message: 'Le niveau de difficulté est obligatoire.'),
                    new Assert\Choice(
                        choices: ['Débutant', 'Intermédiaire', 'Expert'],
                        message: 'Veuillez choisir un niveau valide.'
                    ),
                ],
            ])
            ->add('dureeFormationHeures', IntegerType::class, [
                'label'  => 'Durée de formation (heures)',
                'attr'   => ['class' => 'form-control', 'placeholder' => 'Ex: 40', 'min' => 1],
                'constraints' => [
                    new Assert\NotBlank(message: 'La durée de formation est obligatoire.'),
                    new Assert\Positive(message: 'La durée doit être un entier positif supérieur à zéro.'),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(['data_class' => DomaineCoaching::class]);
    }
}
