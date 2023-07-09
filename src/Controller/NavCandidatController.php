<?php

namespace App\Controller;

use App\Repository\QuestionsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NavCandidatController extends AbstractController
{
    #[Route('/nav/candidat', name: 'app_nav_candidat',methods:['GET'])]
    public function index(QuestionsRepository $questionsRepository): Response
    {
        $questions = $questionsRepository->findAll();
        return $this->render('nav_candidat/index.html.twig', [
            'questions' => $questions
        ]);
    }
}
