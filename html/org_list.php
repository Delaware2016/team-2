<?php
$servername = "localhost";
$username = "root";
$password = "team2";
$dbname = "mydb";
?>

<?php include 'top.php'; ?>
<?php include 'navBar_user.php'; ?>

<div class="container">

  <div class="starter-template">
  <div class="jumbotron">
    ORGANIZATIONS LIST
		<br>
    <b> Organizations </b> | <a href= "recommended_list.html"> Recommended | </a>
		<a href= "map.php"> Map</a>

<!-- put business list here -->
	
	<?php
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		    echo "Connection failed";
		}
		
		//echo "test";
		$sql = "SELECT * FROM Organization";
		$result = $conn->query($sql);
		if($result) {
			echo "<div>";
			echo "<ul><br>";
			while($row = $result->fetch_assoc()) {
				echo "<li>";
		        echo "Name: " . $row["orgName"] . "<br>";
		        echo "Type: " . $row['orgType'] . "<br>";
		        echo "Address: " . $row["orgStreet"] . "<br>";
		        echo $row["orgCity"] . ", " . $row["orgState"] . " " .  $row["orgZip"] . "<br>";
		        //echo "<hr>";
		        echo "</li>";
	    	}
	    	echo "</ul>";
	    	echo "</div>";
	    }
		//check if worked
		else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
	?>

</div>
</div>
</div>

<?php include 'bottom.php' ?>
