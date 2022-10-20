<?php

use Router\Router;
use App\Exceptions\NotFoundException;

require '../vendor/autoload.php';


$router = new Router($_GET['url']);

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);

// Config DBB
define('DB_NAME', 'acudb');
define('DB_HOST', 'localhost'); 
define('DB_PORT', 5432);
define('DB_USER', 'pgtp');
define('DB_PWD', 'tp');


// sudo tail -F /var/log/apache2/error.log

//  Router Accueil    

// Consultation de toutes les pathologies par symptôme
$router->get('/', 'App\Controllers\SiteController@index');




//  Router Authentification et déconnexion User    
$router->get('/loginGet', 'App\Controllers\SiteController@login'); 
$router->post('/loginPost', 'App\Controllers\SiteController@loginPost');
$router->get('/logout', 'App\Controllers\SiteController@logout');



//  Router Inscription User 
$router->get('/inscription', 'App\Controllers\SiteController@inscription');
$router->post('/inscriptionUser', 'App\Controllers\SiteController@inscriptionUser');


//  Router Recherche et filtrage    
$router->get('/recherche', 'App\Controllers\SiteController@recherche');
$router->get('/filtrage', 'App\Controllers\SiteController@filtrage');
$router->get('/recherchemotCle', 'App\Controllers\SiteController@recherchemotCle');



try {
    $router->run();
} catch (NotFoundException $e) {
    return $e->error404();
}   




?>