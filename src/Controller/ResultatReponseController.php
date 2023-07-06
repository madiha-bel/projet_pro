<?php

namespace App\Controller;

use App\Entity\ResultatReponse;
use App\Form\ResultatReponseType;
use App\Repository\ResultatReponseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/resultat/reponse')]
class ResultatReponseController extends AbstractController
{
    #[Route('/', name: 'app_resultat_reponse_index', methods: ['GET'])]
    public function index(ResultatReponseRepository $resultatReponseRepository): Response
    {
        return $this->render('resultat_reponse/index.html.twig', [
            'resultat_reponses' => $resultatReponseRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_resultat_reponse_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ResultatReponseRepository $resultatReponseRepository): Response
    {
        $resultatReponse = new ResultatReponse();
        $form = $this->createForm(ResultatReponseType::class, $resultatReponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $resultatReponseRepository->save($resultatReponse, true);

            return $this->redirectToRoute('app_resultat_reponse_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('resultat_reponse/new.html.twig', [
            'resultat_reponse' => $resultatReponse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_resultat_reponse_show', methods: ['GET'])]
    public function show(ResultatReponse $resultatReponse): Response
    {
        return $this->render('resultat_reponse/show.html.twig', [
            'resultat_reponse' => $resultatReponse,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_resultat_reponse_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ResultatReponse $resultatReponse, ResultatReponseRepository $resultatReponseRepository): Response
    {
        $form = $this->createForm(ResultatReponseType::class, $resultatReponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $resultatReponseRepository->save($resultatReponse, true);

            return $this->redirectToRoute('app_resultat_reponse_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('resultat_reponse/edit.html.twig', [
            'resultat_reponse' => $resultatReponse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_resultat_reponse_delete', methods: ['POST'])]
    public function delete(Request $request, ResultatReponse $resultatReponse, ResultatReponseRepository $resultatReponseRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$resultatReponse->getId(), $request->request->get('_token'))) {
            $resultatReponseRepository->remove($resultatReponse, true);
        }

        return $this->redirectToRoute('app_resultat_reponse_index', [], Response::HTTP_SEE_OTHER);
    }
}
