<?php

namespace App\Form;

use App\Entity\Boitier;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;


class BoitierFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom')
            ->add('Modele')
            ->add('Marque')
            ->add('Format_boitier')
            ->add('Format_alim')
            ->add('Stock', IntegerType::class)
            /*->add('Ordinateur', EntityType::class, [
                'class' => Boitier::class,
                'choice_label' => 'Boitier',])*/
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Boitier::class,
        ]);
    }
}
