<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResetPasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('oldPassword', PasswordType::class, array(
                'label' => 'Votre ancien mot de passe'
            ))
            ->add('plainPassword', RepeatedType::class, array(

                'type' => PasswordType::class,
                'invalid_message' => 'Les deux mots de passe doivent être identiques',
                'options' => array(
                    'label' => 'Nouveau du mot de passe' ,
                    'attr' => array(
                        'class' => 'password-field'
                    )
                ),
                'required' => true,
            ))
            ->add('submit', SubmitType::class, array(
                'label' => 'Modification du mot de passe' ,
                'attr' => array(
                    'class' => 'btn btn-billy
                                btn-block'
                )
            ));

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => null
        ]);
    }
}
