

<!-- Begin Page Content -->
<div class="container-fluid bg-light text-dark p-5 m-5 mx-auto"> <!-- w-75 -->

    <div class="shadow p-5">

        <!-- Page Heading -->
        <div class="container">

            <div class="row">
                <div class="col-xl col-md-6 mb-5 mx-auto text-center text-gray-800"> <!-- mx-auto w-50 p-3 bg-light text-dark text-center -->
                    <a href="/" title="Accueil"> 
                        <img src="<?= SCRIPTS . 'images' . DIRECTORY_SEPARATOR . 'logo.png' ?>" class="rounded-square img-fluid logoSize" class="img-fluid rounded" alt="Responsive logo app"/> <!-- logoSize -->
                    </a>
                </div>
            </div>

            <div class="row">

                <div class="col-xl col-md-6 mb-4 mx-auto text-center text-gray-800">   <!-- mx-auto w-50 p-3 bg-light text-dark text-center -->
                    <p> Bienvenu sur le site Assopuncture </p>
                </div>

            </div>

            <div class="row">

                <div class="col-xl col-md-6 mb-4 mx-auto text-center text-gray-800">   <!-- mx-auto w-50 p-3 bg-light text-dark text-center -->
                    <p>Connexion</p>
                </div>
                
            </div>

        </div>


        
        <!-- Page Error 1 -->
        <?php if (isset($_SESSION['errors'])): ?>

            <?php foreach($_SESSION['errors'] as $errorsArray): ?>
                <?php foreach($errorsArray as $errors): ?>

                    <div class="container"> <!-- row mx-auto w-50 p-3 bg-light text-dark -->
                        <div class="row">
                            <div class="col-xl col-md-6 mx-auto text-center text-gray-800">
                                <div class="alert alert-danger">
                                    <?php foreach($errors as $error): ?>
                                        <li><?= $error ?></li>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach ?>
            <?php endforeach ?>

        <?php endif ?>

        
        <!-- Page Error 2 -->
        <?php if ( isset($_SESSION['incorrect']) && ($_SESSION['incorrect']==0) ): ?>

            <div class="container">
                <div class="row">
                    <div class="col-xl col-md-6 mx-auto text-center text-gray-800">
                        <div class="alert alert-danger text-center">
                            <p> username ou Password incorrect </p>
                        </div>
                    </div>
                </div>
            </div>

        <?php endif ?>

        <?php session_destroy(); ?>

        

        <!-- Content Row -->
        <div class="row mx-auto mt-5">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4 mx-auto">
            
                <form class="form-container" action="/loginPost" method="POST" >    <!-- name="formulaire" action="/login" method="post" -->
                            
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
                                    <button type="submit" class="btn btn-primary text-dark mt-3 mb-5"> Se connecter </button> <!-- name="connexion" -->
                                </div>

                                <div class="form-group row mx-auto text-center mt-3">
                                    <div class="col-xl-4 col-md-4 col-sm-4">
                                        <a href="#" class="text-dark mb-5" > Mot de passe oublié </a>
                                    </div>
                                    
                                    <div class="col-xl-4 col-md-4 col-sm-4">
                                        <a href="/inscription" class="text-dark" > Créer un compte </a> <!-- target="blank_" -->
                                    </div>
                                </div>
                                

                </form>
            </div>
            
        </div>

    </div>


</div>
<!-- /.container-fluid -->