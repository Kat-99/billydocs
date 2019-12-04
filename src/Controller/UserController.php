<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\BaseFormType;
use App\Form\ButtonFirstLogFormType;
use App\Form\ButtonLogFormType;
use App\Form\NameFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Validator\Constraints as Assert;

class UserController extends AbstractController
{
    /**
     * @Route("/acceuil", name="user")
     */
    public function firstlog()
    {
        $user = new User();

        $form = $this->createForm(BaseFormType::class);
        $formone = $this->createForm(ButtonFirstLogFormType::class);
        $formtwo = $this->createForm(ButtonLogFormType::class);
        $formbis = $this->createForm(NameFormType::class);

        return $this->render('user/create.html.twig',array(
            'form'=>$form->createView(),
            'formfirst'=>$formone->createView(),
            'formname'=>$formbis->createView(),
            'formlog'=>$formtwo->createView()));
    }

    }


