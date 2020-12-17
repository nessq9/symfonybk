<?php

namespace App\Controller;

use App\Entity\Catfood;
use App\Form\CatfoodType;
use App\Repository\CatfoodRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/catfood")
 */
class CatfoodController extends AbstractController
{
    /**
     * @Route("/", name="catfood_index", methods={"GET"})
     */
    public function index(CatfoodRepository $catfoodRepository): Response
    {
        return $this->render('catfood/index.html.twig', [
            'catfoods' => $catfoodRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="catfood_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $catfood = new Catfood();
        $form = $this->createForm(CatfoodType::class, $catfood);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($catfood);
            $entityManager->flush();

            return $this->redirectToRoute('catfood_index');
        }

        return $this->render('catfood/new.html.twig', [
            'catfood' => $catfood,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="catfood_show", methods={"GET"})
     */
    public function show(Catfood $catfood): Response
    {
        return $this->render('catfood/show.html.twig', [
            'catfood' => $catfood,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="catfood_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Catfood $catfood): Response
    {
        $form = $this->createForm(CatfoodType::class, $catfood);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('catfood_index');
        }

        return $this->render('catfood/edit.html.twig', [
            'catfood' => $catfood,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="catfood_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Catfood $catfood): Response
    {
        if ($this->isCsrfTokenValid('delete'.$catfood->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($catfood);
            $entityManager->flush();
        }

        return $this->redirectToRoute('catfood_index');
    }
}
