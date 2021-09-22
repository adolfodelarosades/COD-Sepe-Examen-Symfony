<?php

namespace App\Controller;

use App\Repository\EstudianteRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function index(EstudianteRepository $estudianteRepository): Response
    {
        $estudiantes = $estudianteRepository->findAll();
        return $this->render('home/index.html.twig', [
            'estudiantes' => $estudiantes,
        ]);
    }
}
