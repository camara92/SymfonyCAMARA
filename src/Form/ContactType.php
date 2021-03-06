<?php

namespace App\Form;

use App\Entity\Contact;
// use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Fullname', TextType::class, 
            [
                'label'=>'Nom et prénom',
               'constraints'=> new Length([
                   'min'=>2, 
                   'max'=>30
               ]),
                'attr'=>['placeholder'=>'Merci de saisir votre nom prénom']
                ]) 
            
            ->add('email', EmailType::class,
            [
                'label'=>'Votre adresse email ',
               'constraints'=> new Length([
                'min'=>2, 
                'max'=>90
            ]),
                'attr'=>['placeholder'=>'Votre email']
            ])
            ->add('message', TextareaType::class, 
            [
                'label'=>'Votre message',
                'attr'=>['placeholder'=>'Votre message']
            ]
            )
            ->add('Subject', TextareaType::class,
            [
                'label'=>'Sujet',
                'attr'=>['placeholder'=>'Sujet ']
            ])

            ->add('submit', SubmitType::class,
            [
                'label'=>"S'inscrire",
            ] )
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
