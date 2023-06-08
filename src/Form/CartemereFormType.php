<?php

namespace App\Form;

use App\Entity\Cartemere;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CartemereFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('modele')
            ->add('marque')
            ->add('support_processeur')
            ->add('nbr_cpu_supporte')
            ->add('chipset')
            ->add('type_memoire')
            ->add('capacite_maximale_ram_par_slot')
            ->add('capacite_maximale_ram')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cartemere::class,
        ]);
    }
}
