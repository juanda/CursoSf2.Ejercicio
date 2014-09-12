<?php

namespace Jazzyweb\CursoSf2\BackendBundle\Controller;

use Jazzyweb\CursoSf2\BackendBundle\Entity\Iframe;
use Jazzyweb\CursoSf2\BackendBundle\Form\Type\IframeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\Request;

class GestionIframesArchivosController extends Controller
{
    public function gestionAction()
    {
        return $this->render('JwCursoSf2BackendBundle:IframesArchivos:gestion.html.twig');
    }

    public function menuListaIframesAction(){
        $iframes = $this->getListaIframes();
        return $this->render('JwCursoSf2BackendBundle:IframesArchivos:partials/lista_iframes.html.twig',
            array('iframes' => $iframes));
    }

    public function listarAction()
    {
        $iframes = $this->getListaIframes();

        return $this->render('JwCursoSf2BackendBundle:IframesArchivos:listar.html.twig',
            array('iframes' => $iframes));
    }

    public function aniadirAction(Request $request)
    {
        $iframe = new Iframe();
        $formIframe = $this->createForm(new IframeType(), $iframe);

        $formIframe->handleRequest($request);

        if($formIframe->isValid()){

            $iframe->setNombreArchivo($iframe->getNombre(). '.html');
            $this->upload($iframe);

            return $this->redirect($this->generateUrl('jw_curso_sf2_backend_ver_iframe', array('iframe' => $iframe->getNombreArchivo())));
        }

        return $this->render('JwCursoSf2BackendBundle:IframesArchivos:aniadir.html.twig',
            array('formIframe' => $formIframe->createView()));
    }

    public function verAction($iframe)
    {
        $iframeDir = $this->container->getParameter('iframe_dir');
        return $this->render('JwCursoSf2BackendBundle:IframesArchivos:ver.html.twig',
            array('iframe' => $iframeDir . DIRECTORY_SEPARATOR . $iframe));
    }

    public function borrarAction($iframe)
    {
        $iframeDir = $this->container->getParameter('iframe_dir');
        $file = $iframeDir . DIRECTORY_SEPARATOR . $iframe;
        $result =  unlink($file);

        return $this->render('JwCursoSf2BackendBundle:IframesArchivos:borrar.html.twig', array('iframe' => $iframe, 'result' => $result));
    }

    public function modificarAction(Request $request, $iframe)
    {
        $iframeObject = new Iframe();
        $iframeObject->setNombre($iframe);

        $formIframe = $this->createForm(new IframeType(), $iframeObject);

        $formIframe->handleRequest($request);

        if($formIframe->isValid()){

            $iframe->setNombreArchivo($iframeObject->getNombre(). '.html');
            $this->upload($iframeObject, false);

            return $this->redirect($this->generateUrl('jw_curso_sf2_backend_ver_iframe', array('iframe' => $iframeObject->getNombreArchivo())));
        }

        return $this->render('JwCursoSf2BackendBundle:IframesArchivos:modificar.html.twig', array('formIframe' => $formIframe->createView()));
    }

    protected function getListaIframes(){
        $iframeDir = $this->container->getParameter('iframe_dir');
        $finder = new Finder();
        $finder->files()->in($iframeDir);
        $finder->sortByName();

        $iframes = array();

        foreach($finder as $file){
            $iframes[] = $file->getRelativePathname();
        }

        return $iframes;
    }

    protected function upload(Iframe $iframe, $new = true){

        $uploadDir = $this->container->getParameter('iframe_dir');

        if(file_exists($uploadDir . DIRECTORY_SEPARATOR . $iframe->getNombreArchivo())){
            $iframe->setNombreArchivo($iframe->getNombre() . uniqid(). '.html');
        }

        $iframe->getFile()->move(
            $uploadDir,
            $iframe->getNombreArchivo()
        );
    }

}
