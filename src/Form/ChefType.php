<?php

namespace App\Form;

use App\Entity\Chef;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChefType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('poste')
            ->add('photos')
            ->add('facebook')
            ->add('instagram')
            ->add('twitter')
            ->add('linkedin')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Chef::class,
        ]);
    }
}
