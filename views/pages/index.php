
<div class="container-fluid">



    <!-- Inclure Menu de Navigation 
    < include("../views/layout/header.inc.php"); ?> -->

  
    <section class="hero">
        <div id="header"></div>
        <div class="inset">
            <span>Bienvenue sur le site d'</span>
            <h1>Assopuncture</h1>
            <span>Association d’acupuncteurs en médecine traditionnelle chinoise</span>
        </div>
    </section>

    

    <section class="inset">
        <div class="filters" id="filters">
            <label class="filter">
                Symptômes
                <input type="text" placeholder="Search...">
            </label>
            <label class="filter">
                Méridien
                <select name="meridien" id="meridien"> </select>
            </label>
            <label class="filter">
                Type
                <select name="type" id="type"> </select>
            </label>
        </div>
    </section>

    <div class="container-fluid">
        
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </div>

    
    <div id="footer"></div>

    


    <!-- Inclure le Footer 
    < include("../views/layout/footer.inc.php"); ?>     -->


    
</div>