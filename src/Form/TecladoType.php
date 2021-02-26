<?php

namespace App\Form;

use App\Entity\Teclado;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Entity\Categoria;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class TecladoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre',  TextType::class, array(
                            'label' => 'Nombre',
                            'attr' => array('class'=>'form-control  ')
                ))
            ->add('descripcion',  TextareaType::class, array(
            'label' => 'Descripción',
            'attr' => array('class'=>'form-control textarea')
                ))
            ->add('imagen',  TextType::class, array(
                            'label' => 'Imagen',
                            'attr' => array('class'=>'form-control  ')
                ))
            ->add('precio',  TextType::class, array(
                            'label' => 'Precio',
                            'attr' => array('class'=>'form-control  ')
                ))
            ->add('categoria',  EntityType::class, array(
                            'label' => 'Categoría',
                            'class' => Categoria::class,
                            'attr' => array('class'=>'form-control  ')
                ))
            ->add('save', SubmitType::class, array('label' => 'Guardar',  'attr' => array('class'=>'btn btn-primary')))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Teclado::class,
        ]);
    }
}
