<?php

namespace App\Models;

use App\Models\Model;

class Pathologie extends Model {

    protected $table = 'patho';

    public function patho(): array     // : array permet de préciser que la fonction renvoie un array
    {
        return $this->query(" SELECT idp, \"desc\" FROM {$this->table} ORDER BY 1 ASC " ); 
    }


    public function symptpatho(int $idp): array   
    {
        return $this->query(" SELECT p.idp, s.desc FROM {$this->table} p    
        JOIN symptpatho sp 
        ON p.idp = sp.idp 
        JOIN symptome s 
        ON sp.ids = s.ids WHERE p.idp = $idp ORDER BY 1 ASC " ); 
    }

    public function keywords(string $kc): array
    {
        return $this->query(" SELECT p.desc, k.name  
        FROM {$this->table} p  
        JOIN symptPatho pt ON p.idP = pt.idP
        JOIN symptome s ON pt.idS = s.idS
        JOIN keySympt ks ON s.idS = ks.idS
        JOIN keywords k ON ks.idK = k.idK
        WHERE k.name = '$kc'
        ORDER BY 1 ASC " );
    }


    
}







?>