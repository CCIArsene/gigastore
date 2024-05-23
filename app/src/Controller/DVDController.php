<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DVDController extends AbstractController
{
    #[Route('/dvd', name: 'dvd_page')]
    public function index(): Response
    {
        return $this->render('dvd/index.html.twig', [
            'controller_name' => 'DVDController',
        ]);
    }
}
