<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PartnerSystemController extends AbstractController
{
    #[Route('/partner-system', name: 'app_partner_system')]
    public function index(): Response
    {
        return $this->render('partner_system/index.html.twig', [
            'controller_name' => 'PartnerSystemController',
        ]);
    }
}
