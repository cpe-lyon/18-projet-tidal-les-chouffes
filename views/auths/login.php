

<!-- Begin -->
<div class="container-fluid bg-light text-dark p-5 m-5 mx-auto"> 

    <div class="shadow p-5">

        <!-- Page Heading -->
        <div class="container">

            <div class="row">
                <div class="col-xl col-md-6 mb-5 mx-auto text-center text-gray-800"> 
                    <a href="/" title="Accueil"> 
                        <img src="<?= SCRIPTS . 'images' . DIRECTORY_SEPARATOR . 'logo.png' ?>" class="rounded-square img-fluid logoSize" class="img-fluid rounded" alt="Responsive logo app"/> <!-- logoSize -->
                    </a>
                </div>
            </div>

            <div class="row">

                <div class="col-xl col-md-6 mb-4 mx-auto text-center text-gray-800">   
                    <p> Bienvenue sur le site Assopuncture </p>
                </div>

            </div>

            <div class="row">

                <div class="col-xl col-md-6 mb-4 mx-auto text-center text-gray-800">   
                    <p>Connexion</p>
                </div>
                
            </div>

        </div>


        
        <!-- Error -->
        <?php if ( isset($_SESSION['auth']) && ($_SESSION['auth'] == false ) ): ?>

            <div class="container">
                <div class="row">
                    <div class="col-xl col-md-6 mx-auto text-center text-gray-800">
                        <div class="alert alert-danger text-center">
                            <p> Username ou mot de passe incorrect </p>
                        </div>
                    </div>
                </div>
            </div>

        <?php endif ?>

        <?php session_destroy(); ?>

        

        <!-- Content Row -->
        <div class="row mx-auto mt-5">

            <div class="col-xl-6 col-md-6 mb-4 mx-auto">
            
                <form class="form-container" action="/connexion" method="POST" >    
                            
                                <div class="form-group row">
                                    <label for="inputUser" class="col-xl-5 col-md-6 col-sm-4 col-form-label"> Username </label>
                                    <div class="col-xl-6 col-md-6 col-sm-7 mb-4">
                                        <input type="text" class="form-control username" name="username" id="inputUser" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-xl-5 col-md-6 col-sm-4 col-form-label"> Password </label>
                                    <div class="col-xl-6 col-md-6 col-sm-7 mb-4">
                                        <input type="password" class="form-control password" name="password" id="inputPassword">
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary text-dark mt-3 mb-5"> Se connecter </button> 
                                </div>

                                <div class="form-group row mx-auto text-center mt-3">
                                    <div class="col-xl-4 col-md-4 col-sm-4">
                                        <a href="#" class="text-dark mb-5" > Mot de passe oublié </a>
                                    </div>
                                    
                                    <div class="col-xl-4 col-md-4 col-sm-4">
                                        <a href="/pageInscription" class="text-dark" > Créer un compte </a> <!-- target="blank_" -->
                                    </div>
                                </div>
                                

                </form>
            </div>
            
        </div>

    </div>


</div>
<!-- /.container-fluid -->