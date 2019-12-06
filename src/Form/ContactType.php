<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                'label'         => 'Adresse mail',
                'attr'          => ['placeholder' => 'Entrez votre email'],
                'label_attr'    => ['class' => 'text-white mt-3'],
            ])
            ->add('sujet', TextType::class, [
                'label'         => 'Sujet',
                'attr'          => ['placeholder' => 'Entrez votre sujet'],
                'label_attr'    => ['class' => 'text-white'],
            ])
            ->add('content', TextareaType::class, [
                'label'         => 'Message',
                'attr'          => ['placeholder' => 'Entrez votre message'],
                'label_attr'    => ['class' => 'text-white'],
            ])
            ->add('Envoyer', SubmitType::class, [
                'attr'          => ['class' => 'btn btn-overconsulting btn-block'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
