<?php

namespace App\Controller\admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Video;
use App\Form\VideoType;

/**
 * @Route("/admin/video")
*/
class VideoController extends AbstractController
{
    /**
     * @Route("/", name="admin_videos_list")
     */
    public function index(EntityManagerInterface $em)
    {
        $videos = $em->getRepository(Video::class)->findAll();

        return $this->render('admin/video/index.html.twig', [
            'videos' => $videos
        ]);
    }

    /**
     * @Route("/new", name="admin_videos_new")
     */
    public function new(Request $request, EntityManagerInterface $em)
    {
        $video = new Video();
        $form = $this->createForm(VideoType::class, $video);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $video = $form->getData();

            $em->persist($video);
            $em->flush();

            $this->addFlash(
                'success',
                'Votre video a été ajouté !'
            );

            return $this->redirectToRoute('admin_videos_list');
        }

        return $this->render('admin/video/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{slug}", name="admin_videos_show")
     */
    public function show(Video $video)
    {
        return $this->render('admin/video/show.html.twig', [
            'video'   => $video
        ]);
    }

    /**
     * @Route("/edit/{slug}", name="admin_videos_edit")
     */
    public function edit(Video $video, Request $request, EntityManagerInterface $em)
    {
        // creates a task object and initializes some data for this example
        $form = $this->createForm(VideoType::class, $video);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $cat = $form->getData();

            $em->persist($video);
            $em->flush();

            $this->addFlash(
                'success',
                'Vos changements ont été sauvegardés !'
            );

            return $this->redirectToRoute('admin_videos_list');
        }

        return $this->render('admin/video/edit.html.twig', [
            'form'  => $form->createView(),
            'video'   => $video
        ]);
    }

    /**
     * @Route("/delete/{slug}", name="admin_videos_delete")
     */
    public function delete(Video $video, EntityManagerInterface $em)
    {
        $em->remove($video);
        $em->flush();
        $this->addFlash(
            'success',
            'La video a été supprimé !'
        );
        return $this->redirectToRoute('admin_videos_list');
    }
}
