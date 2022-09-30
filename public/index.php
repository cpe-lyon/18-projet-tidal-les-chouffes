<?php

use Router\Router;
use App\Exceptions\NotFoundException;

require '../vendor/autoload.php';


$router = new Router($_GET['url']);

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);

/*
define('DB_NAME', 'acudb');
define('DB_HOST', 'localhost'); // localhost:50080/pgadmin4/
define('DB_USER', 'pgtp');
define('DB_PWD', 'tp');
*/



//  Router Accueil    

// Consultation de toutes les pathologies par symptôme
$router->get('/', 'App\Controllers\SiteController@index');


/*

//  Router Authentification et déconnexion User    
$router->post('/login', 'App\Controllers\ListController@loginPost');
$router->get('/logout', 'App\Controllers\ListController@logout');

//  Router Inscription User 
$router->get('/posts/:id', 'App\Controllers\SiteController@inscription');


//  Router Recherche et filtrage    
$router->get('/recherche', 'App\Controllers\ListController@recherche');
$router->get('/filtrage', 'App\Controllers\ListController@filtrage');
$router->get('/motCle', 'App\Controllers\ListController@motCle');



*/


try {
    $router->run();
} catch (NotFoundException $e) {
    return $e->error404();
}   




?>