<?php

namespace App\Models;

use App\Models\Model;

class Meridien extends Model {

    protected $table = 'meridien';

    public function meridien(): array     // : array permet de préciser que la fonction renvoie un array
    {
        return $this->query(" SELECT nom FROM {$this->table} ORDER BY 1 ASC " );
    }
}


?>