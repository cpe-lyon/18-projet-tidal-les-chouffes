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


    /**
     * Connection à la base des données
    */
    protected function view(string $path, array $params = null)
    {
        /* ob_start — Démarre la temporisation de sortie. Tant qu'elle est enclenchée, aucune donnée,
             hormis les en-têtes, n'est envoyée au navigateur, mais temporairement mise en tampon.
        */ 
        ob_start();

        $path = str_replace('.', DIRECTORY_SEPARATOR, $path);

        require VIEWS . $path . '.php';

        if($params){
            // extract — Importe les variables dans la table des symboles
            $params = extract($params);
        }

        // ob_get_clean — Lit le contenu courant du tampon de sortie puis l'efface
        $content = ob_get_clean();
        require VIEWS . 'layout/main.php';
        
    }



    /**
     * Connection à la base des données
    */
    protected function getDB()
    {
        return $this->bdd;
    }  



    /**
     * Vérification connection User
    */
    protected function isConnect()
    {
        if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
            return true;
        } else {
            return header('Location: /');
        }
    }

}