
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

      <script>
      function show(shown, hidden) {
        document.getElementById(shown).style.display='block';
        document.getElementById(hidden).style.display='none';
        return false;
      }

      function redirect(){

        document.location.href ="event_creation.html";
        alert(document.location.href);
      }

      </script>
    </head>

    <body>

      <nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
        <a class="navbar-brand" href="#">Accelerate Delaware</a>
        <ul class="nav navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Organizations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href= "or.html">Sign Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href= "login.html">Log In</a>
          </li>
        </ul>
      </nav>

      <div class="container">

        <div class="starter-template">
          -ORGANIZATION PROFILE CREATION-
          <br>
          <br>
            <form action="org_creation.php" method="post">
              Name:<br>
              <input type="text" name="name"><br>
              <br>
              Email Address:<br>
              <input type="email" name="email"><br>
              <br>
              Password:<br>
              <input type="Password" name="password"><br>
              <br>
              Orginization Type:<br>
              <select name="type">
                <option>--------</option>
                <option value="agr">Agriculture & Forestry/Wildlife</option>
                <option value="bus">Business & Information</option>
                <option value="con">Construction/Utilities/Contracting</option>
                <option value="edu">Education</option>
                <option value="fin">Finance & Insurance</option>
                <option value="foo">Food & Hospitality</option>
                <option value="gam">Gaming</option>
                <option value="hea">Health Services</option>
                <option value="nat">Natural Resources/Environmental</option>
                <option value="non">Non-profit</option>
                <option value="oth">Other</option>
                <option value="per">Personal Services</option>
                <option value="rea">Real Estate & Housing</option>
                <option value="saf">Safety/Security & Legal</option>
                <option value="tra">Transportation</option>
              </select>
              <br><br>
              Address:<br>
              <input type="text" name="address" value="Street Name/Number"><br>
              <input type="text" name="city" value="City"><br>
              <select name="state">
                <option>----State----</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
              </select>
              <input type="text" name="zip" value="Zip Code"><br><br>

              <!-- make submit button send data to database and redirect org into their
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