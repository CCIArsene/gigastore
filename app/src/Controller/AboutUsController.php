<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AboutUsController extends AbstractController
{
    #[Route('/aboutus', name: 'about_us_page')]
    public function index(): Response
    {
        return $this->render('about_us/index.html.twig', [
            'controller_name' => 'AboutUsController',
        ]);
    }
}
