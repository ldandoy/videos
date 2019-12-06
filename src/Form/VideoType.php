<?php

namespace App\Form;

use App\Entity\Video;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use App\Entity\Category;

class VideoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('short_description')
            ->add('content')
            ->add('picture_url')
            ->add('youtube_url')
            ->add('duration')
            ->add('category', EntityType::class, [
                'class'         => Category::class,
                'choice_label'  => 'title',
            ])
            ->add('Envoyer', SubmitType::class, [
                'attr'          => ['class' => 'btn btn-overconsulting btn-block'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Video::class,
        ]);
    }
}
