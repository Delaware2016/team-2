  <?php include 'top.php'; ?>
  <?php include 'navBar_org.php'; ?>

  <div class="container">

    <div class="starter-template">
      -Create an event-
      <br>
      <b> Create An Event </b> | <a href= "your_events.html"> Your Events</a> 

      <form action="creation.php" method="post">
      Name:<br>
      <input type="text" name="name"<br>
      <br>
      Address of Event:<br>
      <input type="text" name="address"<br>
      <br>
      Free food?:<br>
      <input type="radio" name="food" value="male" checked> Yes :)<br>
      <input type="radio" name="food" value="female"> No :(<br>
      <br>
      <input type="submit" value="Submit" onclick=redirect();>
      </form>
    </div><!--starter-template-->
  </div><!--container-->

<?php include 'bottom.php' ?>