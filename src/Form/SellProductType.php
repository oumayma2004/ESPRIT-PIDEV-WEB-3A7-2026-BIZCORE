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

class SellProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomProduit', TextType::class, [
                'label' => 'Titre de l\'annonce',
                'attr' => ['placeholder' => 'Ex: Formation Symfony 6'],
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
            ])
            ->add('prix', \Symfony\Component\Form\Extension\Core\Type\TextType::class, [
                'label' => 'Prix (€)',
                'attr' => ['placeholder' => 'Ex: 49.99'],
            ])
            ->add('stockDisponible', NumberType::class, [
                'label' => 'Quantité disponible',
                'html5' => true,
                'attr' => ['min' => 1]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description détaillée',
                'attr' => ['rows' => 5, 'placeholder' => 'Décrivez votre produit...'],
                'required' => false,
            ])
            ->add('imageFile', \Symfony\Component\Form\Extension\Core\Type\FileType::class, [
                'label' => 'Image du produit',
                'mapped' => false,
                'required' => false,
                'attr' => ['accept' => 'image/*'],
            ])
            ->add('vendorName', \Symfony\Component\Form\Extension\Core\Type\TextType::class, [
                'label' => 'Nom du Vendeur',
                'mapped' => false,
                'required' => true,
                'attr' => ['placeholder' => 'Ex: Dhia jbali'],
            ])
            ->add('telephone', \Symfony\Component\Form\Extension\Core\Type\TelType::class, [
                'label' => 'Numéro de téléphone',
                'mapped' => false,
                'required' => false,
                'attr' => ['placeholder' => 'Ex: +216 99 999 999'],
            ])
            ->add('rating', \Symfony\Component\Form\Extension\Core\Type\NumberType::class, [
                'label' => 'Note (Étoiles)',
                'mapped' => false,
                'required' => true,
                'html5' => true,
                'attr' => ['min' => 0, 'max' => 5, 'step' => '0.1', 'placeholder' => 'Ex: 4.8'],
            ])
            ->add('statut', ChoiceType::class, [
                'label' => 'Statut de l\'annonce',
                'choices' => [
                    'Actif (Disponible)' => 'Disponible',
                    'Inactif (Caché)' => 'Inactif',
                    'Suspendu' => 'Suspendu',
                    'Rupture' => 'Rupture',
                ],
                // On met 'Disponible' par défaut
                'data' => 'Disponible',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
