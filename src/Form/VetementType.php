<?php

namespace App\Form;

use App\Entity\CategorieVetement;
use App\Entity\Marque;
use App\Entity\TailleVetement;
use App\Entity\Vetement;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VetementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom du vetement'
            ])
            ->add('urlImage', null, [
                'label' => 'Url de l\'image'
            ])
            ->add('marque', EntityType::class, [
                'class' => Marque::class,
                'choice_label' => 'nom',
                'label' => 'Marque'
            ])
            ->add('categorie', EntityType::class, [
                'class' => CategorieVetement::class,
                'choice_label' => 'categorie',
                'label' => 'Categorie'
            ])
            ->add('taille', EntityType::class, [
                'class' => TailleVetement::class,
                'label' => 'Taille',
                'choice_label' => 'taille',
                'multiple' => true,
                'expanded' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Vetement::class,
        ]);
    }
}
