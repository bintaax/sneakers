<?php

namespace App\Controller;

use App\Entity\Sneaker;
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
/*      $sneakers = new Sneaker();
        $sneakers->setBrand()->setColor()->setName()->setPhoto()->setSize(); */
        $sneakers = $sr->findAll();

        return $this->render('sneaker/index.html.twig', [
            'sneakers' => $sneakers,
        ]);
    }
}
