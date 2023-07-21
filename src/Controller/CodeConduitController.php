<?php

namespace App\Controller;

use App\Repository\SeriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CodeConduitController extends AbstractController
{
    #[Route('/code/conduit', name: 'app_code_conduit',methods:['GET'])]
    public function index(SeriesRepository $seriesRepository ) :Response
    {
        $series = $seriesRepository->findAll();
        return $this->render('code_conduit/index.html.twig', [
            'controller_name' => 'CodeConduitController',
            'series' => $series
        ]);
    }
}
