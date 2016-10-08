<?php
$servername = "localhost";
$username = "root";
$password = "team2";
$dbname = "mydb";
?>


<html>
<body>
	<?php
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Create connection
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		    echo "Connection failed";
		} 


		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$orgType = $_POST['type'];
		$streetAddr = $_POST['address'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$zip = $_POST['zip'];


		
		$sql = "INSERT INTO User (password, email, userType) VALUES (\"" . $password . "\", \"" . $email . "\", 1)";
		$result = $conn->query($sql);
		//check if worked
		if ($result) {
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		$userIDsql = "SELECT userID FROM User WHERE (email = \"" . $email . "\")";
			//get userid so can put rest of info in person
		$result = $conn->query($userIDsql);
		if (!$result) {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$result = $result->fetch_assoc();
		$userID = $result['userID'];
		
		$sql2 = "INSERT INTO Organization (orgID, orgName, orgStreet, orgCity, orgState, orgZip, orgType) VALUES (" . $userID . ", \"" . $name . "\", \"" . $streetAddr . "\", \"" . $city . "\", \"" . $state . "\", " . $zip . ", \"" . $orgType . "\")";
		$result = $conn->query($sql2);
		if ($result) {
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

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

</body>
</html> 
