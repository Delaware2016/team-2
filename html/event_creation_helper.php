<?php
$servername = "localhost";
$username = "root";
$password = "team2";
$dbname = "mydb";
?>


<html>
<body>
	<?php
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		    echo "Connection failed";
		} 
		
		//echo "test";
		$sql = "INSERT INTO Event (orgID, eventID, userType) VALUES (\"" . $_POST['password'] . "\", \"" . $_POST['email'] . "\", 0)";
		//echo "<hr>". $sql . "<hr>";
		
		$result = $conn->query($sql);

		//check if worked
		if ($result) {
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}





	?>
</body>
</html>

//NOT WORKING