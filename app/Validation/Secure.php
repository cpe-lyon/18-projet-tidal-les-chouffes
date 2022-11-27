<?php

namespace App\Validation;

class Secure {


    private $data;

    public function secure($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = strip_tags($data);
        return $data;
    }

    
}


?>