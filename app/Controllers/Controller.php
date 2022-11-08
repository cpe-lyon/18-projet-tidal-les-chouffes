<?php

namespace App\Controllers;

use Database\DBConnexion;

abstract class Controller {

    protected $bdd;

    public function __construct(DBConnexion $bdd)
    {
        if (session_status() === PHP_SESSION_NONE) {
           session_start();
        }

        $this->bdd = $bdd;
    } 

    protected function view(string $path, array $params = null)
    {
        ob_start();
        $path = str_replace('.', DIRECTORY_SEPARATOR, $path);

        require VIEWS . $path . '.php';
        if($params){
            $params = extract($params);
        }
        $content = ob_get_clean();
        require VIEWS . 'layout/main.php';
        
    }

    protected function getDB()
    {
        return $this->bdd;
    }  


    
    protected function isConnect()
    {
        if (isset($_SESSION['auth']) && $_SESSION['auth'] === True) {
            return true;
        } else {
            return header('Location: /');
        }
    }


       
}