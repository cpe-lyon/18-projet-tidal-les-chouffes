<?php


namespace App\Controllers;
 
use App\Models\Pathologie;
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

        $symptp = [];
        $data = [];
        
        foreach($pathos as $patho)
        {   
            
            $symptpathos = $patho->symptpatho($patho->idp);

            array_push($data, $patho->idp, $patho->desc, $symptpathos);

            array_push($symptp, $symptpathos);
    
        }
        var_dump(data);

        /* if ($pathos==false) {
            return $this->view('errors.404');
        } else {
            return $this->view('pages.index' , compact('pathos') );
        } */
        return $this->view('pages.index', compact('symptp', 'pathos'));  
    }



    /**
     * @Route("/loginGet")
    */
    public function login()
    {
        return $this->view('auths.login');
    }



    /**
     * @Route("/loginPost")
    */
    public function loginPost() // Fonction qui traite la logique des données Page login
    {

        
        /*  $validator = new Validator($_POST);
        $errors = $validator->validate([
            'username' => ['required', 'min:3'],
            'password' => ['required']
        ]);

        if ($errors) {
            $_SESSION['errors'][] = $errors;
            header('Location: /loginGet');
            exit;
        }       */


        $login = new User($this->getDB()); 
        

        // $secu = new Secure($_POST);
    
       
        $user = $login->getByUsername($_POST['username']);     // user $validator->secure()

        
        
        $pass = $_POST['password'];  // $validator->secure();

        // Déclaration des constantes
        /* define('PREFIX_SALT', 'asso'); 
        define('SUFFIX_SALT', 'puncture');
        $hashSecure = md5(PREFIX_SALT."$pass".SUFFIX_SALT); */
        
        if ($pass == $user->pwd) {  // $hashSecure

            

            $_SESSION['auth'] = True;
            $_SESSION['user'] = (int) $user->idU;
            $_SESSION['name'] = (string) $user->username;

            

            return header("Location: /recherchemotCle?success=true");


       } else {
            
            /* $errors = 0;
            $_SESSION['incorrect'] = $errors; */
            return header('Location: /loginGet');
        } 

    }


    

    /**
     * @Route("/inscription")
    */
    public function inscription()
    {
        return $this->view('auths.inscription');
    }



    /**
     * @Route("/inscriptionUser")
    */
    public function inscriptionUser()  
    {
        
        
        $user = new User($this->getDB());

        $login = $_POST["username"];     // $verif->secure()       
        $pwd = $_POST["password"];             // $verif->secure()       


        


        // Déclaration des constantes
        define('PREFIX_SALT', 'asso'); 
        define('SUFFIX_SALT', 'puncture');
        $hashpwd = md5(PREFIX_SALT."$pwd".SUFFIX_SALT);

        // var_dump($hashpwd);

        $result = $user->createUser($login, $hashpwd); 

        var_dump($result);

        // var_dump($result);

        /* if($result){
            // $inscrit = 1;
            // $_SESSION['inscrit'] = $inscrit;
            header('Location: /inscription');
            exit;
        } //    elseif ($result=='erreur') {
            $inscrit = 0;
            $_SESSION['inscrit'] = $inscrit;
            header('Location: /inscription');
            exit;
        }   */


    }








    /**
     * @Route("/recherche")
    */
    public function recherche()
    {  
        // $this->isNotAdmin();

        // $recherche = new Recherche($this->getDB()); 
        // $recherches = $recherche->find();

        return $this->view('pages.recherche');  // , compact('recherche')
    }

    

    /**
     * @Route("/filtrage")
    */
    public function filtrage()
    {
        return $this->view('pages.filtrage');
    }


    /**
     * @Route("/recherchemotCle")
    */
    public function recherchemotCle()
    {
        
        $this->isConnect();
        return $this->view('pages.recherchemotCle');
    }

    

    /**
     * @Route("/logout")
    */
    public function logout()
    {
        session_destroy();

        return header('Location: /loginGet');
    }





}


?>