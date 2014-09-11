<?php

namespace Jazzyweb\CursoSf2\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JwCursoSf2FrontendBundle:Default:index.html.twig', array('name' => $name));
    }
}
