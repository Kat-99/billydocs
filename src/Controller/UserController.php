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
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Scheb\TwoFactorBundle\Security\TwoFactor\Provider\Google\GoogleAuthenticatorInterface;


use Symfony\Component\Validator\Constraints as Assert;

class UserController extends AbstractController
{

    /**
     * @Route("/inscription.html", name="user_register", methods={"GET|POST"})
     * @param Request $request
     * @param UserPasswordEncoderInterface $encoder
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function register(Request $request,
                             UserPasswordEncoderInterface $encoder)
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

        if($form->isSubmitted()&& $form->isValid()){

            $user->setPassword(
                $encoder->encodePassword($user, $user->getPassword())
            );

            $em = $this->getDoctrine()->getManager();
            $em-> persist($user);
            $em->flush();

            $this->addFlash('notice','Félicitation, vous pouvez vous connecter!');

            return $this->redirectToRoute('app_login');

        }

        return $this->render('user/register.html.twig',[
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
        throw new \Exception('This method can be blank - it will be intercepted by the logout key on your firewall');
        return $this->redirectToRoute('/inscription.html');
    }

    /**
     * @Route ("/profil", name="profil")
     * @param Request $request
     * @return Response
     */

    public function profil( Request $request)
    {
        $user = $this->getUser();

        $form = $this->createForm(ProfilType::class, $user);
        $form-> handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($user);
            $manager->flush();
        }

        return $this->render('filesparametres/profil.html.twig',[
            'form'=>$form->createView()
        ]);
    }


    /**
     * @Route ("/updatemdp", name="updatemdp")
     * @param Request $request
     * @param UserPasswordEncoderInterface $encoder
     * @return Response
     */

    public function updatemdp(Request $request , UserPasswordEncoderInterface $encoder)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $form = $this->createForm(ResetPasswordType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $passwordEncoder = $this->get('security.password_encoder');
//            dump($request->request); die();
            $oldPassword = $request->request->get('')['oldPassword'];

            // Si l'ancien mot de passe est bon
            if ($passwordEncoder->isPasswordValid($user, $oldPassword)) {
                $newEncodedPassword = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
                $user->setPassword($newEncodedPassword);

                $em->persist($user);
                $em->flush();

                $this->addFlash('notice', 'Votre mot de passe à bien été changé !');

                return $this->redirectToRoute('/');
            } else {
                $form->addError(new FormError('Ancien mot de passe incorrect'));
            }
        }

        return $this->render('filesparametres/updatemdp.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route ("/verif", name="verif")
     * @return Response
     */
    public function generateSecret(GoogleAuthenticatorInterface $googleAuthenticatorService)
    {
        $secret = $googleAuthenticatorService->generateSecret();
//        $qrCodeContent = $container->get("scheb_two_factor.security.google_authenticator")->getQRContent($user);
//        $qrCode = $qrCodeFactory->create('QR Code', ['size' => 200]);

        $qrCode = new QrCode('Life is too short to be generating QR codes');

        header('Content-Type: '.$qrCode->getContentType());
        echo $qrCode->writeString(__DIR__.'/a.jpg');

        return $this->render('security/2fa_form.html.twig');

    }








}