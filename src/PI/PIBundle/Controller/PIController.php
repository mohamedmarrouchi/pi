<?php

namespace PI\PIBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PIController extends Controller
{

    public function homeAction()
    {
        return $this->render('@PIPI/PI/home.html.twig');
    }
    public function AnnoncesAction()
    {
        return $this->render('PIPIBundle:PI:Annonces.html.twig');
    }
    public function contactAction()
    {
        return $this->render('@PIPI/PI/contact.twig');
    }
    public function checkAction(Request $request){
        if ($this->isGranted('ROLE_ADMIN')){
            return $this->redirectToRoute('contact');
        }else
            return $this->redirectToRoute('_profiler_home');


        return $this->render('@PIPI/PI/check.html.twig');
    }
}
