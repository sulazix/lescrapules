<?php

namespace Sulaz1x\SecurityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
     public function loginAction(Request $request){
         // Si le visiteur est déjà identifié, on le redirige vers l'accueil
         if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
             return $this->redirectToRoute('lescrapuleshome');
         }

        // Le service authentication_utils permet de récupérer le nom d'utilisateur
        // et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
        // (mauvais mot de passe par exemple)
        $authenticationUtils = $this->get('security.authentication_utils');

        return $this->render('Sulaz1xSecurityBundle:security:login.html.twig', array(
            'last_username' => $authenticationUtils->getLastUsername(),
            'error'         => $authenticationUtils->getLastAuthenticationError(),
        ));
    }

    /**
     * @Route("/login_check", name="login_check")
     */
    public function loginCheckAction()
    {
        // this controller will not be executed,
        // as the route is handled by the Security system
    }

    /**
     * @Route("/accueil", name="lescrapuleshome")
     */
    public function homeAction()
    {
        // Homepage
        return $this->render('Sulaz1xSecurityBundle:security:home.html.twig', array());
    }


    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {
        // this controller will not be executed,
        // as the route is handled by the Security system
    }
}
