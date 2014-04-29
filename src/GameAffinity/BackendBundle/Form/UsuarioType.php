<?php

namespace GameAffinity\BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuarioType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cid')
            ->add('codigo_confirmacion')
            ->add('username')
            ->add('email')
            ->add('password')
            ->add('fechaAlta')
            ->add('fechaBaja')
            ->add('foto')
            ->add('ultimo_acceso')
            ->add('role')
            ->add('salt')
            ->add('activo')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GameAffinity\UsuarioBundle\Entity\Usuario'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gameaffinity_backendbundle_usuario';
    }
}
