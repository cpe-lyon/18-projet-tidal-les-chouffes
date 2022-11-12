<?php

namespace App\Models;

use App\Models\Model;


class User extends Model {


    protected $tableUsers = 'users';
    
    
    
    public function getByUsername(string $username): User   // : User permet de préciser que la fonction renvoie un table  User  
    {
        return $this->query(" SELECT * FROM {$this->tableUsers} WHERE username = ? ", [$username], true);  
    } 



    public function createUser(string $login, string $hashpwd) 
    {

        $id = random_int(3, 99);

        $stmt = $this->bdd->getPDO()->prepare("INSERT INTO public.{$this->tableUsers} (idu, username, pwd) VALUES (?, ?, ?)");
        $user = $stmt->execute([$id, $login, $hashpwd]);  

        if (is_bool($user) === true) {
            return true;
        } else {
            return 'erreur';
        }
  
    } 


    


}




?>