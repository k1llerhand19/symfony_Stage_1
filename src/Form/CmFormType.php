<?php

namespace App\Form;

use App\Entity\Cm;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;


class CmFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom')
            ->add('Modele')
            ->add('Marque')
            ->add('Support_processeur')
            ->add('Nbr_cpu_supporte', IntegerType::class)
            ->add('Chipset')
            ->add('Type_memoire')
            ->add('Capa_maxi_ram_par_slot', IntegerType::class)
            ->add('Capa_maxi_ram', IntegerType::class)
            ->add('Stock', IntegerType::class)
            /*->add('Ordinateur', EntityType::class, [
                'class' => Cm::class,
                'choice_label' => 'Cm',])*/
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cm::class,
        ]);
    }
}
