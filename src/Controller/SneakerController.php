<?php

namespace App\Controller;

use App\Repository\SneakerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


final class SneakerController extends AbstractController
{
    #[Route('/sneaker', name: 'app_sneaker')]
    public function index(EntityManagerInterface $em, SneakerRepository $sr): Response
    {
        $sneakers = $sr->findAll();
        
        return $this->render('sneaker/index.html.twig', [
            'sneakers' => $sneakers,
        ]);
    }
}
