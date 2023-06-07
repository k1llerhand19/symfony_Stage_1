<?php

namespace App\Form;

use App\Entity\Alimentation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AlimFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom')
            ->add('Modele')
            ->add('Marque')
            ->add('Puissance')
            ->add('Stock')
           /* ->add('Ordinateur', EntityType::class, [
                'class' => Alimentation::class,
                'choice_label' => 'Alim',]);*/
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Alimentation::class,
        ]);
    }
}



/*<FORM action="" METHOD="POST">
                    <label for="nom">nom  :</label>
                        <br>
                    <input type="String" id="nom" name="nom">
                        <br>
                        <br>
                    <label for="Modele">Modele :</label>
                        <br>
                    <input type="String" id="modele" name="modele">
                        <br>
                        <br>
                    <label for="Marque">Marque :</label>
                        <br>
                    <input type="String" id="Marque" name="marque">
                        <br>
                        <br>	   
                    <label for="Puissance">Puissance :</label>
                        <br>
                    <input type="number" id="Puissance" name="puissance">
                        <br>
                        <br>	   
                    <label for="Stock">Stock :</label>
                        <br>
                    <input type="number" id="stock" name="stock">	
                        <br>
                        <br>


                    <button  type="submit" class="btn btn-success">
                        Enregistrer
                    </button>

                    
                </form>*/

                /*{{form_start(form_alim)}}

                 <div class="form-group">
                    {{form_label(form_alim.nom)}}
                    {{form_widget(form_alim.nom)}}
                    
                 </div> 

                 <div class="form-group">
                    {{form_label(form_alim.modele)}}
                    {{form_widget(form_alim.modele)}}
                 </div> 

                 <div class="form-group">
                    {{form_label(form_alim.marque)}}
                    {{form_widget(form_alim.marque)}}
                 </div>   

                 <div class="form-group">
                    {{form_label(form_alim.puissance)}}
                    {{form_widget(form_alim.puissance)}}
                 </div>

                 <div class="form-group">
                    {{form_label(form_alim.stock)}}
                    {{form_widget(form_alim.stock)}}
                 </div> 

                {{form_end(form_alim)}}
            */