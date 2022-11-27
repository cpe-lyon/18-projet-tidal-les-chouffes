<!DOCTYPE html>
<html lang="fr">

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset="UTF-8"" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>
            Assopuncture | 
        </title>

        <link rel="icon" href="<?= SCRIPTS . 'images' . DIRECTORY_SEPARATOR . 'favicon.ico' ?>">

        <!-- CSS  Custom styles for this template -->
        <link rel="stylesheet" href="<?= SCRIPTS . 'css' . DIRECTORY_SEPARATOR . 'index.css' ?>">
        <link rel="stylesheet" href="<?= SCRIPTS . 'css' . DIRECTORY_SEPARATOR . 'global.css' ?>"> 

        <!--    Import dataTable Bootstrap  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" >
        
        <!--Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        
        <!--JQuery-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!--FontAwesome-->
        <script src="https://kit.fontawesome.com/343e5ac853.js" crossorigin="anonymous"></script>
        
    </head>


    <body>
  
        <div class="container-fluid">
            <?= $content ?>
        </div>


        <!--    Import components JS -->
        <script src="<?= SCRIPTS . 'js' . DIRECTORY_SEPARATOR . 'header.js' ?>"></script>
        <script src="<?= SCRIPTS . 'js' . DIRECTORY_SEPARATOR . 'footer.js' ?>"></script>

        <!--    Import Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        
        <!--    Import dataTable JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"> </script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"> </script>
        <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"> </script>

        <script src="<?= SCRIPTS . 'js' . DIRECTORY_SEPARATOR . 'datatable.js' ?>"></script>   
        
    </body>

    
</html>