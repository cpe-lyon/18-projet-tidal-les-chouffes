<div class="row row-cols-1 row-cols-md-4 g-4">
  
<?php
require("connect_db.php");

$ech = "Hello";

$sql_patho =  'SELECT idp, "desc" FROM patho';

$result = $connexion->query($sql_patho);

foreach($result as $res){
?>

    <div class="col">
        <div class="card border-dark">
            <img src="https://i.pinimg.com/736x/c5/54/3a/c5543a51f35d0b67e6f5e36f24879991.jpg" class="card-img-top img-fluid" alt="...">
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

                    <li class="list-group-item">An item</li>

                </ul>
            </div>
        </div>
    </div>

    <?php } ?>

</div>

