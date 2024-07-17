<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LikeController extends AbstractController
{
    #[Route('/dogAndCats/like/{type}', name: 'LikePage', methods: ['GET', 'POST'])]
    public function like($type, LoggerInterface $logger): Response
    {
        if ($type == 'like') {
            $likes = rand(121, 200);
            $logger->info('me or no');
            //dd($type);
        } else {
            $likes = rand(0, 119);
            $logger->info('no');
        }
        //return new JsonResponse(['likes' => $likes]);
        return $this->json(['likes' => $likes]); //укороченный синтаксис строки выше
    }
}
