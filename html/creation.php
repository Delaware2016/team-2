<?php
$servername = "localhost";
$username = "root";
$password = "team2";
$dbname = "myDatabase";



	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO User (userID, username, password, userType) VALUES (int(20) NOT NULL auto_increment, $_POST['username'], $_POST['password'], 0)";
	$result = $conn->query($sql);
	//check if worked

	$userIDsql = "SELECT userID FROM User ON (username = $_POST['username'])"; //get userid so can put rest of info in person
	$result = $conn->query($userIDsql);
	$result = $result->fetch_assoc();
	$userID = $result['userID'];
	//check if worked
	
	$sql2 = "INSERT INTO Person (userID, locationZip, age) VALUES ($userID, int(6) NOT NULL auto_increment, $_POST['age'])";
		//change zip to field once it's added
		//insert rest of info in Person
	$result = $conn->query($sql2);


	/*
	if ($result) {
	    echo "Success!`";

	    while ($row = $result->fetch_assoc()) {
	    	echo "<hr>";
		    echo " userID = " . $row['userID'] . "<br>";
		}
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	*/

	$conn->close();


?>

<html>
<body>

	Your first name is: <?php echo $_POST["firstname"]; ?><br>
	Your last name is: <?php echo $_POST["lastname"]; ?>

	<?php
	echo "User ID: $userID<br>";
	echo "Username: $_POST['username']";
	?>


</body>
</html> 
