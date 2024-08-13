<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')] // On ouvre une route accessible par un chemin suivi de son nom
    public function index(): Response
    {
        $firstname = "Etienne";
        $montableau = ['Etienne', 'Fabien', 'Camille', 'Aurelien'];
        return $this->render('home/index.html.twig', [
            'firstname' => $firstname,
            'montableau' => $montableau
        ]);
    }
}
