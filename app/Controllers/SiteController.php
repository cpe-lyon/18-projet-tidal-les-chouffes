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

        // $pathologie = new Pathologie($this->getDB()); 
        // $pathologis = $pathologie->patho();

    return $this->view('pages.index', /* compact('pathologis') */ ); 
    }


    /**
     * @Route("/post")
    */
    public function inscription(int $id)
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