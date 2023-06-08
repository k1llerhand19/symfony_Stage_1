<?php

namespace App\Form;

use App\Entity\Cpu;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CpuFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('modele')
            ->add('marque')
            ->add('support_processeur')
            ->add('frequence_cpu')
            ->add('nbr_core')
            ->add('nbr_threads')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cpu::class,
        ]);
    }
}
