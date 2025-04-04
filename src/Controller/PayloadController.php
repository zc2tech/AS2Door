<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PayloadController extends AbstractController
{
    #[Route('/payload', name: 'app_payload')]
    public function index(): Response
    {
        return $this->render('payload/index.html.twig', [
            'controller_name' => 'PayloadController',
        ]);
    }
}
