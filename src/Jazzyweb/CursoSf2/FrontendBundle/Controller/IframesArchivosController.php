<?php

namespace Jazzyweb\CursoSf2\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IframesArchivosController extends Controller
{
    public function showIframeAction($iframe)
    {
        return $this->render('JwCursoSf2FrontendBundle::showIframe.html.twig', array('iframe' => $iframe));
    }

    public function showIframesAction($iframe_string)
    {
        return $this->render('JwCursoSf2FrontendBundle::showIframes.html.twig', array('iframe_string' => $iframe_string));
    }

    public function showAllIframeAction()
    {
        return $this->render('JwCursoSf2FrontendBundle::showAllIframe.html.twig');
    }
}
