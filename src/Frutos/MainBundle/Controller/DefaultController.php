<?php

namespace Frutos\MainBundle\Controller;

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
        $user= $this->getUser();
        if (isset($user))
        {
            return  array();
        }
        else
        {
            $users = $this->getDoctrine()->getManager()->getRepository("FrutosUserBundle:User")->findAll();
            if ($users) {
                return $this->redirectToRoute("fos_user_security_login", array("users" => $users));
            } else {
                $group = $this->getDoctrine()->getManager()->getRepository("FrutosUserBundle:Group")->findAll();
                if ($group) {
                     return $this->redirectToRoute("fos_user_registration_register");
                 } else {
                     return $this->redirectToRoute("fos_user_group_new");
                 }
           }
          }
    }
}
