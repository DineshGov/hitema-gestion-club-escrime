<?php

namespace App\Form;

use App\Entity\Competition;
use App\Entity\Niveau;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CompetitionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomCompetition')
            ->add('dateCompetition')
            ->add('villeCompetition')
            ->add('niveaux', EntityType::class, array(
                'label' => 'Niveaux',
                'class' => Niveau::class,
                'multiple' => false,
                'expanded' => false,
                'attr'=>[
                    'class'=>'text-center',
                ],
                'choice_label' => function (Niveau $niveau) {
                    return $niveau->getNiveau();
                }

            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Competition::class,
        ]);
    }
}
