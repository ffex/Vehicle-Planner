<?php

 try {
    $hostname = "localhost";
    $dbname = "sec_log";
    $user = "sec_user";
    $pass = "HJYs5ujZUPMiEipo";
    $db = new PDO ("mysql:host=$hostname;dbname=$dbname", $user, $pass);
    } catch (PDOException $e) {
       echo "Errore: " . $e->getMessage();
       die();
    }
   
    


?>