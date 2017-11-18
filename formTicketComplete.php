<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
      <link rel="stylesheet" href="./css/font-awesome.min.css">

    <title>Ticket Completato</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/form.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./js/ie-emulation-modes-warning.js"></script>


<script type="text/javascript" src="./js/jquery-3.2.1.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <!-- Include Date Range Picker -->
<script type="text/javascript" src="./js/bootstrap-datepicker.min.js"></script>
      <script type="text/javascript" src="./js/bootstrap-datepicker.it.min.js"></script>
<link rel="stylesheet" href="./css/bootstrap-datepicker3.css"/>
      <script type="text/javascript" src="./js/DatePicker.js"></script>

  </head>
    <body>
    <form class="form-horizontal">
    <div class="jumbotron">    
    <h2>Completa Ticket</h2><br><br>
    <div class="container"><div class="row">
        
        <label for="inputData" class="col-md-2 control-label">Data effettuata:</label>
        <div class="col-md-2">
         <div class="input-group">
        <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>
        <input class="form-control" id="inputData" name="date" placeholder="gg/mm/aaaa" type="text" required/>
       </div>


        </div>
        <label for="inputNote" class="col-md-2 control-label">Note:</label>
        <div class="col-md-6">
            <textarea class="form-control" rows="4" id="inputNote" name="note"></textarea>
        </div>
        </div>
            <div class="row"><br>
                <div class="col-md-offset-10 col-md-2">
            <button class="btn btn-primary " type="button" value="insert" onclick="form.submit();">Inserisci</button>
            <button class="btn btn-primary " type="button" value="cancel" onclick="form.submit();">Annulla</button>
                </div></div>

        </div></div>


      
        
    </form>
    





    </body>
</html>