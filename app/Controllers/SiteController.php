<?php


namespace App\Controllers;
 
use App\Models\Pathologie;



class SiteController extends Controller { 





    /**
     * @Route("/")
    */
    public function index()
    {  
        // $this->isNotAdmin();

        // $data = new Data($this->getDB()); 
        // $datas = $data->find();

        return $this->view('pages.index');  // , compact('datas')
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
     * @Route("/inscription")
    */
    public function inscription()
    {
        return $this->view('pages.inscription');
    }

    


    /**
     * @Route("/forgotpwd")
    */
    public function forgotpwd()
    {  
        return $this->view('errors.forgotpwd');
    }



}


?>