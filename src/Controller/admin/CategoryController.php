<?php

namespace App\Controller\admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Category;

/**
 * @Route("/admin")
*/
class CategoryController extends AbstractController
{
    /**
     * @Route("/categories", name="admin_categories")
     */
    public function index(EntityManagerInterface $em)
    {
        $categories = $em->getRepository(Category::class)->findAll();
        return $this->render('admin/category/index.html.twig', [
            "categories" => $categories
        ]);
    }
}
