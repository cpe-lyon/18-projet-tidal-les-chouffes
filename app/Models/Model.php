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



    
    public function createUser(string $login, string $hashpwd)
    {
        //Requête 1 - {$this->table} - INTO
        $stmt = $this->bdd->getPDO()->prepare("INSERT users (username, pwd) VALUES (?, ?)");
        return $stmt->execute([$login, $hashpwd]);
    }  




    public function query(string $sql, array $param = null, bool $single = null)
    {
        $method = is_null($param) ? 'query' : 'prepare';

        if (
            strpos($sql, 'DELETE') === 0
            || strpos($sql, 'UPDATE') === 0
            || strpos($sql, 'INSERT') === 0) {

            $stmt = $this->bdd->getPDO()->$method($sql);
            $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->bdd]);
            return $stmt->execute($param);
        }

        $fetch = is_null($single) ? 'fetchAll' : 'fetch';

        $stmt = $this->bdd->getPDO()->$method($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->bdd]);

        if ($method === 'query') {
            return $stmt->$fetch();
        } else {
            $stmt->execute($param);
            return $stmt->$fetch();
        }
    }



    
}


?>