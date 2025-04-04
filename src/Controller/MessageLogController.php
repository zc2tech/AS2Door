<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MessageLogController extends AbstractController
{
    #[Route('/message/log', name: 'app_message_log')]
    public function index(): Response
    {
        return $this->render('message_log/index.html.twig', [
            'controller_name' => 'MessageLogController',
        ]);
    }
}
