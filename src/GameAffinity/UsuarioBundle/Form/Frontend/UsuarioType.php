<?php

namespace GameAffinity\UsuarioBundle\Form\Frontend;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuarioType extends AbstractType {

    //put your code here
    public function setDefaultOptions(OptionsResolverInterface $resolver) {

        $resolver->setDefaults(array(
            'data_class' => 'GameAffinity\UsuarioBundle\Entity\Usuario'
        ));
    }

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nombre')
                ->add('email')
                ->add('username')
                ->add('password', 'repeated', array(
                    'type' => 'password',
                    'invalid_message' => 'Las contraseñas deben coincidir',
                    'first_options' => array('label' => 'Contraseña'),
                    'second_options' => array('label' => 'Repita la contraseña')
                ))
                ->add('uploaded_foto', 'file', array('required' => false, 'label' => 'Foto'))
                ->add('Registrarme', 'submit')

        ;
    }

    public function getName() {
        return 'GameAffinity_UsuarioBundle_UsuarioType';
    }

}
