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
            <h3>Bienvenue sur le site d'Assopuncture</h3>
            <span>L'Association d’acupuncteurs en médecine traditionnelle chinoise</span>
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
                <select name="brand" id="brand">  
                    <option selected>Veuillez sélectionner</option>
                    <?php foreach ($params['meridiens'] as $meridien) : ?>
                        <option value="<?= $meridien->nom ?>"><?= $meridien->nom ?></option>
                    <?php endforeach ?>
                </select>
            </label>
            <label class="filter">
                Type
                <select >
                <option selected>Veuillez sélectionner</option>
                    <?php foreach ($params['listPathos'] as $patho) : ?>
                        <option value="<?= $patho->type ?>"><?= $patho->type ?></option>
                    <?php endforeach ?>
                </select>
            </label>
        </div>
    </section>




    <div class="container-fluid mt-5" id="dynamic_content"> 
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th class="text-center text-dark bg-info" scope="col">#id</th>
                    <th class="text-center text-dark bg-warning" scope="col">Pathologie</th>
                    <th class="text-center text-dark bg-secondary" scope="col">Méridiens</th>
                    <th class="text-center text-dark bg-success" scope="col">Symptomes</th>
                </tr>
            </thead>

            <?php foreach ($params['listPathos'] as $patho) : ?>
            <tbody>
                <tr>

                    <th class="text-justify text-dark bg-info"> <?= $patho->idp ?> </td>

                    <td class="text-justify text-dark bg-warning"> <?= ucfirst($patho->desc) ?> </td>

                    <td class="text-justify text-dark bg-secondary">
                        Méridiens
                    </td>
                    
                    <td class="text-justify text-dark bg-success">
                        <ul class="list-group list-group-flush">
                            <?php foreach ($params['listSymptpathos'] as $symptpatho) : ?>
                                <?php foreach ($symptpatho as $sympt) : ?>
                                    <?php if ($sympt->idp == $patho->idp) { ?>
                                        <li class="list-group-item bg-light"> <?= ucfirst($sympt->desc) ?> </li>
                                    <?php } ?>
                                <?php endforeach ?>
                            <?php endforeach ?>
                        </ul>
                    </td>
                    
                </tr>
            </tbody>
            <?php endforeach ?>

            <tfoot>
                <tr>

                    <th class="text-center text-dark bg-info" scope="col">#id</th>
                    <th class="text-center text-dark bg-warning" scope="col">Pathologie</th>
                    <th class="text-center text-dark bg-secondary" scope="col">Méridiens</th>
                    <th class="text-center text-dark bg-success" scope="col">Symptomes</th>
                </tr>
            </tfoot>
        </table>
    </div>




    <div id="footer"></div>

    

</div>


<script>  
 $(document).ready(function(){  

      $('#brand').change(function(){  
           var brand_id = $(this).val();  
           $.ajax({   
                url:"../app/Controllers/Load_data.php",
                method:"GET",  
                data:{brand_id:brand_id},  
                success:function(data){  
                     $('#dynamic_content').html(data);  
                }  
           });  
      }); 
       
 });  
 </script> 

