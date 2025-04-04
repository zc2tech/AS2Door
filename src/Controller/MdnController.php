<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MdnController extends AbstractController
{
    #[Route('/mdn', name: 'app_mdn')]
    public function index(): Response
    {
        return $this->render('mdn/index.html.twig', [
            'controller_name' => 'MdnController',
        ]);
    }
}
