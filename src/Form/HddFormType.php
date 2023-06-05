<?php

namespace App\Form;

use App\Entity\Hdd;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HddFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom')
            ->add('Modele')
            ->add('Marque')
            ->add('Capacite')
            ->add('Vitesse_rotation')
            ->add('Stock')
            ->add('Ordinateur', EntityType::class, [
                'class' => Hdd::class,
                'choice_label' => 'Hdd',])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Hdd::class,
        ]);
    }
}
