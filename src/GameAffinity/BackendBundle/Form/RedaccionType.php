<?php

namespace GameAffinity\BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RedaccionType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nombre')
                ->add('username')
                ->add('email')
                ->add('password' , 'repeated', array(
                   'type' => 'password',
                    'invalid_message' => 'Las contraseñas no coinciden',
                    'first_options' => array('label' =>'Contraseña'),
                    'second_options' => array('label' => 'Repita la contraseña')
                ))
                ->add('foto')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'GameAffinity\RedaccionBundle\Entity\Redaccion'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'gameaffinity_backendbundle_redaccion';
    }

}
