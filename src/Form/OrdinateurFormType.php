<?php

namespace App\Form;

use App\Entity\Ordinateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class OrdinateurFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('modele')
            ->add('marque')
            ->add('alimentaion',EntityType::class, [
                'class' => AlimentationFormType::class,
                'choice_label' => 'nom',])
            ->add('boitier', EntityType::class, [
                'class' => Boitier::class,
                'choice_label' => 'nom',])
            ->add('carte_mere', EntityType::class, [
                'class' => Cartemere::class,
                'choice_label' => 'nom',])
            ->add('cpu', EntityType::class, [
                'class' => Cpu::class,
                'choice_label' => 'nom',])
            ->add('gpu', EntityType::class, [
                'class' => Gpu::class,
                'choice_label' => 'nom',])
            ->add('hdd', EntityType::class, [
                'class' => Hdd::class,
                'choice_label' => 'nom',])
            ->add('ram', EntityType::class, [
                'class' => Ram::class,
                'choice_label' => 'nom',])
            ->add('refroidisseur', EntityType::class, [
                'class' => Refroidisseur::class,
                'choice_label' => 'nom',])
            ->add('ssd', EntityType::class, [
                'class' => Ssd::class,
                'choice_label' => 'nom',])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ordinateur::class,
        ]);
    }
}
