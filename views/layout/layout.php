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

    <link rel="stylesheet" href="<?= SCRIPTS . 'css' . DIRECTORY_SEPARATOR . 'index.css' ?>">

    <!-- Custom fonts for this template
    <link rel="stylesheet" href=" <= SCRIPTS . 'css' . DIRECTORY_SEPARATOR . 'all.min.css' ?> " type="text/css"> -->

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="<?= SCRIPTS . 'css' . DIRECTORY_SEPARATOR . 'global.css' ?>">

</head>


<body>

    <hr>
    
    <div class="container-fluid">

        <p> Bonjour </p>
        <?= $content ?>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= SCRIPTS . 'js' . DIRECTORY_SEPARATOR . 'footer.js' ?>"></script>
    <script src="<?= SCRIPTS . 'js' . DIRECTORY_SEPARATOR . 'header.js' ?>"></script>
    
</body>

</html>