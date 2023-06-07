<?php

namespace App\Form;

use App\Entity\Gpu;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GpuFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom')
            ->add('Modele')
            ->add('Marque')
            ->add('Chipset_graphique')
            ->add('Taille_memoire')
            ->add('Type_memoire')
            ->add('Stock')
            /*->add('Ordinateur', EntityType::class, [
                'class' => Gpu::class,
                'choice_label' => 'Gpu',])*/
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Gpu::class,
        ]);
    }
}
