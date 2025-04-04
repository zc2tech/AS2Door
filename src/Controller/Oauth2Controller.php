<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class Oauth2Controller extends AbstractController
{
    #[Route('/oauth2', name: 'app_oauth2')]
    public function index(): Response
    {
        return $this->render('oauth2/index.html.twig', [
            'controller_name' => 'Oauth2Controller',
        ]);
    }
}
