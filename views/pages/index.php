
<div class="container-fluid">



    <!-- Inclure Menu de Navigation -->
    <?php include("../views/layout/header.inc.php"); ?> 


    

    <section class="">
        <div class="">
            <span>Bienvenue sur le site de</span>
            <h1>Assopuncture</h1>
            <span>Association d’acupuncteurs en médecine traditionnelle chinoise</span>
        </div>

        <p> Router </p>
        <ul>
            <li><a href="/filtrage">Filtrage</a></li>
            <li><a href="/recherche">Recherche</a></li>
        </ul>

    </section>


    <section id="patho">

         <!-- table-bordered -->
        <table class="table table table-striped table-hover text-center" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th> ID Pathologie </th>
                    <th> Decsription Pathologie </th>
                </tr>
            </thead>
                                    
            <tbody>
                <?php foreach ($params['pathos'] as $patho) : ?>
                    <tr> 
                        <td><?= $patho->idp ?></td>
                        <td><?= $patho->desc ?></td>
                        
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </section>


   





    <!-- Inclure le Footer -->
    <?php include("../views/layout/footer.inc.php"); ?>


    
</div>