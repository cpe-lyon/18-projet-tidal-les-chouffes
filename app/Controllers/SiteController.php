<?php


namespace App\Controllers;
 
use App\Models\Pathologie;
use App\Models\Meridien;
use App\Models\User;
use App\Validation\Secure;

class SiteController extends Controller { 



    /**
     * @Route("/")
    */
    public function index()
    { 

        $patho = new Pathologie($this->getDB()); 
        $pathos = $patho->patho(); 

        $meridien = new Meridien($this->getDB()); 
        $meridiens = $meridien->meridien(); 

        $listPathos = [];
        $listSymptpathos = [];
        
        foreach($pathos as $patho)
        {   
            
            $symptpathos = $patho->symptpatho($patho->idp);

            array_push($listPathos, $patho);
            array_push($listSymptpathos, $symptpathos);
    
        }


        if ($pathos==false) {
            return $this->view('errors.404');
        } else {
            return $this->view('pages.index', compact('listPathos', 'listSymptpathos', 'meridiens'));
        }  
    }



    /**
     * @Route("/pageLogin")
    */
    public function login()
    {
        return $this->view('auths.login');
    }



    /**
     * @Route("/connexion")
    */
    public function connexion() 
    {

        
        $login = new User($this->getDB()); 
        $verifdata = new Secure();

        
        $userbdd = $login->getByUsername($verifdata->secure($_POST['username']));     
        $pass = $verifdata->secure($_POST['password']);

        // Déclaration des constantes
        define('PREFIX_SALT', 'asso'); 
        define('SUFFIX_SALT', 'puncture');
        $hashSecure = md5(PREFIX_SALT."$pass".SUFFIX_SALT); 

        var_dump($hashSecure);
        
        if ($hashSecure == $userbdd->pwd) {  

            $_SESSION['auth'] = true;
            $_SESSION['user'] = (int) $userbdd->idU;
            $_SESSION['name'] = (string) $userbdd->username;

            return header("Location: /pageRecherchemotCle?success=true");

       } else {
            
            $_SESSION['auth'] = false;
            return header('Location: /pageLogin');
        } 

    }


    

    /**
     * @Route("/pageInscription")
    */
    public function pageInscription()
    {
        return $this->view('auths.inscription');
    }



    /**
     * @Route("/createUser")
    */
    public function createUser()  
    {

        
        $user = new User($this->getDB());
        $verifdata = new Secure();

        $login = $verifdata->secure($_POST['username']);
        $pwd = $verifdata->secure($_POST['password']);

        // Déclaration des constantes
        define('PREFIX_SALT', 'asso'); 
        define('SUFFIX_SALT', 'puncture');
        $hashpwd = md5(PREFIX_SALT."$pwd".SUFFIX_SALT);

        $result = $user->createUser($login, $hashpwd); 

        var_dump($result);

        if ($result) {
            $_SESSION['inscrit'] = true;
            header('Location: /pageInscription');
            exit;
        } elseif ($result=='erreur') {
            $_SESSION['inscrit'] = false;
            header('Location: /pageInscription');
            exit;
        }   


    }



    /**
     * @Route("/pageRecherchemotCle")
    */
    public function pageRecherchemotCle()
    {
        $this->isConnect();
        return $this->view('pages.recherchemotCle');
    }


    /**
     * @Route("/recherchemotCle")
    */
    public function recherchemotCle()
    {  
        $this->isConnect();

        // $recherche = new Recherche($this->getDB()); 
        // $recherches = $recherche->find();

        return $this->view('pages.recherchemotCle', compact('recherche'));   
    }


    

    

    /**
     * @Route("/logout")
    */
    public function logout()
    {
        session_destroy();
        return header('Location: /pageLogin');
    }





}


?>