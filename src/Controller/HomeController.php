<?php

namespace App\Controller;

use App\Entity\Books;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $books = $this->getDoctrine()->getRepository(Books::class)->findAll();

        return $this->render('home/index.html.twig', [
            'books' => $books,
        ]);
    }
}
