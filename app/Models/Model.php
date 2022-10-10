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

    protected function test()
    {
        return $this->bdd;
    }


    /* 
    
    $sql_patho =  'SELECT idp, "desc" FROM patho ORDER BY 1 ASC';

$result_patho = $connexion->query($sql_patho);

foreach($result_patho as $res){     // res des pathologies
    $val = $res['idp'];
    $sql_patho_sympt = "SELECT s.desc FROM patho p JOIN symptpatho sp ON p.idp = sp.idp JOIN symptome s ON sp.ids = s.ids WHERE p.idp = $val ORDER BY 1 ASC";
    $result_patho_sympt = $connexion->query($sql_patho_sympt);
    // result_patho_sympt symptome de chaque pathologie
?> 

*/



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