<?php

namespace App\Models;

use App\Models\Model;

class Pathologie extends Model {

    protected $table = 'patho';


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


    public function patho(): array     // : array permet de préciser que la fonction renvoie un array
    {
        // $user = $_SESSION['user'];
        return $this->query(' SELECT idp, "desc" FROM {$this->table} ORDER BY 1 ASC '); 
    }
    
}





?>