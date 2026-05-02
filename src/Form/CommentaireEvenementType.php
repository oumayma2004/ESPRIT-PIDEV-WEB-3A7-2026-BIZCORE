<?php

namespace App\Form;

use App\Entity\CommentaireEvenement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentaireEvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('contenu', TextareaType::class, [
                'label' => 'Votre commentaire',
                'attr'  => [
                    'placeholder' => 'Partagez votre avis sur cet événement...',
                    'rows'        => 4,
                ],
            ])
            ->add('note', ChoiceType::class, [
                'label'    => 'Note (optionnelle)',
                'required' => false,
                'choices'  => [
                    '⭐ 1 — Mauvais'       => 1,
                    '⭐⭐ 2 — Passable'    => 2,
                    '⭐⭐⭐ 3 — Moyen'     => 3,
                    '⭐⭐⭐⭐ 4 — Bien'    => 4,
                    '⭐⭐⭐⭐⭐ 5 — Excellent' => 5,
                ],
                'placeholder' => '— Sélectionner une note —',
                'attr' => ['class' => 'note-select'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CommentaireEvenement::class,
        ]);
    }
}
