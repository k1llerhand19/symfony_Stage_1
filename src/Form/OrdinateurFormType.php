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
            ->add('alim')
            ->add('boitier')
            ->add('cm')
            ->add('gpu')
            ->add('hdd')
            ->add('processeur')
            ->add('ram')
            ->add('refroidisseur')
            ->add('Sssd')
            ->add('alimentation', EntityType::class, [
                'class' => Alimentation::class,
                'choice_label' => 'alim',])
            ->add('boitier', EntityType::class, [
                'class' => Boitier::class,
                'choice_label' => 'boitier',])
            ->add('cm', EntityType::class, [
                'class' => Cm::class,
                'choice_label' => 'cm',])
            ->add('gpu', EntityType::class, [
                'class' => Gpu::class,
                'choice_label' => 'gpu',])
            ->add('hdd', EntityType::class, [
                'class' => Hdd::class,
                'choice_label' => 'hdd',])
            ->add('processeur', EntityType::class, [
                'class' => Processeur::class,
                'choice_label' => 'processeur',])
            ->add('ram', EntityType::class, [
                'class' => Ram::class,
                'choice_label' => 'ram',])
            ->add('refroidisseur', EntityType::class, [
                'class' => Refroidisseur::class,
                'choice_label' => 'refroidisseur',])
            ->add('ssd', EntityType::class, [
                'class' => Ssd::class,
                'choice_label' => 'ssd',])
                
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ordinateur::class,
        ]);
    }
}
