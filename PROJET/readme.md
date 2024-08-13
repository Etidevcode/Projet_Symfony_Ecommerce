

<center><img src="https://camo.githubusercontent.com/e61ceee5f9483ecb722f9a7d95d33ac56c8dd3b772a24a83d3308183cad5fcf6/68747470733a2f2f73796d666f6e792e636f6d2f6c6f676f732f73796d666f6e795f626c61636b5f30322e737667"></center>


<center>

<h4>
La documentation officielle de Symfony <br/>

[Version en ligne](https://symfony.com/doc/current/index.html) | [Composants](https://symfony.com/components) | [Captures d'écran](https://symfonycasts.com/)

</h4>
</center>


>>> Bonjour à tous, Pourquoi Symfony ? Il s'agit d'une demande mais en manque de compétence, il me fallait me documenter et bâtir un réel projet notamment comme celui-ci.
>>> Au Moment où nous avions souhaiter monter en compétence sur Symfony, il y a une grande transition côté version. Mais nous fonctionnons de façon un peu cyclique, c'est pourquoi nous avons souhaiter achever ou du moins amélioerer cette partie.

# Environnement De Developpement : PHP

+ **PHP** : version récente (version 8.2 au minimum)
+ **Commander** : terminal complet un peu plus simple (Windows/MAC)
+ **Composer** : Installation de Packages (exemple : symphony)
+ **MAMP & MAMP PRO** : livre un certain nombre de fonctionnalité (composants : Mysql, Apache, PHP ...)

# IDE(Editeur De Code Intelligent) PHP : aux choix


+ **PhpStorm** : payant (30 jours d'essai gratuit)
+ **VS Code** : gratuit

# Liens de téléchargement / Guide De Documentation De Symfony

+ [Documentation De Reférence](https://symfony.com/doc/current/setup.html#running-symfony-applications)

| Outils          | Liens de référence                                               |
|-----------------|------------------------------------------------------------------|
| PhpStorm        | https://www.jetbrains.com/phpstorm/download/download-thanks.html |
| MAMP & MAMP PRO | https://www.mamp.info/en/downloads/                              |
| Composer        | https://getcomposer.org/download/                                |
| Cmder           | https://cmder.app/                                               |
| Symfony CLI     | https://symfony.com/download                                     |





# Installion Symfony CLI En Détail: Windows Powershell

```
Set-ExecutionPolicy -ExecutionPolicy RemoteSigned -Scope CurrentUser
scoop install symfony-cli
symfony -V
symfony
symfony update symfony-cli
```

# Creation Projet 1 : mytestproject

```
symfony new mytestproject --webapp
```

# Structure de repertoire par défaut de Symfony


```
your_project/
├─ assets/
├─ bin/
│  └─ console
├─ config/
│  ├─ packages/
│  └─ services.yaml
├─ migrations/
├─ public/
│  ├─ build/
│  └─ index.php
├─ src/
│  ├─ Kernel.php
│  ├─ Command/
│  ├─ Controller/
│  ├─ DataFixtures/
│  ├─ Entity/
│  ├─ EventSubscriber/
│  ├─ Form/
│  ├─ Repository/
│  ├─ Security/
│  └─ Twig/
├─ templates/
├─ tests/
├─ translations/
├─ var/
│  ├─ cache/
│  └─ log/
└─ vendor/
```

# Détail Et Description Structure de repertoire par défaut de Symfony : ChatGPT

+ **L'architecture de Symfony suit le modèle de conception MVC (Modèle-Vue-Contrôleur) et est basée sur une structure de répertoires organisée et des composants modulaires. Voici une description détaillée des principaux composants de l'architecture Symfony :**

    + **Répertoire `app/`** :

        + `config/` : Contient des fichiers de configuration pour l'application, tels que la configuration de routage, de services et d'autres paramètres.
        + `resources/` : Contient des fichiers de configuration et des modèles.
        + `var/` : Stocke des fichiers temporaires, des journaux et le cache.

    <br/>
  
    + **Répertoire `src/`** : Il s'agit de l'emplacement du code source de l'application.

      + `Controller/` : Les contrôleurs gèrent les demandes des utilisateurs et orchestrent la logique de l'application.
      + `Entity/` : Contient les entités Doctrine représentant les tables de la base de données.
      + `Form/` : Classes de formulaire pour créer et traiter les formulaires HTML.
      + `Repository/` : Répertoire des dépôts personnalisés pour les requêtes de base de données.
      + `Service/` : Services personnalisés utilisés dans toute l'application.
      + `EventSubscriber/` : Classes qui s'abonnent aux événements à l'aide du système d'événements de Symfony.

    <br/>
  
    + **Répertoire `templates/` :**

        + Modèles `Twig` pour le rendu des vues.
    <br/>
      
    + **Répertoire `public/` :**

        + Fichiers accessibles publiquement, tels que les ressources (CSS, JavaScript, images).
        + Le fichier index.php est le point d'entrée pour toutes les requêtes.

    + **Répertoire `bin/` :**

        + Commandes console et scripts.
        + Le script console pour exécuter les commandes console Symfony.

    + **Répertoire `var/` :**

        + Fichiers temporaires, journaux et cache.
        + Le répertoire `cache/` stocke les fichiers mis en cache.
        + Le répertoire `logs/` contient les journaux de l'application.
        + Le répertoire `sessions/` stocke les fichiers de session.

    + **Répertoire `vendor/` :**

        + Dépendances installées via `Composer`.
      
    + **Répertoire `config/` :**

        + Fichiers de configuration pour différents environnements (dev, prod, test).
        + Le répertoire `packages/` contient des fichiers de configuration pour les bundles.

    + **Répertoire `bin/` :**

        + Scripts exécutables pour l'application, y compris le script console pour exécuter les commandes console Symfony.

    + **Répertoire `tests/` :**

        + Tests unitaires et fonctionnels pour l'application.

    + **Répertoire `translations/` :**

        + Fichiers de traduction pour l'internationalisation.
    
    + Fichiers `.env` et `.env.local` :

        + Fichiers de configuration d'environnement contenant des variables telles que les détails de la connexion à la base de données, les clés API, etc.

+ L'architecture de Symfony suit les principes de l'injection de dépendances et utilise un conteneur de services pour gérer les services et les dépendances. Le fichier `services.yaml` dans le répertoire `config/` définit les services et leurs configurations.

+ Cette structure offre une séparation claire des responsabilités et encourage la modularité, facilitant la maintenance et l'évolutivité des applications Symfony. La flexibilité de Symfony permet aux développeurs d'adapter l'architecture en fonction des besoins spécifiques de leurs projets.




# Lancement Symfony

+ **Log**

```
symphony server:start
symphony server:log
```

+ **Sans Log**

```
symphony server:start -d
```

# Page Par Defaut

![Alt Text](images/image1.jpeg)

# Creation Projet 2: laboubiquefrancaise

```
symphony new laboutiquefrancaise --webapp
```

# Les membres

+ Il y a un aspect lié à la sécurité, car il est question de stcoker les informations des utilisateurs à la base de données.
+ Les différentes de créations dans cette partie : 

    + **Phase 1 :** Création de l'entité User();
    + **Phase 2 :** Création d'un formulaire d'inscription
    + **Phase 3 :** Création d'un formulaire de connexion
    + **Phase 4 :** Création d'un espace privé (membre)


![membres](../images/image1.jpeg)
![membres](../images/image2.jpeg)
![membres](../images/image3.jpeg)
![membres](../images/image4.jpeg)
![membres](../images/image5.jpeg)
![membres](../images/image6.jpeg)
![membres](../images/image7.jpeg)

## Administration|EasyAdmin

![EasyAdmin](../images/easyadmin1.jpeg)
![EasyAdmin](../images/easyadmin2.jpeg)
![EasyAdmin](../images/easyadmin3.jpeg)
![EasyAdmin](../images/easyadmin4.jpeg)
![EasyAdmin](../images/easyadmin6.jpeg)
![EasyAdmin](../images/easyadmin5.jpeg)

## Panier

![Produits](../images/panier.jpeg)

## Commandes

![Commmande0](../images/commande0.jpeg)
![Commmande0](../images/commande1.jpeg)
![Commmande0](../images/commande2.jpeg)

## Paiement

![Paiement](../images/paiement1.jpeg)
![Paiement](../images/paiement2.jpeg)
![Paiement](../images/paiement3.jpeg)

## Emails

![emails](../images/email1.jpeg)
![emails](../images/email2.jpeg)


## Creation de l'entité User CLI

```
$ symfony console make:user

 The name of the security user class (e.g. User) [User]:
 >

 Do you want to store user data in the database (via Doctrine)? (yes/no) [yes]:
 > yes

 Enter a property name that will be the unique "display" name for the user (e.g. email, username, uuid) [email]:
 >

 Will this app need to hash/check user passwords? Choose No if passwords are not needed or will be checked/hashed by some other system (e.g. a single sign-on server).

 Does this app need to hash/check user passwords? (yes/no) [yes]:
 >

 created: src/Entity/User.php
 created: src/Repository/UserRepository.php
 updated: src/Entity/User.php
 updated: config/packages/security.yaml

           
  Success! 
           

 Next Steps:
   - Review your new App\Entity\User class.
   - Use make:entity to add more fields to your User entity and then run make:migration.
   - Create a way to authenticate! See https://symfony.com/doc/current/security.html
```


### **Creation De la base de données: laboutiquefrançaise**

```
symphony console doctrine:database:create

ou

php bin/console doctrine:database:create
```

### **Effectuer une mugration**

```
 $ symfony console make:migration 
 created: migrations/Version20240206120100.php

           
  Success! 
           

 Review the new migration then run it with symfony.exe console doctrine:migrations:migrate
 See https://symfony.com/doc/current/bundles/DoctrineMigrationsBundle/index.html


 $ symfony console doctrine:migration:migrate 

 WARNING! You are about to execute a migration in database "laboutiquefrancaise" that could result in schema changes and data loss. Are you sure you wish to continue? (yes/no) [yes]:
 > yes

[notice] Migrating up to DoctrineMigrations\Version20240206120100
[notice] finished in 389.7ms, used 24M memory, 1 migrations executed, 2 sql queries
                                                                                                                        
 [OK] Successfully migrated to version: DoctrineMigrations\Version20240206120100                                        
                                                                                   
```

### Modifications ou ajout de champs dans une classe puis migrations et applications de cette migration.

```
 $ symfony console make:entity

 Class name of the entity to create or update (e.g. FiercePopsicle):
 > User

 Your entity already exists! So let's add some new fields!

 New property name (press <return> to stop adding fields):
 > firstname

 Field type (enter ? to see all types) [string]:
 > string

 Field length [255]:
 >

 Can this field be null in the database (nullable) (yes/no) [no]:
 >   

 updated: src/Entity/User.php

 Add another property? Enter the property name (or press <return> to stop adding fields):
 > lastname

 Field type (enter ? to see all types) [string]:
 >

 Field length [255]:
 >

 Can this field be null in the database (nullable) (yes/no) [no]:
 >

 updated: src/Entity/User.php

 Add another property? Enter the property name (or press <return> to stop adding fields):
 >


           
  Success! 
           

 Next: When you're ready, create a migration with symfony.exe console make:migration

$ symfony console make:migration
 created: migrations/Version20240206125236.php

           
  Success! 
           

 Review the new migration then run it with symfony.exe console doctrine:migrations:migrate
 See https://symfony.com/doc/current/bundles/DoctrineMigrationsBundle/index.html

$ symfony console doctrine:migrations:migrate 

 WARNING! You are about to execute a migration in database "laboutiquefrancaise" that could result in schema changes and data loss. Are you sure you wish to continue? (yes/no) [yes]:
 >

[notice] Migrating up to DoctrineMigrations\Version20240206125236
[notice] finished in 153.8ms, used 24M memory, 1 migrations executed, 1 sql queries
                                                                                                    
 [OK] Successfully migrated to version: DoctrineMigrations\Version20240206125236                     
                                                                            
```

