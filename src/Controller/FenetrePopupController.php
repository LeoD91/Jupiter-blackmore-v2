<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
// use Symfony\Component\Routing\Annotation\Route;

class FenetrePopupController extends AbstractController
{
    /**
     * @Route("/fenetre/popup", name="app_fenetre_popup")
     */
    public function fenetrePopup(): Response
    {
        return $this->render('fenetre_popup/index.html.twig');
    }
}

