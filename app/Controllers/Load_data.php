<?php  
 
  // Config BDD pour mieux gérer les appels AJAX

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


  $data_selected = $_GET["brand_mrd"];


$output = '';  
 
     if(isset($data_selected))  
     {  

          

          if( $data_selected != '')    
          {  

               $sql_filter = " SELECT p.idp, p.desc, s.desc, m.nom FROM patho p    
               JOIN symptpatho sp ON p.idp = sp.idp 
               JOIN symptome s ON sp.ids = s.ids 
               JOIN meridien m ON p.mer = m.code
                    WHERE m.nom = '$data_selected' 
                    OR p.type = '$data_selected'
                    OR s.desc = '$data_selected'
               ORDER BY 1 ASC " ; 
               
          }  
          else  
          {  
               $sql_filter = "SELECT * FROM meridien";  
          }  

          $result_filter = $connect->query($sql_filter);

          foreach($result_filter as $res){ 

               $output .= '<div class="container-fluid mt-5" id="dynamic_content"> 

                    <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                         <tr>
                              <th class="text-center text-dark bg-info" scope="col">#id</th>
                              <th class="text-center text-dark bg-warning" scope="col">Pathologie</th>
                              <th class="text-center text-dark bg-secondary" scope="col">Méridiens</th>
                              <th class="text-center text-dark bg-success" scope="col">Symptomes</th>
                         </tr>
                    </thead>


                    
                         <tbody>
                         <tr>
          
                              <th class="text-justify text-dark bg-info"> '.$res['idp'].' </td>
          
                              <td class="text-justify text-dark bg-warning"> '.$res['desc'].' </td>
          
          
                              
                              <td class="text-justify text-dark bg-secondary">

                                        '.ucfirst($res['nom']).'
                                             
                              </td>
                              
                              <td class="text-justify text-dark bg-success">
                                   <ul class="list-group list-group-flush">
                                        
                                                  <li class="list-group-item bg-light"> '.ucfirst($res['desc']).' </li>
                                             
                                   </ul>
                              </td>
                              
                         </tr>
                         </tbody>
                         

                    <tfoot>
                         <tr>

                              <th class="text-center text-dark bg-info" scope="col">#id</th>
                              <th class="text-center text-dark bg-warning" scope="col">Pathologie</th>
                              <th class="text-center text-dark bg-secondary" scope="col">Méridiens</th>
                              <th class="text-center text-dark bg-success" scope="col">Symptomes</th>
                         </tr>
                    </tfoot>
                    </table>

               </div>'; 

          }  
          echo $output;  
     }  



 ?>