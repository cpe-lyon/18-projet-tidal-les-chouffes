<?php

namespace App\Models;

use App\Models\Model;

class Pathologie extends Model {

    protected $table = 'patho';

    public function patho(): array     // : array permet de préciser que la fonction renvoie un array
    {


        
        // $user = $_SESSION['user'];   type,
        
        
        return $this->query(" SELECT idp, \"desc\" FROM {$this->table} ORDER BY 1 ASC " ); // t_carteuser U where (U.idcarteuser = '.$user.')
        
    }


    public function symptpatho(int $idp): array   
    {

        return $this->query(" SELECT p.type, s.desc FROM patho p 
        JOIN symptpatho sp 
        ON p.idp = sp.idp 
        JOIN symptome s 
        ON sp.ids = s.ids WHERE p.idp = $idp ORDER BY 1 ASC " ); 
        
    }


    
}







?>