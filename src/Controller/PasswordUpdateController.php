<?php


namespace App\Controller;


use App\Entity\PasswordUpdate;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;
use App\Form\PasswordUpdateType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class PasswordUpdateController extends AbstractController
{

    /**
//   * @Route ("/pass", name="modif")
     * @param Request $request
     * @param ObjectManager $manager
     * @param UserPasswordEncoderInterface $encoder
     * @return Response
     */

    public function updatePassword(Request $request, UserPasswordEncoderInterface $encoder, AbstractController $manager )
    {
        $passwordUpdate = new PasswordUpdate();

        $user = $this->getUser();

        $form = $this->createForm(PasswordUpdateType::class , $passwordUpdate );

        $form-> handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            // verification old password
            if(!password_verify($passwordUpdate -> getOldPassword() , $user->getPassword())){
                $this->addFlash(
                    'danger',
                    "Il y a une erreur dans votre saisie"
                );

            }else{  $newPassword = $passwordUpdate ->getNewPassword();
                    $password = $encoder-> encodePassword($user, $newPassword );

                    $user->setPassword($password);
                    $manager->persist($user);
                    $manager->flush();

                    $this->addFlash(
                        'success',
                        "votre mot de passe a été modifié"
                    );
        }}

        return $this->render('les2formulaires/form2.html.twig', [
            'form' => $form->createView()
        ]);
    }
}