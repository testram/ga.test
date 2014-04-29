<?php

namespace GameAffinity\BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class JuegoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('slug')
            ->add('foto')
            ->add('fecha_lanzamiento')
            ->add('critica')
            ->add('puntuacion')
            ->add('votos')
            ->add('desarrollador')
            ->add('categorias')
            ->add('sistemas')
            ->add('redaccion')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GameAffinity\JuegoBundle\Entity\Juego'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gameaffinity_backendbundle_juego';
    }
}
