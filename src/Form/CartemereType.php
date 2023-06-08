<?php

namespace App\Form;

use App\Entity\Cartemere;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CartemereType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('marque')
            ->add('modele')
            ->add('support_cpu')
            ->add('nbr_cpu_supporte')
            ->add('chipset')
            ->add('type_memoire')
            ->add('capa_maxi_ram_par_slot')
            ->add('capa_maxi_ram')
            ->add('stock')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cartemere::class,
        ]);
    }
}
