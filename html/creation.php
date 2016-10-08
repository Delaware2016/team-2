
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="favicon.ico">

      <title>Accelerate Delaware</title>

      <!-- Bootstrap core CSS -->
      <link href="dist/css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom styles for this template -->
      <link href="dist/css/starter-template.css" rel="stylesheet">

      <script type="text/javascript">
      function show(shown, hidden) {
        document.getElementById(shown).style.display='block';
        document.getElementById(hidden).style.display='none';
        return false;
      }


      function redirect(){

        //document.location.href ="businesslist.html";
        //alert(document.location.href);
      }

      </script>
    </head>

    <body>

      <?php include 'navBar.php'; ?>

      <div class="container">

        <div class="starter-template">
          -USER PROFILE CREATION-
          <br>
          <br>
            <form action="creation.php" method="post">
              First Name:<br>
              <input type="text" name="firstname"><br>
              <br>
              Last Name:<br>
              <input type="text" name="lastname"><br>
              <br>
              Email Address:<br>
              <input type="email" name="email"><br>
              <br>
              Password:<br>
              <input type="Password" name="password"><br>
              <br>
              Gender:<br>
              <input type="radio" name="gender" value="male"> Male<br>
                <input type="radio" name="gender" value="female"> Female<br>
                <input type="radio" name="gender" value="other"> Other/ Prefer not to answer<br>
              Age: <br>
              <input type="number" name="age>"<br>
              <br>
              Education Level:<br>
              <input type="radio" name="edu" value="none"> No College<br>
              <input type="radio" name="edu" value="some"> Some College<br>
              <input type="radio" name="edu" value="grad"> Graduated<br>
              <br>
              <!-- make submit button send data to database and redirect user into their
              account -->
              <input type="submit" value="Submit" onclick=redirect();>
            </form>
        </div>

      </div><!-- /.container -->


      <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="js/ie10-viewport-bug-workaround.js"></script>
    </body>
  </html>
