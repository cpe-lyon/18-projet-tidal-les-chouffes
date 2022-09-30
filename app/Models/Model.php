<?php

namespace App\Models;

use PDO;
use Database\DBConnexion;
    // use stdClass; // Pour définir une classe vide


abstract class Model {

    protected $bdd;
    protected $table;


    public function __construct(DBConnexion $bdd)
    {
        $this->bdd = $bdd;
    } 


    public function all(): array    // : array permet de préciser que la fonction renvoie un array
    {
        return $this->query("SELECT * FROM {$this->table} ");

    }
    
}


?>