<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Video;

/**
 * @Route("/videos")
 */
class VideoController extends AbstractController
{
    /**
     * @Route("/", name="videos")
     */
    public function index()
    {
        $videos = $this->getDoctrine()->getRepository(Video::class)->findAll();

        return $this->render('video/index.html.twig', [
            'videos'    => $videos
        ]);
    }

    /**
     * @Route("/{slug}", name="videos_show")
     */
    public function show(Video $video)
    {
        return $this->render('video/show.html.twig', [
            'video'    => $video
        ]);
    }
}
