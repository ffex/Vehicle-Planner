<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/login.css" rel="stylesheet">
      
      <script type="text/javascript" src="js/sha512.js"></script>
<script type="text/javascript" src="js/form.js"></script>
  </head>

  <body>
      
<?php
/*if(isset($_GET['error'])) { 
   echo 'Error Logging In!';
}*/
?>
    <div class="container">

      <form class="form-signin" action="process_login.php" method="post" name="login_form">
        <h2 class="form-signin-heading">Accedi</h2>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Ricordami
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="button" value="Login" onclick="formhash(this.form, this.form.password);">Login</button>
        <p>Non sei ancora registrato? <a href="Register.php">Clicca qui</a></p>
        </form>
        

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
