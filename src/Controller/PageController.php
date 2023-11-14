<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/page/{id}', name: 'app_page')]
    public function index(string $id): Response
    {
        if (ctype_digit($id)){
            $id = (int)$id;
            return $this->render('page/index.html.twig', [
                'page' => 'página: ' .$id,
            ]);
        }else {
            return $this->redirectToRoute('app_error');
        } 
    }
}