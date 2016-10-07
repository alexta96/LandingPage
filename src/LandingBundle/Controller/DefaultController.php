<?php

namespace LandingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LandingBundle:Default:index.html.twig');
    }

    public function productoAction($numero)
    {
        return $this->render('LandingBundle:Default:producto.html.twig',array('numero'=>$numero));
    }
}
