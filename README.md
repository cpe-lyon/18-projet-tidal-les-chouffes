# Sommaire
    - Introduction
    - Informations d'installation/exécution
    - Membres du groupe
    - Mention de tous les éléments qui ont changé depuis la pré-évaluation en dernier séance
    - Résumé des difficultés rencontrés
    - Webographie des ressources utilisées

# Introduction

Le module TIDAL (Techniques de l’Internet Dynamique et Architecture Logicielle) est un module qui nous a permit d'utiliser et de montée en compétences sur les technologies et concepts du web appris lors des précédents cours à travers le développement d'une application de gestion de médécine chinoise nommé : Assopuncture 

### Technologies et concepts utilisés
    - PHP (pour le développement du backend)
    - HTML, CSS, Bootstrap et Javascript (pour le développement du frontend)
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

# Membres du groupe
    - Enzo LOUNI
    - Julien ODET
    - Guth MOELLE
    - Clovis STACHOWIAK

# Mention de tous les éléments qui ont changé depuis la pré-évaluation en dernier séance


# Résumé des difficultés rencontrés


# Webographie des ressources utilisées
https://www.php.net/manual/fr/
https://www.w3schools.com/
