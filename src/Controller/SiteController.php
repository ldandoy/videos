<?php
// src/Controller/SiteController.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

use App\Form\ContactType;

/**
 * @Route("/")
 */
class SiteController extends AbstractController
{
    /**
     * @Route("/", name="web_root")
     */
    public function index()
    {
        return $this->render('site/index.html.twig', []);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request, MailerInterface $mailer)
    {
        $form = $this->createForm(ContactType::class);

        if ($request->isMethod('POST')) {
            $form->submit($request->request->get($form->getName()));
    
            if ($form->isSubmitted() && $form->isValid()) {
                $data = $form->getData();

                // Create the mail
                $email = (new Email())
                    ->from($data['email'])
                    ->to('ldandoy@overconsulting.net')
                    ->subject($data['sujet'])
                    ->text($data['content']);
                // Send the mail
                // $mailer->send($email);
                
                // Show Flash text
                $this->addFlash(
                    'success',
                    'Le mail a été envoyé !'
                );
            } else {
                $this->addFlash(
                    'danger',
                    'Le mail n\'a pas été envoyé !'
                );
            }
        }

        return $this->render('site/contact.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}