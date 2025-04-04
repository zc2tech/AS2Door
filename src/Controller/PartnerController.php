<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\PartnerRepository;
use App\Entity\Partner;

final class PartnerController extends AbstractController
{
    #[Route('/partner', name: 'app_partner')]
    public function index(PartnerRepository $repository): Response
    {
        $partners = $repository->findAll();
        // dd($partners);
        return $this->render('partner/index.html.twig', [
            'partners' => $partners,
        ]);
    }

    #[Route('/partner/{id<\d+>}', name: 'partner_show')]
    public function show(Partner $partner): Response
    {
        // dd($partners);
        return $this->render('partner/show.html.twig', [
            'partner' => $partner,
        ]);
    }

    #[Route('/partner/new', name: 'partner_new')]
    public function new(Partner $partner): Response
    {
        // dd($partners);
        return $this->render('partner/new.html.twig',);
    }
}
