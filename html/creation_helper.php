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
		$sql = "INSERT INTO User (password, email, userType) VALUES (\"" . $_POST['password'] . "\", \"" . $_POST['email'] . "\", 0)";
		//echo "<hr>". $sql . "<hr>";
		
		$result = $conn->query($sql);

		//check if worked
		if ($result) {
		    // echo "Success!";

		 //    while ($row = $result->fetch_assoc()) {
		 //    	echo "<hr>";
			//     echo " userID = " . $row['userID'] . "<br>";
			// }
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		

		// echo "<br>BEFOER";
		$userIDsql = "SELECT userID FROM User WHERE (email = \"" . $_POST['email'] . "\")"; //get userid so can put rest of info in person
		// echo "<br>TEST<br>";
		
		$result = $conn->query($userIDsql);
		if ($result) {
		    // echo "Success!";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$result = $result->fetch_assoc();
		$userID = $result['userID'];
		//check if worked
		// echo "<b>" . $userID . "</b>";
		
		// echo "test";
		$age = $_POST['age'];
		// echo $age . "<br>";
		$name = $_POST['firstname'] . " " . $_POST['lastname'];
		// echo $name . "<br>";

		$sql2 = "INSERT INTO Person (userID, locationZip, age, name) VALUES (" . $userID . ", 1, " . $age . ", \"" . $name . "\")";
			//change zip to field once it's added
			//insert rest of info in Person
		
		$result = $conn->query($sql2);
		// echo $result . "<br>";
		if ($result) {
		    // echo "Success!";
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