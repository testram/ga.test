<?php

namespace GameAffinity\RedaccionBundle\Form\Redaccion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RedaccionType extends AbstractType{
    //put your code here
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nombre')
                ->add('username')
                ->add('password' , 'repeated' , array(
                    'type' =>'password',
                    'invalid_message' => 'Las contraseñas no coinciden',
                    'options' => array ('label' => 'Contraseña')
                ))
                ->add('email' , 'email')
                ->add('foto', 'file', array('required' => false))
                ;
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults( array(
            'data_class' => 'GameAffinity\RedaccionBundle\Entity\Redaccion'
        ));
    }
    
    public function getName() {
        return 'GameAffinity_RedaccionBundle_RedaccionType';
    }
}
