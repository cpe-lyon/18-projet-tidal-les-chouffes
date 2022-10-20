<?php

namespace App\Models;

use App\Models\Model;


class User extends Model {


    protected $table = 'users';
    
    public function getByUsername(string $username): User     
    {
        return $this->query(" SELECT * FROM {$this->table} WHERE username = ? ", [$username], true);  
    }



    public function createUser(string $login, string $hashpwd): User 
    {

        
        $stmt = $this->bdd->getPDO()->prepare("INSERT {$this->table} (username, pwd) VALUES (?, ?)");
        $stmt->execute([$login, $hashpwd]);

        /*  parent::createUser($login, $hashpwd);
        $user = $this->bdd->getPDO()->lastInsertId();
        if ($user!='') {
            return true;
        } else {
            return 'erreur';
        }   */
  
    }


    


}




?>