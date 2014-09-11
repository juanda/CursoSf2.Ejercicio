<?php

namespace Jazzyweb\CursoSf2\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JwCursoSf2BackendBundle:Default:index.html.twig', array('name' => $name));
    }
}
