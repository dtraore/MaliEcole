<?php

namespace EcoleModuleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EcoleModuleBundle:Default:index.html.twig');
    }
}
