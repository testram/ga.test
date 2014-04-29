<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GameAffinity\ValoracionBundle\Form\Frontend;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Description of ValoracionType
 *
 * @author Ramiro Andres
 */
class ValoracionType extends AbstractType {

    //put your code here

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('calificacion', 'choice', array(
                    'choices' => array(
                        '10' => '10 -Excelente',
                        '9' => '9 - Muy bueno',
                        '8' => '8 - Notable',
                        '7' => '7 - Bueno',
                        '6' => '6 - Interesante',
                        '5' => '5 - Pasable',
                        '4' => '4 - Regular',
                        '3' => '3 - Flojo',
                        '2' => '2 - Malo',
                        '1' => '1 - Muy malo'
                    )
                ))
                ->add('titulo')
                ->add('opinion', 'textarea')
                ->add('enviar', 'submit')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'GameAffinity\ValoracionBundle\Entity\Valoracion'
        ));
    }

    public function getName() {
        return 'gameaffinity_valoracionbundle_valoracion';
    }

}







