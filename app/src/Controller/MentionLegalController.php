<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MentionLegalController extends AbstractController
{
    #[Route('/mentionlegal', name: 'mentions_legales_page')]
    public function index(): Response
    {
        return $this->render('mention_legal/index.html.twig', [
            'controller_name' => 'MentionLegalController',
        ]);
    }
}
