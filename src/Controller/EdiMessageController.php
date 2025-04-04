<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class EdiMessageController extends AbstractController
{
    #[Route('/edi-message', name: 'app_edi_message')]
    public function index(): Response
    {
        return $this->render('edi_message/index.html.twig', [
            'controller_name' => 'EdiMessageController',
        ]);
    }
}
