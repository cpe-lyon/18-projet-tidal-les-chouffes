<?php


use Router\Router;
use App\Exceptions\NotFoundException;

require '../vendor/autoload.php';

/* define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);
define('DB_NAME', 'acudb');
define('DB_HOST', 'localhost:50080/pgadmin4/');
define('DB_USER', 'tp@t.p');
define('DB_PWD', 'tptptp');

$router = new Router($_GET['url']);


/*  Router Accueil    */

// Consultation de toutes les pathologies par symptôme
$router->get('/', 'App\Controllers\ReportingController@index'); 

/*  Router Authentification et déconnexion User    */ 
$router->post('/login', 'App\Controllers\UserController@loginPost');
$router->get('/logout', 'App\Controllers\UserController@logout');

/*  Router Recherche et filtrage   */ 
$router->get('/recherche', 'App\Controllers\Controllers@recherche');
$router->get('/filtrage', 'App\Controllers\Controllers@filtrage');
$router->get('/motCle', 'App\Controllers\Controllers@motCle');


try {
    $router->run();
} catch (NotFoundException $e) {
    return $e->error404();
}

*/


?>