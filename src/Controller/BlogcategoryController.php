<?php

namespace App\Controller;

use App\Entity\Blogcategory;
use App\Form\BlogcategoryType;
use App\Repository\BlogcategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/blogcategory")
 */
class BlogcategoryController extends AbstractController
{
    /**
     * @Route("/", name="blogcategory_index", methods={"GET"})
     */
    public function index(BlogcategoryRepository $blogcategoryRepository): Response
    {
        return $this->render('blogcategory/index.html.twig', [
            'blogcategories' => $blogcategoryRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="blogcategory_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $blogcategory = new Blogcategory();
        $form = $this->createForm(BlogcategoryType::class, $blogcategory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($blogcategory);
            $entityManager->flush();

            return $this->redirectToRoute('blogcategory_index');
        }

        return $this->render('blogcategory/new.html.twig', [
            'blogcategory' => $blogcategory,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="blogcategory_show", methods={"GET"})
     */
    public function show(Blogcategory $blogcategory): Response
    {
        return $this->render('blogcategory/show.html.twig', [
            'blogcategory' => $blogcategory,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="blogcategory_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Blogcategory $blogcategory): Response
    {
        $form = $this->createForm(BlogcategoryType::class, $blogcategory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('blogcategory_index');
        }

        return $this->render('blogcategory/edit.html.twig', [
            'blogcategory' => $blogcategory,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="blogcategory_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Blogcategory $blogcategory): Response
    {
        if ($this->isCsrfTokenValid('delete'.$blogcategory->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($blogcategory);
            $entityManager->flush();
        }

        return $this->redirectToRoute('blogcategory_index');
    }
}
