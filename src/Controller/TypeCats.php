<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

//use Symfony\Component\Routing\Attribute\Route;

class TypeCats extends AbstractController
{
    #[Route('/home', name: 'HomePage', methods: ['GET', 'POST'])]
    public function cat(): Response
    {
        return $this->render('pets/home.html.twig');
    }

    #[Route('/dogAndCats/{param}', name: 'CatDogPage', methods: ['GET', 'POST'])]
    public function dogAndCats($param): Response
    {
        return $this->render('pets/show.html.twig', [
            'cat' => 'Информация о домашних животных - '. $param

        ]);
    }
}
