<?php

namespace App\Form;

use App\Entity\Ordinateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrdinateurFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Alim')
            ->add('Boitier')
            ->add('Cm')
            ->add('Gpu')
            ->add('Hdd')
            ->add('Processeur')
            ->add('Ram')
            ->add('Refroidisseur')
            ->add('Ssd')
            ->add('Alimentation', EntityType::class, [
                'class' => Alimentation::class,
                'choice_label' => 'Alim',])
            ->add('Boitier', EntityType::class, [
                'class' => Boitier::class,
                'choice_label' => 'Boitier',])
            ->add('Cm', EntityType::class, [
                'class' => Cm::class,
                'choice_label' => 'Cm',])
            ->add('Gpu', EntityType::class, [
                'class' => Gpu::class,
                'choice_label' => 'Gpu',])
            ->add('Hdd', EntityType::class, [
                'class' => Hdd::class,
                'choice_label' => 'Hdd',])
            ->add('Processeur', EntityType::class, [
                'class' => Processeur::class,
                'choice_label' => 'Processeur',])
            ->add('Ram', EntityType::class, [
                'class' => Ram::class,
                'choice_label' => 'Ram',])
            ->add('Refroidisseur', EntityType::class, [
                'class' => Refroidisseur::class,
                'choice_label' => 'Refroidisseur',])
            ->add('Ssd', EntityType::class, [
                'class' => Ssd::class,
                'choice_label' => 'Ssd',])
                
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ordinateur::class,
        ]);
    }
}
