<?php
//phpinfo();


    // method declaration
    function printInfoAuto($id_utente) {
        include "DB_Conn.php";
    if(isset($_GET['idauto']))
        $idauto=$_GET['idauto'];
        else{
                $sql = 'SELECT ID_auto FROM Utenti_Auto WHERE ID_User=:idutente';
    
    $stmt = $db->prepare($sql);
        $stmt->bindParam(':idutente',$id_utente);
    $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $idauto=$row['ID_auto'];
    }
    
    $sql = 'SELECT * FROM Automobili WHERE ID=:id';
    
    $stmt = $db->prepare($sql);
        $stmt->bindParam(':id',$idauto);
    $stmt->execute();
    
        
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
        //da fare la stampa con bootstrap! :D
      echo '<div class="row">
      <p><i>Marca: </i><b>' . $row['Marca'] . '</b></p>
      <p><i>Modello: </i>' . $row['Modello'] . '</p>
      <p><i>Targa: </i>'. $row['Targa'] . '</p>
      <p><i>Data di immatricolazione: </i>'. $row['Data_immatricolazione'] . '</p>
      <p><i>Descrizione: </i>'. $row['Descrizione'] . '</p>
      </div>';
        
    $db = null;    
        //fine connessione
    }
function printMenu($id_utente){
    include "DB_Conn.php";
    
    $sql = 'SELECT  Automobili.ID, Marca, Modello ' . 
        'FROM Automobili INNER JOIN Utenti_Auto ON Automobili.ID = Utenti_Auto.ID_Auto ' .
        'WHERE Utenti_Auto.ID_user= :iduser';
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':iduser', $id_utente);
    $stmt->execute(); // esegue la query appena creata.
               echo '<ul class="nav nav-sidebar">';
   if(isset($_GET['idmenu']))
       $idmenu=$_GET['idmenu'];
    else
        $idmenu=1;
    
    $i=1;

    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        if($i==$idmenu){
            echo '<li class="active"><a href="?idmenu='.$i.'&idauto='.$row['ID'].'">' .$row['Marca'] . ' ' .  $row['Modello'] . '</a></li>';
        }else{
            echo '<li><a href="?idmenu='.$i.'&idauto='.$row['ID'].'">' .$row['Marca'] . ' ' .  $row['Modello'] . '</a></li>';
        }
     $i++;   
    }
    $db =null;
    
            echo '</ul>';   
    echo '<ul class="nav nav-sidebar">';
            if($i==$idmenu){
            echo '<li class="active"><a href="?idmenu='.$i.'">Impostazioni</a></li>';
        }else{
            echo '<li><a href="?idmenu='.$i.'">Impostazioni</a></li>';
        }
    $i++;
       if($i==$idmenu){
            echo '<li class="active"><a href="?idmenu='.$i.'">Profilo</a></li>';
        }else{
            echo '<li><a href="?idmenu='.$i.'">Profilo</a></li>';
        }
    $i++;
       if($i==$idmenu){
            echo '<li class="active"><a href="?idmenu='.$i.'">Esci</a></li>';
        }else{
            echo '<li><a href="logout.php">Esci</a></li>';
        }
    echo '</ul>';
    
}



?>