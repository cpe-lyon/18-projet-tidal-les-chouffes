<!DOCTYPE html>
<html lang="fr">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset="UTF-8"" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>

        Reporting DT Solution | 
		<?php 
            if($_GET['url']=='/') { echo "Accueil"; } 
        ?>

		

    </title>

    <link rel="stylesheet" href="<?= SCRIPTS . 'css' . DIRECTORY_SEPARATOR . 'app.css' ?>">

    <!-- Custom fonts for this template
    <link rel="stylesheet" href=" <= SCRIPTS . 'css' . DIRECTORY_SEPARATOR . 'all.min.css' ?> " type="text/css"> -->

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="<?= SCRIPTS . 'css' . DIRECTORY_SEPARATOR . 'sb-admin-2.min.css' ?>">

</head>


<body>

    <hr>
    
    <div class="container-fluid">
        <?= $content ?>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= SCRIPTS . 'js' . DIRECTORY_SEPARATOR . 'jquery.min.js' ?>"></script>
    <script src="<?= SCRIPTS . 'js' . DIRECTORY_SEPARATOR . 'bootstrap.bundle.min.js' ?>"></script>
    
</body>

</html>