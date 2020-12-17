<?php

namespace App\Controller;

use App\Entity\Blogreply;
use App\Form\BlogreplyType;
use App\Repository\BlogreplyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/blogreply")
 */
class BlogreplyController extends AbstractController
{
    /**
     * @Route("/", name="blogreply_index", methods={"GET"})
     */
    public function index(BlogreplyRepository $blogreplyRepository): Response
    {
        return $this->render('blogreply/index.html.twig', [
            'blogreplies' => $blogreplyRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="blogreply_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $blogreply = new Blogreply();
        $form = $this->createForm(BlogreplyType::class, $blogreply);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($blogreply);
            $entityManager->flush();

            return $this->redirectToRoute('blogreply_index');
        }

        return $this->render('blogreply/new.html.twig', [
            'blogreply' => $blogreply,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="blogreply_show", methods={"GET"})
     */
    public function show(Blogreply $blogreply): Response
    {
        return $this->render('blogreply/show.html.twig', [
            'blogreply' => $blogreply,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="blogreply_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Blogreply $blogreply): Response
    {
        $form = $this->createForm(BlogreplyType::class, $blogreply);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('blogreply_index');
        }

        return $this->render('blogreply/edit.html.twig', [
            'blogreply' => $blogreply,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="blogreply_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Blogreply $blogreply): Response
    {
        if ($this->isCsrfTokenValid('delete'.$blogreply->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($blogreply);
            $entityManager->flush();
        }

        return $this->redirectToRoute('blogreply_index');
    }
}
