<?php

namespace Cabinet\PatientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CabinetPatientBundle:Default:index.html.twig');
    }
}
