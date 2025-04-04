<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CertificateController extends AbstractController
{
    #[Route('/certificate', name: 'app_certificate')]
    public function index(): Response
    {
        return $this->render('certificate/index.html.twig', [
            'controller_name' => 'CertificateController',
        ]);
    }
}
