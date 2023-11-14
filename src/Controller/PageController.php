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

    #[Route('/page/10', name: 'app_photo1')]
    public function photo1(): Response
    {
            return $this->render('page/index.html.twig', [
            ]);
    }

    #[Route('/page/20', name: 'app_photo2')]
    public function photo2(): Response
    {
            return $this->render('page/index.html.twig', [
            ]);
    }

    #[Route('/page/30', name: 'app_photo3')]
    public function photo3(): Response
    {
            return $this->render('page/index.html.twig', [
            ]);
    }
}