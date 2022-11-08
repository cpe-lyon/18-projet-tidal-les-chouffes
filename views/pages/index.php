
<div class="container-fluid">


  
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
        
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>

        <div class="col">

            <div class="card border-dark">
                <!-- <img src="https://cdn.iconscout.com/icon/free/png-256/gallery-187-902099.png" class="card-img-top img-fluid" alt="..."> -->
                <div class="card-body">
                    <?php foreach ($params['pathos'] as $patho) : ?>
                        <h5 class="card-title"> <?= ucfirst($patho->desc) ?> </h5>
                        <p class="card-text"> <?= $patho->idp ?> </p>
                    <?php endforeach ?>  
                </div>

                <div class="card-body">
                    <h5 class="card-title">Méridiens : </h5>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Symptomes : </h5>
                    <ul class="list-group list-group-flush">
                        <?php foreach ($params['symptp'] as $symptpatho) : ?>
                            <?php foreach ($symptpatho as $sympt) : ?>
                                <li class="list-group-item"> <?= ucfirst($sympt->desc) ?> </li>
                            <?php endforeach ?>
                        <?php endforeach ?>
                    </ul>
                </div>

            </div>

        </div>
    </div>





    <!-- <div class="container-fluid">
        <section id="patho">
            <!- table-bordered ->
            <table class="table table table-striped table-hover text-center" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th> ID Pathologie </th>
                        <th> Decsription Pathologie </th>
                    </tr>
                </thead>                        
                <tbody>
                    < foreach ($params['pathos'] as $patho) : ?>
                        <tr> 
                            <td>< $patho->idp ?></td>
                            <td>< $patho->desc ?></td>
                            
                        </tr>
                    < endforeach ?>
                </tbody>
            </table>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </div> -->

    


    <div id="footer"></div>


    
</div>