<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GameAffinity\DesarrolladorBundle\Form\Redaccion;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Description of DesarrolladorType
 *
 * @author Ramiro Andres
 */
class DesarrolladorType extends AbstractType {
    //put your code here
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nombre')
                ;
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'GameAffinity\DesarrolladorBundle\Entity\Desarrollador'
        ));
    }
    
    public function getName() {
        return 'gameaffinity_desarrolladorbundle_desarrolladortype';
    }
}
