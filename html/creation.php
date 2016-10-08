 <?php include 'top.php'; ?>
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

<?php include 'bottom.php' ?>
