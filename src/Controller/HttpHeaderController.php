<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HttpHeaderController extends AbstractController
{
    #[Route('/http/header', name: 'app_http_header')]
    public function index(): Response
    {
        return $this->render('http_header/index.html.twig', [
            'controller_name' => 'HttpHeaderController',
        ]);
    }
}
