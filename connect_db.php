<?php
  $host = 'localhost';
  $port = "5432";
  $dbname = 'acudb';
  $username = 'pgtp';
  $password = 'tp';

  $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$username;password=$password";

  try {
    $connexion = new PDO($dsn);

    if ($connexion) {
      //echo "Connecté à $dbname avec succès!";
    }
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
?>


