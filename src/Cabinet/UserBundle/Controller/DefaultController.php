<?php

namespace Cabinet\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CabinetUserBundle:Default:index.html.twig');
    }
    public function adminAction(){
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CabinetUserBundle:Medecin')->findAll();

        return $this->render('CabinetUserBundle:Medecin:listMedecin.html.twig', array(
            'entities' => $entities,
        ));
    }
    public function medecinAction(){
        return $this->render('CabinetPatientBundle:Default:index.html.twig');
    }
}
