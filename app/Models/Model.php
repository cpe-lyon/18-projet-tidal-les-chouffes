<?php

namespace App\Models;

use PDO;
use Database\DBConnexion;


abstract class Model {

    protected $bdd;
    protected $table;


    public function __construct(DBConnexion $bdd)
    {
        $this->bdd = $bdd;
    }  

    

    /**
     * Méthode query hors PDO (prendre en compte les méthodes query ou prepare de PDO) 
    */
    public function query(string $sql, array $param = null, bool $single = null)
    {
        // Si param == null alors method = query — Sinon method = prepare
        $method = is_null($param) ? 'query' : 'prepare';

        if (
            strpos($sql, 'DELETE') === 0
            || strpos($sql, 'UPDATE') === 0
            || strpos($sql, 'INSERT') === 0) {

            $stmt = $this->bdd->getPDO()->$method($sql);
            $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->bdd]);
            return $stmt->execute($param);
        }

        // Si single == null alors fetch = fetchAll — Sinon fetch = fetch
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