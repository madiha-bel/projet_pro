<?php

namespace App\Form;

use App\Entity\Options;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OptionsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('reponse1')
            ->add('reponse2')
            ->add('reponse3')
            ->add('reponse4')
            ->add('resultat_reponse')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Options::class,
        ]);
    }
}
