<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('isContact', ChoiceType::class, [
                'choices' => [
                    'Contact' => true,
                    'Demande de devis' => false
                ],
                "label" => "Type de demande",
            ])
            ->add('societyName', TextType::class, [
                "attr" => [
                    "placeholder" => "Société"
                ]
            ])
            ->add('firstName', TextType::class, [
                "attr" => [
                    "placeholder" => "Nom"
                ]
            ])
            ->add('lastName', TextType::class, [
                "attr" => [
                    "placeholder" => "Prenom"
                ]
            ])
            ->add('email', EmailType::class, [
                "attr" => [
                    "placeholder" => "E-Mail"
                ]
            ])
            ->add('phone', TelType::class, [
                "attr" => [
                    "placeholder" => "Téléphone"
                ]
            ])
            ->add('text', TextareaType::class, [
//                "label" => "Votre message",
                "attr" => [
                    "rows" => "6",
                    "placeholder" => "Votre message ..."
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Envoyer'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
