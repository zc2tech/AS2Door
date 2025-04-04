<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CemController extends AbstractController
{
    #[Route('/cem', name: 'app_cem')]
    public function index(): Response
    {
        return $this->render('cem/index.html.twig', [
            'controller_name' => 'CemController',
        ]);
    }
}
