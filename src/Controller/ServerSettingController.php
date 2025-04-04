<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ServerSettingController extends AbstractController
{
    #[Route('/server/setting', name: 'app_server_setting')]
    public function index(): Response
    {
        return $this->render('server_setting/index.html.twig', [
            'controller_name' => 'ServerSettingController',
        ]);
    }
}
