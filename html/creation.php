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

	$sql = "INSERT INTO User (userID, username, password, userType) VALUES (DELAULT, $_POST['username'], $_POST['password'], 0)";
	$userID = "SELECT userID FROM User ON (username = $_POST['username'])";
	$userID = $conn->query($userID);
	$sql2 = "INSERT INTO Person (userID, locationZip, age) VALUES ($userID, , $_POST['age'])";
	//note also need to insert into Person/Organization
	$result = $conn->query($sql);



	if ($result) {
	    echo "Success!`";

	    while ($row = $result->fetch_assoc()) {
	    	echo "in!";
		    echo " id = " . $row['userID'] . "\n";
		}
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();


?>

<html>
<body>

	Your first name is: <?php echo $_POST["firstname"]; ?><br>
	Your last name is: <?php echo $_POST["lastname"]; ?>




</body>
</html> 
