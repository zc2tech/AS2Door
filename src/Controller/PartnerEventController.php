<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PartnerEventController extends AbstractController
{
    #[Route('/partner-event', name: 'app_partner_event')]
    public function index(): Response
    {
        return $this->render('partner_event/index.html.twig', [
            'controller_name' => 'PartnerEventController',
        ]);
    }
}
