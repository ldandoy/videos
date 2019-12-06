<?php

namespace App\Controller\admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Category;
use App\Form\CategoryType;

/**
 * @Route("/admin/categories")
*/
class CategoryController extends AbstractController
{
    /**
     * @Route("/", name="admin_categories_list")
     */
    public function index(EntityManagerInterface $em)
    {
        $categories = $em->getRepository(Category::class)->findAll();
        return $this->render('admin/category/index.html.twig', [
            "categories" => $categories
        ]);
    }

    /**
     * @Route("/new", name="admin_categories_new")
     */
    public function new(Request $request,EntityManagerInterface $em)
    {
        // creates a task object and initializes some data for this example
        $cat = new Category();
        $form = $this->createForm(CategoryType::class, $cat);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $cat = $form->getData();

            $em->persist($cat);
            $em->flush();

            $this->addFlash(
                'success',
                'Votre catégorie a été ajouté !'
            );

            return $this->redirectToRoute('admin_categories_list');
        }

        return $this->render('admin/category/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{slug}", name="admin_categories_show")
     */
    public function show(Category $cat)
    {
        return $this->render('admin/category/show.html.twig', [
            'cat'   => $cat
        ]);
    }

    /**
     * @Route("/edit/{slug}", name="admin_categories_edit")
     */
    public function edit(Category $cat, Request $request, EntityManagerInterface $em)
    {
        // creates a task object and initializes some data for this example
        $form = $this->createForm(CategoryType::class, $cat);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $cat = $form->getData();

            $em->persist($cat);
            $em->flush();

            $this->addFlash(
                'success',
                'Vos changements ont été sauvegardés !'
            );

            return $this->redirectToRoute('admin_categories_list');
        }

        return $this->render('admin/category/edit.html.twig', [
            'form'  => $form->createView(),
            'cat'   => $cat
        ]);
    }

    /**
     * @Route("/delete/{slug}", name="admin_categories_delete")
     */
    public function delete(Category $cat, EntityManagerInterface $em)
    {
        $em->remove($cat);
        $em->flush();
        $this->addFlash(
            'success',
            'La catégorie a été supprimé !'
        );
        return $this->redirectToRoute('admin_categories_list');
    }
}
