<?php

namespace SA\PetAlertBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SAPetAlertBundle:Default:index.html.twig');
    }
}
