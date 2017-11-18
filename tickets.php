<!DOCTYPE html>
<html lang="it">
<head>
  <title>Tickets</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h1>Tickets</h1>
    <p>Pagina che contiene le operazioni di manutenzione da effettuare (o già effettuate) dei tuoi veicoli.</p><p> Tramite i filtri è possibile scegliere quali di queste operazioni visualizzare.</p>
  <div class="well"><h2>Filtri</h2>
      <br><br>
      <form class="form-horizontal">
    <div class="container"><div class="row">
        <!--
filtra per targa combobox, tutte
filtra per completo o no, entrambi combobox
filtra per nome ticket text
filtra per mese combobox

dafault:
non completi
tutte le auto
tutti i ticket
-->
        
        </div></div>
        </form>
  <p>The .table-hover class enables a hover state on table rows:</p></div>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th class="col-md-2">Nome Ticket</th>
        <th class="col-md-2">Data</th>
          <th class="col-md-1">Completato</th>
          <th class="col-md-2">Data completamento</th>
        <th class="col-md-5">Azioni</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>