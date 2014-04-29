<?php

namespace GameAffinity\BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SistemaType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nombre')
                ->add('slug')
                ;
    }

        /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GameAffinity\SistemaBundle\Entity\Sistema'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gameaffinity_backendbundle_sistema';
    }
}
