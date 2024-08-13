<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RegisterUserTest extends WebTestCase
{
    public function testSomething(): void
    {
        /*
         *  1. Créer un faux client (navigateur) de pointer vers une URL
         *  2. Remplir les champs de mon formulaire d'inscription
         *  3. Est-ce que tu peux regarder si dans ma page j'ai le message (alerte): Votre compte est correctement crée, veuillez vous connecter
         */

        // 1.
        $client = static::createClient();
        $client -> request('GET', '/inscription');

        // 2. (firstname, lastname, email, confirmation du password)
        $client ->submitForm("S'inscrire", [
            'register_user[email]' => 'julie@example.fr',
            'register_user[plainPassword][first]' => '123456',
            'register_user[plainPassword][second]' => '123456',
            'register_user[firstname]' => 'julie',
            'register_user[lastname]' => 'Doe'

        ]);

        // Suivi des redirections
        $this->assertResponseRedirects('/connexion');
        $client ->followRedirect();

        // 3.
        $this->assertSelectorExists('div:contains("Votre compte est correctement crée, veuillez vous connecter.")');

    }
}
