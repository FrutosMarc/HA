<?php

namespace Frutos\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
       $entityManager = $this->getDoctrine()->getManager();
       $entities = $entityManager->getRepository("FrutosUserBundle:User")->findAll();
        return array('Users' => $entities);
    }
}
