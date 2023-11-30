<?php

namespace App\Form;

use App\Entity\CategorieChaussure;
use App\Entity\Chaussure;
use App\Entity\Marque;
use App\Entity\TailleChaussure;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChaussureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', null, [
                'label' => 'Nom de la chaussure'
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
                'class' => CategorieChaussure::class,
                'choice_label' => 'categorie',
                'label' => 'Categorie'
            ])
            ->add('taille', EntityType::class, [
                'class' => TailleChaussure::class,
                'choice_label' => 'taille',
                'label' => 'Taille',
                'multiple' => true,
                'expanded' => true,
                'attr' => [
                    'class' => ''

                ]

            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Chaussure::class,
        ]);
    }
}
