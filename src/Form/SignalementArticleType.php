<?php

namespace App\Form;

use App\Entity\SignalementArticle;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class SignalementArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('motif', ChoiceType::class, [
                'label'       => 'Motif du signalement',
                'choices'     => SignalementArticle::MOTIFS,
                'placeholder' => '— Choisir un motif —',
                'constraints' => [
                    new NotBlank(message: 'Veuillez sélectionner un motif.'),
                ],
            ])
            ->add('description', TextareaType::class, [
                'label'    => 'Explication (optionnel)',
                'required' => false,
                'attr'     => [
                    'rows'        => 4,
                    'placeholder' => 'Décrivez brièvement pourquoi vous signalez cet article…',
                    'maxlength'   => 1000,
                ],
                'constraints' => [
                    new Length([
                        'max'        => 1000,
                        'maxMessage' => 'La description ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SignalementArticle::class,
            'attr'       => ['novalidate' => 'novalidate'],
        ]);
    }
}