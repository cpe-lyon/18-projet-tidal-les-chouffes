<div class="container-fluid">



    <section class="hero">
        <div id="header">
            <?php if (isset($_SESSION['name'])) :
                $name = $_SESSION['name'];
            ?>
            <?php endif ?>
            <script type="text/javascript">
                var username = '<?php echo $name; ?>';
            </script>
            <script type="text/javascript" src="../../public/js/header.js"></script>
        </div>
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

    <table class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Pathologies</th>
                <th scope="col">Méridiens</th>
                <th scope="col">Symptomes</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($params['listPathos'] as $patho) : ?>
                <tr>
                    <th scope="row"><?= $patho->idp ?></th>
                    <td><?php echo (ucfirst($patho->desc)) ?></td>
                    <td>Meridien</td>
                    <td>
                    <table class="table table-bordered">
                        <tr>
                        <?php foreach ($params['listSymptpathos'] as $symptpatho) : ?>
                                <?php foreach ($symptpatho as $sympt) : ?>
                                    <?php if ($sympt->idp == $patho->idp) { ?>
                                        <td<?= ucfirst($sympt->desc) ?></td>
                                    <?php } ?>
                                <?php endforeach ?>
                        <?php endforeach ?>
                        </tr>
                    </table>
                                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>


    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-6 g-6">

            <?php foreach ($params['listPathos'] as $patho) : ?>
                <div class="col">

                    <div class="card border-dark" style="width: 18rem;">

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

                                    <?php if ($sympt->idp == $patho->idp) { ?>
                                        <li class="list-group-item"> <?= ucfirst($sympt->desc) ?> </li>
                                    <?php } ?>
                                <?php endforeach ?>
                            <?php endforeach ?>
                        </ul>

                    </div>

                </div>

            <?php endforeach ?>
        </div>

    </div>




    <div id="footer"></div>



</div>