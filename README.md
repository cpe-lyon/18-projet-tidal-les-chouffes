# Sommaire
    - Introduction
    - Informations d'installation/exécution
    - Structure MVC
    - Membres du groupe
    - Mention de tous les éléments qui ont changé depuis la pré-évaluation en dernier séance
    - Résumé des difficultés rencontrés
    - Webographie des ressources utilisées

# Introduction

Le module TIDAL (Techniques de l’Internet Dynamique et Architecture Logicielle) est un module qui nous a permit d'utiliser et de montée en compétences sur les technologies et concepts du web appris lors des précédents cours à travers le développement d'une application de gestion de médécine chinoise nommé : Assopuncture 

### Technologies et concepts utilisés
    - PHP (pour le développement du backend)
    - HTML, CSS, Bootstrap Javascript et AJAX (pour le développement du frontend)
    - PostgreSQL (pour la base de données)
    - MVC (pour la structuration de l'application en logique Model View Controller)
    - Web Service (pour la mise en place de l'API)
    
Afin d'organiser notre projet, nous avons utiliser un Trello : https://trello.com/4Ey6pvvO/projet-webdynamique

# Informations d'installation/exécution
Il faut tout d'abord installer le serveur de base de données (PostgreSQL) et le serveur web sur une machine Debian.
Lorsque l'on pull depuis le Git, faire un Ctrl + Shift + P : SFTP Local Sync Local -> Remote

### Dans le serveur Web faire :
#### Pour activer EngineRewrite
      - sudo /usr/sbin/a2enmod rewrite
      - systemctl restart apache2

#### Mettre Allowoverride à all 
     - sudo nano /etc/apache2/apache2.conf
     - Dans Directory /var/www faire : AllowOverride All
     - sudo service apache2 restart
#### Voir les erreurs côté serveur (lancé la commande suivante)
    - sudo tail -F /var/log/apache2/error.log

# Structure MVC

#### Répertoire app (Contient le controleur + les Models + etc.)
    ### Répertoire Controllers (Deux classes controleurs + un fichier Load_data destiné à AJAX)
    ### Répertoire Models (Quatre classes liées aux Models)
    ### Répertoire NotFoundException (Une class pour la page d'erreur)
    ### Répertoire Validation (Une class pour la vérification des données entrées par l'utilisateur)
    
#### Répertoire bdd (Une class pour la connection à la base de données)

#### Répertoire public (On trouve le point d'entré à l'application : fichier index, et les répertoires css - images - js)

#### Répertoire routes (Deux classes pour gérer les routes de l'application)

#### Répertoire views (Répertoires pages de l'application)
    ### Répertoire auths (pages connection et inscription)
    ### Répertoire errors (page erreur)
    ### Répertoire layout (pages header, footer de la page rechercheParMotClé, et page main point d'entré )
    ### Répertoire pages (pages accueil et rechercheParMotClé)
    
#### N.B : Pour la page d'accueil le header et footer sont gérés par JavaScript

# Membres du groupe
    - Enzo LOUNI
    - Julien ODET
    - Guth MOELLE
    - Clovis STACHOWIAK

# Mention de tous les éléments qui ont changé depuis la pré-évaluation en dernier séance
Comme dit à l'oral, nous avons implémenté le filtrage par rapport aux méridiens.

# Résumé des difficultés rencontrés


# Webographie des ressources utilisées
    - Cours CPE Lyon et Université Catholique de Lyon (ESQESE)
    - https://www.php.net/manual/fr/
    - https://www.w3schools.com/
