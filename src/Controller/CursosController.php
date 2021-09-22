<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CursosController extends AbstractController
{
    #[Route('/cursos', name: 'cursos')]
    public function index(): Response
    {
        return $this->render('cursos/index.html.twig', [
            'controller_name' => 'CursosController',
        ]);
    }
}
