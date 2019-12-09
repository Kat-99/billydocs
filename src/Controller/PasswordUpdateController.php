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

    public function updatePassword()
    {
        $passwordUpdate = new PasswordUpdate();

        $user = $this->getUser();
        $form = $this->createForm(PasswordUpdateType::class, $passwordUpdate, [
            'action' => $this->generateUrl('handle_pwd_update')
        ]);

//        FIXME dans une autre page de traitement
//        if ($form->isSubmitted() && $form->isValid()) {
//            // verification old password
//            if (!password_verify($passwordUpdate->getOldPassword(), $user->getPassword())) {
//                $this->addFlash(
//                    'danger',
//                    "Il y a une erreur dans votre saisie"
//                );
//            } else {
//
//                $newPassword = $passwordUpdate->getNewPassword();
//                $password = $encoder->encodePassword($user, $newPassword);
//                $user->setPassword($password);
//
//                $manager = $this->getDoctrine()->getManager();
//                $manager->persist($user);
//                $manager->flush();
//
//                $this->addFlash(
//                    'success',
//                    "votre mot de passe a été modifié"
//                );
//            }
//        }

        return $this->render('les2formulaires/form2.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/password/update", name="handle_pwd_update", methods={"POST"})
     * @param Request $request
     */
    public function handlePasswordUpdate(Request $request)
    {
        dump($this->getUser());
        dd($request->request->get('password_update'));

        
    }

}