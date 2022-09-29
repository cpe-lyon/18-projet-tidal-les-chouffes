<div class="row row-cols-1 row-cols-md-6 g-4"> 
  
<?php
require("connect_db.php");

$ech = "Hello";

$sql_patho =  'SELECT idp, "desc" FROM patho ORDER BY 1 ASC';

$result_patho = $connexion->query($sql_patho);

foreach($result_patho as $res){
    $val = $res['idp'];
    $sql_patho_sympt = "SELECT s.desc FROM patho p JOIN symptpatho sp ON p.idp = sp.idp JOIN symptome s ON sp.ids = s.ids WHERE p.idp = $val ORDER BY 1 ASC";
    $result_patho_sympt = $connexion->query($sql_patho_sympt);
?>
    <div class="col">
        <div class="card border-dark">
            <img src="https://cdn.iconscout.com/icon/free/png-256/gallery-187-902099.png" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo(ucfirst($res['desc'])); ?></h5>
                <p class="card-text"><?php echo $res['idp']; ?></p>
            </div>
            <div class="card-body">
                <h5 class="card-title">Méridiens : </h5>
            </div>
            <div class="card-body">
                <h5 class="card-title">Symptomes : </h5>
                <ul class="list-group list-group-flush">
                <?php foreach($result_patho_sympt as $ress){?>
                    <li class="list-group-item"><?php echo(ucfirst($ress['desc'])); ?></li>
                <?php } ?>
                </ul>
            </div>
        </div>
    </div>

    <?php } ?>

</div>
