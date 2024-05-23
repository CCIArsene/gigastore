<?php

namespace App\Controller;

use App\Repository\BoutiqueEntityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ShopController extends AbstractController
{
    #[Route('/shop', name: 'shop_page')]
    public function index(BoutiqueEntityRepository $boutiqueEntity): Response
    {
        $boutiques = $boutiqueEntity->findAll();

        return $this->render('shop/index.html.twig', [
            'controller_name' => 'ShopController',
            'boutiques' => $boutiques
        ]);
    }
}
