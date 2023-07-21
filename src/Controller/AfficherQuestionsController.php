<?php

namespace App\Controller;

use App\Repository\QuestionsRepository;
use App\Repository\SeriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AfficherQuestionsController extends AbstractController
{
    #[Route('/afficher/questions', name: 'app_afficher_questions',methods:['GET'])]
    public function index(QuestionsRepository $questionsRepository ,SeriesRepository $seriesRepository): Response
    {
        $questions = $questionsRepository->findAll();
        $series=$seriesRepository->findAll();
        return $this->render('afficher_questions/index.html.twig', [
            'questions' => $questions,
            'series' =>$series
        ]);
    }
}
