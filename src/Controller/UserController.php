<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ProfilType;
use App\Form\PasswordUpdateType;
use App\Form\ResetPasswordType;
use App\Entity\PasswordUpdate;
use Endroid\QrCode\QrCode;
use Symfony\Component\Form\FormError;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Scheb\TwoFactorBundle\Security\TwoFactor\Provider\Google\GoogleAuthenticatorInterface;


use Symfony\Component\Validator\Constraints as Assert;
use Twig\Token;

class UserController extends AbstractController
{

    /**
     * @Route("/inscription.html", name="user_register", methods={"GET|POST"})
     * @param Request $request
     * @param UserPasswordEncoderInterface $encoder
     * @param GoogleAuthenticatorInterface $authenticator
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function register(Request $request,
                             UserPasswordEncoderInterface $encoder, GoogleAuthenticatorInterface $authenticator): response
    {
        $user = new User();
        $user->setRoles(['ROLE_USER']);

        $form = $this->createFormBuilder($user)
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
            ->add('email', EmailType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Saisissez votre email'
                ]
            ])
            ->add('password', PasswordType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Saisissez votre mot de passe'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => "Je m'inscris !",
                'attr' => [
                    'class' => 'btn btn-block btn-dark'
                ]
            ])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $user->setPassword(
                $encoder->encodePassword($user, $user->getPassword())
            );

//            je rajoute le authenticator
            $secret = $authenticator->generateSecret();
            $user->setGoogleAuthenticatorSecret($secret);


            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('notice', 'Félicitation, vous pouvez vous connecter!');

            return $this->redirectToRoute('app_login');

        }

        return $this->render('user/register.html.twig', [
            'form' => $form->createView()
        ]);

    }

    /**
     * @Route("/connexion.html", name="app_login")
     * @param AuthenticationUtils $authenticationUtils
     * @return Response
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/deconnexion.html", name="app_logout")
     */
    public function logout()
    {
    }

    /**
     * @Route ("/profil", name="profil")
     * @param Request $request
     * @return Response
     */

    public function profil(Request $request)
    {
        $user = $this->getUser();

        $form = $this->createForm(ProfilType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($user);
            $manager->flush();
        }

        return $this->render('filesparametres/profil.html.twig', [
            'form' => $form->createView()
        ]);
    }


    /**
     * @Route ("/updatemdp", name="updatemdp")
     * @param Request $request
     * @param UserPasswordEncoderInterface $encoder
     * @return Response
     */

    public function updatemdp(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();

        $form = $this->createForm(ResetPasswordType::class)->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $data = $form->getData();

            $oldPassword = $data['oldPassword'];
            $newPassword = $data['plainPassword'];

            if ($passwordEncoder->isPasswordValid($user, $oldPassword)) {

                $newEncodedPassword = $passwordEncoder->encodePassword($user, $newPassword);

                $user->setPassword($newEncodedPassword);

                $em->flush();

                $this->addFlash('notice', 'Votre mot de passe à bien été changé !');

                return $this->redirectToRoute('home');

            } else {
                $form->addError(new FormError('Ancien mot de passe incorrect'));
            }
        }

        return $this->render('filesparametres/updatemdp.html.twig', array(
            'form' => $form->createView(),
        ));
    }


    /**
     * @Route("/2fa" , name="2fa_login")
     * @param GoogleAuthenticatorInterface $authenticator
     * @return
     */
    public function check2fa(GoogleAuthenticatorInterface $authenticator)
    {
        $code = $authenticator->getQRContent($user = $this->getUser());
        $qrCode = "https://chart.googleapis.com/chart?cht=qr&chs=150x150&chl=" . $code;
        return $this->render('security/2fa_login.html.twig', [
            'qrCode' => $qrCode
        ]);
    }
}