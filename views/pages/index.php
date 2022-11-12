
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
                <select>
                <option selected>Veuillez sélectionner</option>
                    <?php foreach ($params['meridiens'] as $meridien) : ?>
                        <option value="<?= $meridien->nom ?>"><?= $meridien->nom ?></option>
                    <?php endforeach ?>
                </select>
            </label>
            <label class="filter">
                Type
                <select name="type" id="type"> </select>
            </label>
        </div>
    </section>

    
    



    <div class="container-fluid">

        <?php foreach ($params['listPathos'] as $patho) : ?>     
            <div class="col">

            

                <div class="card border-dark mb-5" style="width: 18rem;">

                    <img src="https://cdn.iconscout.com/icon/free/png-256/gallery-187-902099.png" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> <?= ucfirst($patho->desc) ?> </h5>
                        <p class="card-text"> <?= $patho->idp ?> </p>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Méridiens : </h5>
                    </div>

                    <h5 class="card-title">Symptomes : </h5>
                    
                    <ul class="list-group list-group-flush"> 
                        <?php foreach ($params['listSymptpathos'] as $symptpatho) : ?>
                            <?php foreach ($symptpatho as $sympt) : ?>

                                <?php if ($sympt->idp == $patho->idp ) { ?>
                                    <li class="list-group-item"> <?= ucfirst($sympt->desc) ?> </li>
                                <?php } ?>
                            <?php endforeach ?>
                        <?php endforeach ?> 
                    </ul>

                </div>

            </div> 

        <?php endforeach ?> 

    </div>

    


    <div id="footer"></div>


    
</div>