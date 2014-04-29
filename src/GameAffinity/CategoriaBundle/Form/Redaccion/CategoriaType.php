<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GameAffinity\CategoriaBundle\Form\Redaccion;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Description of CategoriaType
 *
 * @author Ramiro Andres
 */
class CategoriaType extends AbstractType {

    //put your code here
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nombre')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'GameAffinity\CategoriaBundle\Entity\Categoria'
        ))
        ;
    }

    public function getName() {
        return 'gameaffinity_categoriabundle_categoriatype';
    }

}
