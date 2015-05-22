<?php

namespace IES2Mares\tutores\InformacionAlumnosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $params = array(
            'mensaje' => 'Bienvenido al IES Dos Mares',
            'fecha' => date('d-m-yy'),
        );
        return $this->render(
            'IES2MarestutoresInformacionAlumnosBundle:Default:index.html.twig',
            $params);
    }
}
