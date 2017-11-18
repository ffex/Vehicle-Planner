<?php
// Recupero la password criptata dal form di inserimento.
include 'DB_Conn2.php';
$username=$_POST['username'];
$email=$_POST['email'];
$password = $_POST['p']; 
// Crea una chiave casuale
$random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
// Crea una password usando la chiave appena creata.
$password = hash('sha512', $password.$random_salt);
// Inserisci a questo punto il codice SQL per eseguire la INSERT nel tuo database
// Assicurati di usare statement SQL 'prepared'.
if ($insert_stmt = $db->prepare("INSERT INTO members (username, email, password, salt) VALUES (:user, :email, :pass, :salt)")) {    
   $insert_stmt->bindParam(':user', $username); 
       $insert_stmt->bindParam(':email', $email); 
       $insert_stmt->bindParam(':pass', $password); 
       $insert_stmt->bindParam(':salt', $random_salt); 
   // Esegui la query ottenuta.
   $insert_stmt->execute();
    $newid=$db->lastInsertId();
    
    $db=null;
    include 'DB_Conn.php';
    $insert_stmt2= $db->prepare("INSERT INTO Utenti (ID, Username, Email) VALUES (:id, :user, :email)");
    $insert_stmt2->bindParam(':id', $newid); 
       $insert_stmt2->bindParam(':user', $username); 
       $insert_stmt2->bindParam(':email', $email); 
    $insert_stmt2->execute();
    $db=null;
header('Location: ./login.php');
}else


?>