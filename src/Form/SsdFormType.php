<?php

namespace App\Form;

use App\Entity\Ssd;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SsdFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom')
            ->add('Modele')
            ->add('Marque')
            ->add('Capacite')
            ->add('Vitesse_lecture')
            ->add('Vitesse_ecriture')
            ->add('Stock')
            /*->add('Ordinateur', EntityType::class, [
                'class' => Ssd::class,
                'choice_label' => 'Ssd',])*/
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ssd::class,
        ]);
    }
}
