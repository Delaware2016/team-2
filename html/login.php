<?php include 'top.php'; ?>
<?php include 'navBar.php'; ?>

      <div class="container">

        <div class="starter-template">

          <form action="creation.php" method="post">
            Username:<br>
            <input type="text" name="username"<br>
            <br>
            Password:<br>
            <input type="text" name="password"<br>
            <br>
            <!-- make submit button send data to database and redirect user into their
            account -->
            <input type="submit" value="Submit" onclick=redirect();>
          </form>
          
        </div>

      </div><!-- /.container -->

<?php include 'bottom.php' ?>
