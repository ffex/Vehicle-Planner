

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Registrazione</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/reg.css" rel="stylesheet">
      
      <script type="text/javascript" src="js/sha512.js"></script>
<script type="text/javascript" src="js/form.js"></script>
  </head>

  <body>
      

    <div class="container">
  <div class="jumbotron">
      <form class="form-horizontal" action="process_register.php" method="post" name="login_form">
        <h2 class="col-sm-offset-3">Registrati</h2>
         <div class="form-group">
             <div class="row">
        <label for="inputUsername" class="col-sm-3 control-label">Username</label>
          <div class="col-sm-8">
        <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
             </div> 
                 </div>
             <div class="row">
        <label for="inputEmail" class="col-sm-3 control-label">Email</label>
        <div class="col-sm-8">
             <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required>
             </div>
             </div>
          </div>
          <div class="form-group">
              <div class="row">
        <label for="inputPassword" class="col-sm-3 control-label">Password</label>
              <div class="col-sm-8">
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                  </div></div>
              <div class="row">
                  <label for="inputPasswordRip" class="col-sm-3 control-label">Ripeti password</label>
                  <div class="col-sm-8">
        <input type="password" name="passwordrip" id="inputPasswordRip" class="form-control" placeholder="Password" required>
          </div>
              </div></div>
          <div class="form-grop">
              <label class="col-sm-3 control-label">Sesso</label>
        <div class="col-sm-9 radio">
          <label class="radio-inline">
            <input type="radio" name="radioopt" value="male" checked> Maschio
          </label>
            
          <label class="radio-inline">
            <input type="radio" name="radioopt" value="Female"> Femmina
          </label>
        </div>
        
              </div>
          <div class="form-group">
        <div class="col-sm-offset-4 col-sm-4">
              <button class="btn btn-lg btn-primary btn-block" type="button" value="Login" onclick="formhash(this.form, this.form.password);">Registrati</button>
              </div>
              </div>
      </form>
        </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
