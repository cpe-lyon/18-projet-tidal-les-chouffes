<?php

use Router\Router;
use App\Exceptions\NotFoundException;

require '../vendor/autoload.php';


    $router = new Router($_GET['url']);

    define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
    define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);

// Config BDD
    define('DB_NAME', 'acudb');
    define('DB_HOST', 'localhost'); 
    define('DB_PORT', 5432);
    define('DB_USER', 'pgtp');
    define('DB_PWD', 'tp');


//  Routes   

    // Accueil, consultation de toutes les pathologies par symptôme
    $router->get('/', 'App\Controllers\SiteController@index');



    //  Authentification et déconnexion User    
    $router->get('/pageLogin', 'App\Controllers\SiteController@login'); 
    $router->post('/connexion', 'App\Controllers\SiteController@connexion');
    $router->get('/logout', 'App\Controllers\SiteController@logout');



    //  Inscription User 
    $router->get('/pageInscription', 'App\Controllers\SiteController@pageInscription');
    $router->post('/createUser', 'App\Controllers\SiteController@createUser');


    //  Recherche par mot cle    
    $router->get('/pageRecherchemotCle', 'App\Controllers\SiteController@pageRecherchemotCle');
    $router->get('/recherchemotCle', 'App\Controllers\SiteController@recherchemotCle_trait');





try {
    $router->run();
} catch (NotFoundException $e) {
    return $e->error404();
}   




?>