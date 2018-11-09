<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/testingBundle", name="new_bundle")
     */
    public function indexAction()
    {
        dump("ahoj");
        return $this->render('AdminAdminBundle:Default:index.html.twig');
    }
}
