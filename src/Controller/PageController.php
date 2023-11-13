<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/page/{id}', name: 'app_page')]
    public function index(int $id): Response
    {
        if (is_int($id)){
            return $this->render('page/index.html.twig', [
                'page' => 'pagina es: ' .$id,
            ]);
        }else {
            return $this->redirectToRoute('app_error');
        } 
    }
}