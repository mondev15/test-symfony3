<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class UserController extends Controller{
    /**
     * @Route("/home", name="home")
     */
    public function homeAction(Request $request)
    {
        return $this->render('default/home.html.twig', []);
    }


    /**
      * @Route("/user/{id}", name="user_show")
    */
    public function showAction($id)
    {
        $userRepository = $this->getDoctrine()
                                ->getRepository('AppBundle\Entity\User');
        $userData = $userRepository->findById($id);

      if (!$userData) {
          throw $this->createNotFoundException(
              'Il n\'existe pas d\'utilisateur ayant pour identifiant '.$id
          );
      }
   // the result is in $user and will be printed  in twig
   return $this->render('default/user.html.twig', array('result' => $userData));
   }
 }