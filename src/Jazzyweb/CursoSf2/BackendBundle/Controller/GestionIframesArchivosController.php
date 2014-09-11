<?php

namespace Jazzyweb\CursoSf2\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GestionIframesArchivosController extends Controller
{
    public function gestionAction()
    {
        return $this->render('JwCursoSf2BackendBundle:IframesArchivos:gestion.html.twig');
    }

    public function listarAction()
    {
        return $this->render('JwCursoSf2BackendBundle:IframesArchivos:listar.html.twig');
    }

    public function aniadirAction()
    {
        return $this->render('JwCursoSf2BackendBundle:IframesArchivos:aniadir.html.twig');
    }

    public function verAction($iframe)
    {
        return $this->render('JwCursoSf2BackendBundle:IframesArchivos:ver.html.twig', array('iframe' => $iframe));
    }

    public function borrarAction($iframe)
    {
        return $this->render('JwCursoSf2BackendBundle:IframesArchivos:borrar.html.twig', array('iframe' => $iframe));
    }

    public function modificarAction($iframe)
    {
        return $this->render('JwCursoSf2BackendBundle:IframesArchivos:modificar.html.twig', array('iframe' => $iframe));
    }
}
