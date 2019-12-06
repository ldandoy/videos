<?php

namespace App\Controller\admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
     * @Route("/admin")
     */
class SiteController extends AbstractController
{
    /**
     * @Route("/", name="admin_site")
     */
    public function index()
    {
        return $this->render('admin/site/index.html.twig', [
            
        ]);
    }
}
