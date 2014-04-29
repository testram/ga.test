<?php

namespace GameAffinity\JuegoBundle\Form\Foto;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FotoType extends AbstractType {
    //put your code here
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('virtualFoto', 'file', array( 'required' => false))
                
                
                ;
       
    }
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'GameAffinity\JuegoBundle\Entity\Foto'
        ));
    }
    public function getName() {
        return 'gameaffinity_juegobundle_fototype';
    }
}
