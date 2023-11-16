<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ErrorController extends AbstractController
{
    #[Route('/error', name: 'app_error')]
    public function index(): Response
    {
        return $this->render('error/index.html.twig', [
            'page_error' => 'ERROR: [404]',
            'context' => 'Esta pagina no se encuentra disponible en estos momentos. Se ha encontrado fallas en la ruta. Revise su guia correcta o regrese al:',
        ]);
    }
}

#https://symfony.com/doc/current/controller/error_pages.html