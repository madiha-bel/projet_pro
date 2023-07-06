<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\QuestionsRepository;

class AjoutQuestionContrellerController extends AbstractController
{
    #[Route('/ajout/question/contreller', name: 'app_ajout_question_contreller',methods:['GET'])]
    public function index(QuestionsRepository $questionsRepository): Response
    {
        $questions = $questionsRepository->findAll();
        return $this->render('ajout_question_contreller/index.html.twig', [
            'questions' => $questions
        ]);
    }
}
