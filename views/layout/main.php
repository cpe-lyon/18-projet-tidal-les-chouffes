<!DOCTYPE html>
<html lang="fr">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset="UTF-8"" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>

        Assopuncture | 
		<?php 
            if($_GET['url']=='/') { echo "Accueil"; } 
        ?>

    </title>


  
    <link rel="icon" href="images/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <link rel="stylesheet" href="<?= SCRIPTS . 'css' . DIRECTORY_SEPARATOR . 'index.css' ?>">

    <!-- Custom fonts for this template
    <link rel="stylesheet" href=" <= SCRIPTS . 'css' . DIRECTORY_SEPARATOR . 'all.min.css' ?> " type="text/css"> -->

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="<?= SCRIPTS . 'css' . DIRECTORY_SEPARATOR . 'global.css' ?>">

    <!--JQuery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!--FontAwesome-->
    <script src="https://kit.fontawesome.com/343e5ac853.js" crossorigin="anonymous"></script>
    


</head>


<body>

    <hr>
    
    <div class="container-fluid">
        <?= $content ?>
    </div>


    <!--Import components-->
    <script src="<?= SCRIPTS . 'js' . DIRECTORY_SEPARATOR . 'header.js' ?>"></script>
    <script src="<?= SCRIPTS . 'js' . DIRECTORY_SEPARATOR . 'footer.js' ?>"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= SCRIPTS . 'js' . DIRECTORY_SEPARATOR . 'jquery.min.js' ?>"></script>
    <script src="<?= SCRIPTS . 'js' . DIRECTORY_SEPARATOR . 'bootstrap.bundle.min.js' ?>"></script>
    
</body>

</html>