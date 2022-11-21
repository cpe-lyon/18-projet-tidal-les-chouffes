<div class="container-fluid">



    <!-- Inclure Menu de Navigation  -->
    <?php include("../views/layout/header.inc.php"); ?>




    <section class="">

        <p> Page Recherche Patho par mot clé </p>
        

        <form class="text-center" method="GET" action="/recherchemotCle">
            <div class="row text-center">
                <div class="col form-group mx-sm-2 mb-4">
                    <input type="text" class="form-control" id="recherche_mc" name="mc" placeholder="Recherche">
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary mb-2">Rechercher</button>
                </div>
            </div>
        </form>
        
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Pathologies</th>
                    <th scope="col">Mot clé</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($params['keywords'] as $p) : ?>
                <tr>
                    <!--<th scope="row">1</th>-->
                    
                    <td><?php echo(ucfirst($p->desc)) ?></td>
                    <td><?php echo(ucfirst($p->name)) ?></td>
                </tr>
                <?php endforeach ?> 
            </tbody>
        </table>
                


    </section>





    <!-- Inclure le Footer -->
    <?php include("../views/layout/footer.inc.php"); ?>


</div>