<?php

namespace PI\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MembreController extends Controller
{
    public function AnnoncesAction()
    {
        return $this->render('PIPIBundle:PI:Annonces.html.twig');
    }
}
