<?php

namespace Sulaz1x\GradeBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/ma_page")
     * @Template()
     */
    public function userAction($name)
    {
        return array('name' => $name);
    }

    /**
     * @Route("/admin")
     */
    public function indexAction()
    {
        $classes = $this->getDoctrine()
            ->getRepository('Sulaz1xGradeBookBundle:Cours')
            ->findAll();

        $content = $this->renderView(
            'Sulaz1xGradeBookBundle:Admin:index.html.twig',
            array('classes' => $classes)
        );

        return new Response($content);
        //return array('name' => $name);
    }
}
