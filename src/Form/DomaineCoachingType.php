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

class DomaineCoachingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomDomaine', TextType::class, [
                'label' => 'Nom du domaine',
                'attr'  => ['class' => 'form-control', 'placeholder' => 'Ex: Leadership', 'maxlength' => 100],
            ])
            ->add('description', TextareaType::class, [
                'label'    => 'Description',
                'required' => false,
                'attr'     => ['class' => 'form-control', 'rows' => 3, 'placeholder' => 'Description du domaine...'],
            ])
            ->add('niveauDifficulte', ChoiceType::class, [
                'label'   => 'Niveau de difficulté',
                'choices' => [
                    'Débutant'       => 'Débutant',
                    'Intermédiaire'  => 'Intermédiaire',
                    'Expert'         => 'Expert',
                ],
                'attr' => ['class' => 'form-select'],
            ])
            ->add('dureeFormationHeures', IntegerType::class, [
                'label'    => 'Durée de formation (heures)',
                'required' => false,
                'attr'     => ['class' => 'form-control', 'placeholder' => 'Ex: 40', 'min' => 0],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(['data_class' => DomaineCoaching::class]);
    }
}
