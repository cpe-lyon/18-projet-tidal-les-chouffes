
<div class="container-fluid my-5">


<header class="row mt-3">
    <div class="col">

        <div class="mx-auto w-50 p-3 text-center">
            <p>Bienvenue sur le site Assopuncture </p>
        </div>

        <div class="mx-auto w-50 p-3 text-center">
            <p> Inscription Utilisateur </p>
        </div>

    </div>
</header>




<div class="row"> 
    <div class="col">
        <div class="mx-auto w-50 p-3 bg-light text-dark text-center">   
    
            

            <?php 
                if (isset($_SESSION['inscrit']) && ($_SESSION['inscrit'] == true )) {
            ?>

            <div class='alert alert-success text-center'>
                <p> Inscrit ! </p>
            </div>

            <div class="text-dark mx-auto text-center mt-3 mb-3">                   
                <div class="col-xl-4 col-md-4 col-sm-4">
                    <a href="/pageLogin" class="text-dark" > Se connecter </a> 
                </div>
            </div>

            <?php
                } elseif (isset($_SESSION['inscrit']) && ($_SESSION['inscrit'] == false )) {
            ?>

            <div class='alert alert-danger text-center'>
                <p> "Erreur", Non Inscrit ! </p>
            </div>

            <?php
                }
            ?>

            <?php session_destroy(); ?>


            <div class=""> 

                <form class="form-container" action="/createUser" method="POST">     
                

                <div class="row">
                <div class="col-xl col-md-6 mb-5 mx-auto text-center text-gray-800"> 
                    <a href="/" title="Accueil"> 
                        <img src="<?= SCRIPTS . 'images' . DIRECTORY_SEPARATOR . 'logo.png' ?>" class="rounded-square img-fluid logoSize" class="img-fluid rounded" alt="Responsive logo app"/> <!-- logoSize -->
                    </a>
                </div>
                </div>

                    <div class="form-group row mb-5">
                        <label for="inputUser" class="col-sm-5 col-form-label"> Login </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control username" name="username" id="inputUser" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPwd" class="col-sm-5 col-form-label"> Mot de passe </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control adress" name="password" id="inputPwd" >
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary text-dark mt-5 mb-5"> S'inscrire </button>

                      

                </form>

            </div>

        </div>
    </div>

</div>




</div>
</div>