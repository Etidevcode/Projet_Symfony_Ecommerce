<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class RegisterUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname', textType::class, [
                'label' => 'votre prénom',
                'constraints' => [
                    new Length([
                        'min' => 2,
                        'max' => 30

                    ])
                ],
                'attr' => [
                    'placeholder' => 'Indiquer votre prenom'
                ]
            ])
            ->add('lastname', TextType::class, [
                'label' => 'votre nom',
                'constraints' => [
                    new Length([
                        'min' => 2,
                        'max' => 30

                    ])
                ],
                'attr' => [
                    'placeholder' => 'Indiquer votre nom'
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'votre adresse email',
                'attr' => [
                    'placeholder' => 'Indiquer votre adresse email'
                ]
            ])
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'constraints' => [
                    new Length([
                        'min' => 4,
                        'max'=> 30,
                    ])
                ],
                'label' => 'Votre mot de passe',
                'first_options' => [
                    'label' => 'mot de passe',
                    'attr' => [
                        'placeholder' => 'Choisissez votre mot de passe'
                    ],
                    'hash_property_path' => 'password'
                ],
                'second_options' => [
                    'label' => 'Confirmez votre mot de passe',
                    'attr' => [
                        'placeholder' => 'Merci de confirmer votre mot de passe'
                    ]
                ],
                'mapped' => false,
            ])

            ->add('submit', SubmitType::class, [
                'label' => "S'inscrire",
                'attr' => [
                    'class' => 'btn btn-success'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'constraints' => [
                new UniqueEntity([
                    'entityClass' => User::class,
                    'fields' => 'email'
                ])

            ],
            'data_class' => User::class,
        ]);
    }
}
