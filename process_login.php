<?php

include 'DB_Conn2.php';
include 'functions.php';
sec_session_start(); // usiamo la nostra funzione per avviare una sessione php sicura
if(isset($_POST['email'], $_POST['p'])) { 
   $email = $_POST['email'];
   $password = $_POST['p']; // Recupero la password criptata.
   
   if(login($email, $password, $db) == true) {
      // Login eseguito
      //echo 'Success: You have been logged in!';
   header('Location: ./Automobile.php');
   } else {
      // Login fallito

      header('Location: ./login.php?error=1');
   }
} else { 
   // Le variabili corrette non sono state inviate a questa pagina dal metodo POST.
   echo 'Invalid Request';
}
?>