<?php

        //connessione
        //sarebbe il caso aprire la connessione e chiuderla una volta morta la classe...
        //http://www.html.it/pag/64425/connessione-a-mysql-con-pdo/ qua c'è anche un modo per mettere la connessione in cache se serve...
        try {
    $hostname = "localhost";
    $dbname = "Manutenzione";
    $user = "root";
    $pass = "sy5Sl@v32//2";
    $db = new PDO ("mysql:host=$hostname;dbname=$dbname", $user, $pass);
    } catch (PDOException $e) {
       echo "Errore: " . $e->getMessage();
       die();
    }
    //fine connessione

?>