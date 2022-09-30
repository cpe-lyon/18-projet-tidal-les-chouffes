<?php


namespace App\Controllers;
 
// use App\Models\Chariot;



class ListController extends Controller { 


    /**
     * @Route("/")
    */
    public function index()
    {  
        // $this->isNotAdmin();

        // $chariot = new Chariot($this->getDB()); 
        // $chariots = $chariot->findByUser();

        return $this->view('pages.index');  // , compact('chariots')
    }

    
    /**
     * @Route("/machine/id")
    */
    
    /*  public function machine(String $id)
    {

        $this->isNotAdmin();

        $init = $id;
        $validator = new Secure($init);

        $chariot = new Chariot($this->getDB());
        $chariot = $chariot->findById($validator->secure($id));

        if ($chariot==false) {
            return $this->view('errors.404');
        } else {
            return $this->view('pages.show', compact('chariot'));
        }
             
    }   */


    /**
     * @Route("/inscription")
    */
    public function inscription()
    {
        return $this->view('pages.inscription');
    }


    /**
     * @Route("/addChariot")
    */
    public function addChariot()
    {

        // $this->isNotAdmin();

        /* $init = "init";
        $validator = new Secure($init);
        $user = $_SESSION['user'];
        $chariot = new Chariot($this->getDB());
        $chariot = $chariot->addChariot($validator->secure($_POST['serialn']), $user); */
        
        // return $this->view('pages.myaccount');     
    }


    /**
     * @Route("/capteur")
    */
    
    /* public function vuecapteur()
    {  

        $init = "init";
        $verif = new Secure($init);

        $sn = $verif->secure($_GET["sn"]); //  $_POST 

        $capteur = new Capteur($this->getDB());
        $capteur = $capteur->findById($sn);
          
        
        if ($capteur==false) {

            $_SESSION['error'] = "False";
            return $this->view('pages.capteur');

        } else {

            return header("Location: http://docker54762-env-9256727.jcloud-ver-jpe.ik-server.com/CO2?sn=$sn");

        }

    }
    */


    /**
     * @Route("/forgotpwd")
    */
    public function forgotpwd()
    {  
        return $this->view('errors.forgotpwd');
    }



}


?>