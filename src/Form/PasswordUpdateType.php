<?php

namespace App\Form;

use App\Entity\PasswordUpdate;
use App\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PasswordUpdateType extends ApplicationType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('oldPassword', PasswordType::class ,
                $this->getConfiguration("Ancien mot de passe",
                    "Votre mot de passe actuel"))
            ->add('newPassword', PasswordType::class ,  $this->getConfiguration(
              "nouveau mot de passe" , "taper votre nouveau mot de passe"
            ) )
            ->add('confirmPassword', PasswordType::class , $this->getConfiguration(
             "confirmer votre mot de passe" ,  "confirmer votre mot de passe"
            ))

            ->add('save', submitType::class,[
                'label'  => 'Enregistrer les modifications du mot de passe'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
//            'data_class' => PasswordUpdate::class,
        ]);
    }
}
