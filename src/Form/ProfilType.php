<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfilType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lastname', TextType::class, [
                'label' => 'Votre nom' ,
                'attr' => [
                    'placeholder' => 'Saisissez votre nom'
                ]
            ])
            ->add('firstname', TextType::class, [
                'label' => 'Votre prenom' ,
                'attr' => [
                    'placeholder' => 'Saisissez votre prenom'
                ]
            ])
            ->add('email', TextType::class, [
                'label' => 'Votre email',
                'attr' => [
                    'placeholder' => 'Saisissez votre email'
                ]
            ])
            ->add('save', submitType::class,[
                'label'  => 'Enregistrer les modifications']);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
