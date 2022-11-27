<?php

namespace App\Models;

use App\Models\Model;

class Pathologie extends Model {

    protected $table = 'patho';


    /**
     * Requêtes pour obtenir toutes les pathologies 
    */
    public function patho(): array     // : array permet de préciser que la fonction renvoie un array
    {
        return $this->query(" SELECT * FROM {$this->table} ORDER BY 1 ASC " ); 
    }


    /**
     * Requêtes pour obtenir les symptômes liés à une pathologie
    */
    public function symptpatho(int $idp): array   
    {
        return $this->query(" SELECT p.idp, s.desc, m.code, m.nom FROM {$this->table} p    
        JOIN symptpatho sp ON p.idp = sp.idp 
        JOIN symptome s ON sp.ids = s.ids 
        JOIN meridien m ON p.mer = m.code
        WHERE p.idp = $idp ORDER BY 1 ASC " ); 
    }


    /**
     * Requêtes pour obtenir les pathologies recherchées par mot clé 
    */
    public function keywords(string $kc): array
    {
        return $this->query(" SELECT p.desc, k.name  
        FROM {$this->table} p  
        JOIN symptPatho pt ON p.idP = pt.idP
        JOIN symptome s ON pt.idS = s.idS
        JOIN keySympt ks ON s.idS = ks.idS
        JOIN keywords k ON ks.idK = k.idK
        WHERE k.name LIKE '%$kc%'
        ORDER BY 1 ASC " );
    }


    
}







?>