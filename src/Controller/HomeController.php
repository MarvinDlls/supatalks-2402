<?php

namespace App\Controller;

use App\Repository\EventRepository;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home', methods: ['Get'])]
    public function index(
        EventRepository $eventRepository,
    ): Response
    {
        $test = 'test';
        return $this->render('home/index.html.twig', [
            'title' => 'Supatalks',
            'events' => $eventRepository->findAll(),
        ]);
    }

    #[Route('/documentation', name: 'app_documentation', methods: ['GET'])]
    public function documentation(): Response
    {
        return $this->render('page/documentation.html.twig', [
            'controller_name' => 'documentation',
        ]);
    }

    #[Route('/changelog', name: 'app_changelog', methods: ['GET'])]
    public function changelog(): Response
    {
        return $this->render('page/changelog.html.twig', [
            'controller_name' => 'changelog',
        ]);
    }
}
