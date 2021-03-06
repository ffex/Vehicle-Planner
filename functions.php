<?php
function sec_session_start() {
        $session_name = 'sec_session_id'; // Imposta un nome di sessione
        $secure = false; // Imposta il parametro a true se vuoi usare il protocollo 'https'.
        $httponly = true; // Questo impedirà ad un javascript di essere in grado di accedere all'id di sessione.
        ini_set('session.use_only_cookies', 1); // Forza la sessione ad utilizzare solo i cookie.
        $cookieParams = session_get_cookie_params(); // Legge i parametri correnti relativi ai cookie.
        session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly); 
        session_name($session_name); // Imposta il nome di sessione con quello prescelto all'inizio della funzione.
        session_start(); // Avvia la sessione php.
        session_regenerate_id(); // Rigenera la sessione e cancella quella creata in precedenza.
}

function login($email, $password, $db) {
   // Usando statement sql 'prepared' non sarà possibile attuare un attacco di tipo SQL injection.
   if ($stmt = $db->prepare("SELECT id, username, password, salt FROM members WHERE email = :email LIMIT 1")) { 
      $stmt->bindParam(':email', $email, PDO::FETCH_ASSOC); // esegue il bind del parametro '$email'.
      $stmt->execute(); // esegue la query appena creata.

       $row=$stmt->fetch(PDO::FETCH_ASSOC);
       $user_id=$row['id'];
       $username=$row['username'];
       $db_password=$row['password'];
       $salt=$row['salt'];

      $password = hash('sha512', $password.$salt); // codifica la password usando una chiave univoca.

      if($stmt->rowCount() == 1) { // se l'utente esiste

         // verifichiamo che non sia disabilitato in seguito all'esecuzione di troppi tentativi di accesso errati.
         if(checkbrute($user_id, $db) == true) { 
            // Account disabilitato
            // Invia un e-mail all'utente avvisandolo che il suo account è stato disabilitato.

            return false;
         } else {
         if($db_password == $password) { // Verifica che la password memorizzata nel database corrisponda alla password fornita dall'utente.

            // Password corretta!            
               $user_browser = $_SERVER['HTTP_USER_AGENT']; // Recupero il parametro 'user-agent' relativo all'utente corrente.
 
               $user_id = preg_replace("/[^0-9]+/", "", $user_id); // ci proteggiamo da un attacco XSS
               $_SESSION['user_id'] = $user_id; 
               $username = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $username); // ci proteggiamo da un attacco XSS
               $_SESSION['username'] = $username;
               $_SESSION['login_string'] = hash('sha512', $password.$user_browser);
               // Login eseguito con successo.
               return true;    
         } else {

            // Password incorretta.
            // Registriamo il tentativo fallito nel database.
            $now = time();
            $db->query("INSERT INTO login_attempts (user_id, time) VALUES ('$user_id', '$now')");
            return false;
         }
      }
      } else {

         // L'utente inserito non esiste.
         return false;
      }
   }
}
function checkbrute($user_id, $db) {
   // Recupero il timestamp
   $now = time();
   // Vengono analizzati tutti i tentativi di login a partire dalle ultime due ore.
   $valid_attempts = $now - (2 * 60 * 60); 
   if ($stmt = $db->prepare("SELECT time FROM login_attempts WHERE user_id = :user AND time > '$valid_attempts'")) { 
      $stmt->bindParam(':user', $user_id,PDO::FETCH_ASSOC); 
      // Eseguo la query creata.
      $stmt->execute();
      // Verifico l'esistenza di più di 5 tentativi di login falliti.
      if($stmt->rowCount() > 5) {
         return true;
      } else {
         return false;
      }
   }
}
function login_check($db) {
   // Verifica che tutte le variabili di sessione siano impostate correttamente
   if(isset($_SESSION['user_id'], $_SESSION['username'], $_SESSION['login_string'])) {

     $user_id = $_SESSION['user_id'];
     $login_string = $_SESSION['login_string'];
     $username = $_SESSION['username'];     
     $user_browser = $_SERVER['HTTP_USER_AGENT']; // reperisce la stringa 'user-agent' dell'utente.

     if ($stmt = $db->prepare("SELECT password FROM members WHERE id = :userid LIMIT 1")) { 
        $stmt->bindParam(':userid', $user_id); // esegue il bind del parametro '$user_id'.
        $stmt->execute(); // Esegue la query creata.
          



 
        if($stmt->rowCount() == 1) { // se l'utente esiste
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        $password=$row['password'];
           $login_check = hash('sha512', $password.$user_browser);
           if($login_check == $login_string) {
              // Login eseguito!!!!
              return true;
           } else {
              //  Login non eseguito
              return false;
           }
        } else {
            // Login non eseguito
            return false;
        }
     } else {
        // Login non eseguito
        return false;
     }
   } else {
     // Login non eseguito
     return false;
   }
}
?>
