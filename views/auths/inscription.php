
<div class="container-fluid my-5">


<header class="row mt-3">
    <div class="col">

        <div class="mx-auto w-50 p-3 text-center">
            <p>Bienvenu sur le site Assopuncture </p>
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
                if (isset($_SESSION['inscrit']) && ($_SESSION['inscrit']==1)) {
            ?>

            <div class='alert alert-success text-center'>
                <p> Inscrit ! </p>
            </div>

            <?php
                } elseif (isset($_SESSION['inscrit']) && ($_SESSION['inscrit']==0)) {
            ?>

            <div class='alert alert-danger text-center'>
                <p> "Erreur", Non Inscrit ! </p>
            </div>

            <?php
                }
            ?>

            <?php session_destroy(); ?>


            <div class=""> 

                <form class="form-container" action="/inscriptionUser" method="GET">     <!-- Get POST -->
                

                    <div class="col-sm mx-auto w-50 p-3 text-center mt-5 mb-5 ">
                        <a href="/" class="text-dark" > Retour accueil </a>
                    </div>

                    <div class="form-group row mb-5">
                        <label for="inputUser" class="col-sm-5 col-form-label"> Login </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control username" name="username" id="inputUser" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputAdress" class="col-sm-5 col-form-label"> Mot de passe </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control adress" name="adress" id="inputAdress" >
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary text-dark mt-5 mb-5"> Se connecter </button>

                    

                    
                    

                </form>

            </div>

        </div>
    </div>

</div>




</div>
</div>