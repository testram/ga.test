<?php

namespace GameAffinity\JuegoBundle\Form\Redaccion;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use GameAffinity\JuegoBundle\Form\Foto\FotoType;///comentario nuevo 30 abril/////
//use GameAffinity\JuegoBundle\Entity\Foto;

class JuegoType extends AbstractType {

    //put your code here
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nombre')
                ->add('uploaded_foto', 'file', array('required' => false))
                ->add('fecha_lanzamiento', 'date', array(
                    'input' => 'datetime',
                    'widget' => 'single_text'
                ))
                ->add('critica', 'textarea')
                ->add('desarrollador', 'entity', array(
                    'class' => 'DesarrolladorBundle:Desarrollador',
                    'property' => 'nombre',
                    'empty_value' => 'Escoje un Desarrollador'
                ))
                ->add('categorias', 'entity', array(
                    'class' => 'CategoriaBundle:Categoria',
                    'property' => 'nombre',
                    'expanded' => true,
                    'multiple' => true
                ))
                ->add('sistemas', 'entity', array(
                    'class' => 'SistemaBundle:Sistema',
                    'property' => 'nombre',
                    'expanded' => true,
                    'multiple' => true
                ))
                ->add('fotosSecundarias', 'collection', array(
                    'type' => new FotoType(),
                    'allow_add' =>  true,
                    'allow_delete' =>true,                    
                    'by_reference' =>false,                    
                    'options' => array(
                        'required' => false
                    )
                ))
                ->add('puntuacion', 'choice', array(
                    'choices' => array(
                        '10' => '10 -Excelente',
                        '9' => '9 - Muy bueno',
                        '8' => '8 - Notable',
                        '7' => '7 - Bueno',
                        '6' => '6 - Interesante',
                        '5' => '5 - Pasable',
                        '4' => '4 - Regular',
                        '3' => '3 - Flojo',
                        '2' => '2 - Malo',
                        '1' => '1 - Muy malo'
                    )
                ))
                ->add('Crear', 'submit')

        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'GameAffinity\JuegoBundle\Entity\Juego'
        ))

        ;
    }

    public function getName() {
        return 'gameaffinity_juegobundle_juegotype';
    }

}
