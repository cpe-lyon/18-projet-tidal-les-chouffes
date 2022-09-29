<?php
    $_heure = 3600;
    $_name = "SESSION_COOKIE";
    $_value = 123456789;
    setcookie($_name, $_value,time()+ $_heure);
 ?>
<html>
 <head>
  <title>Test PHP</title>
 </head>
 <body>
 <?php 
    function authenticate() {
        header('WWW-Authenticate: Basic realm="Test Authentication System"');
        header('HTTP/1.0 401 Unauthorized');
        echo "Vous devez entrer un identifiant et un mot de passe valides pour accéder
        à cette ressource.\n";
        exit;
    }
    
    if ( !isset($_SERVER['PHP_AUTH_USER']) ||
         ($_POST['SeenBefore'] == 1 && $_POST['OldAuth'] == $_SERVER['PHP_AUTH_USER'])) {
        authenticate();
    } else {
        echo "<p>Bienvenue : " . htmlspecialchars($_SERVER['PHP_AUTH_USER']) . "<br />";
        echo "Ancien : " . htmlspecialchars($_REQUEST['OldAuth']);
        echo "<form action='' method='post'>\n";
        echo "<input type='hidden' name='SeenBefore' value='1' />\n";
        echo "<input type='hidden' name='OldAuth' value=\"" . htmlspecialchars($_SERVER['PHP_AUTH_USER']) . "\" />\n";
        echo "<input type='submit' value='Re Authenticate' />\n";
        echo "</form></p>\n";
    }
?>
 </body>
</html>