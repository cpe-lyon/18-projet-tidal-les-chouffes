<?php  
 
  $host = 'localhost';
  $port = "5432";
  $dbname = 'acudb';
  $username = 'pgtp';
  $password = 'tp';

  $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$username;password=$password";

  try {
    $connect = new PDO($dsn);
  } catch (PDOException $e) {
    echo $e->getMessage();
  }

  
  $data_selected = $_GET["brand_id"];

  var_dump(trim($data_selected, '"'));
 
 $output = '';  
 if(isset($_GET["brand_id"]))  
 {  
      if($_GET["brand_id"] != '')  
      {  


         
            

         $sql_patho = ' SELECT * FROM meridien WHERE nom = '.$data_selected.' '; 

         // $sql_patho = " SELECT * FROM meridien WHERE nom = 'Estomac' "; 

            // $sql_patho = "SELECT * FROM patho WHERE type = '".$_GET["brand_id"]."'"; 
          
      }  
      else  
      {  
           $sql_patho = "SELECT * FROM patho";  
      }  

      $result_patho = $connect->query($sql_patho);

      foreach($result_patho as $res){ 

        $output .= '<div class="col">

           <div class="card border-dark">

                <div class="card-body">
                    <h5 class="card-title"> '.ucfirst($res['nom']).' </h5>
                    <p class="card-text"> '.$res['code'].' </p>
                </div>

           </div>
           
           </div>'; 

      }  
      echo $output;  
 }  





 ?>