<?php

namespace App\Models;

use App\Models\Model;


class User extends Model {


    protected $tableUsers = 'users';
    
    
    
    public function getByUsername(string $username): User     
    {
        
        return $this->query(" SELECT * FROM {$this->tableUsers} WHERE username = ? ", [$username], true);  
    } 



    public function createUser(string $login, string $hashpwd): User 
    {

        parent::createUser($login, $hashpwd);

        /* $stmt = $this->bdd->getPDO()->prepare("INSERT {$this->tableUsers} (username, pwd) VALUES (?, ?)");
        return $stmt->execute([$login, $hashpwd]);  */ 

        $user = $this->bdd->getPDO()->lastInsertId();
        

        if ($user!='') {
            return "true";
        } else {
            return 'erreur';
        }   
  
    } 


    


}




?>