<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NameFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('firstname', TextType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Saisissez votre prénom'
                ]
            ])
            ->add('lastname', TextType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Saisissez votre nom'
                ]
            ])

            ->getForm();
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
