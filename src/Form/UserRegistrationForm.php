<?php

namespace App\Form;

use App\Entity\UserMgr\Usuario;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserRegistrationForm extends AbstractType
{

  public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder
      ->add('username', TextType::class, [
        'label' => 'User name: ',
        'attr' => ['class' => 'form-control  '],
      ])
      ->add('email', EmailType::class, [
        'label' => 'Email: ',
        'attr' => ['class' => 'form-control  '],
      ])
      ->add('plainPassword', RepeatedType::class, [
        'type' => PasswordType::class,
        'label' => 'Contraseña: ',
        'attr' => ['class' => 'form-control '],
      ]) ;

  }

  public function configureOptions(OptionsResolver $resolver) {
    $resolver->setDefaults([
      'data_class' => Usuario::class,
      'validation_groups' => ['Default', 'Registration'],
    ]);
  }
}
