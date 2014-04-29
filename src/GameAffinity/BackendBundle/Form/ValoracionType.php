<?php

namespace GameAffinity\ValoracionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ValoracionType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo')
            ->add('calificacion')
            ->add('opinion')
            ->add('puntaje')
            ->add('revisado')
            ->add('post')
            ->add('usuario')
            ->add('redactor')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GameAffinity\ValoracionBundle\Entity\Valoracion'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gameaffinity_valoracionbundle_valoracion';
    }
}
