<?php
$servername = "localhost";
$username = "root";
$password = "team2";
$dbname = "mydatabase";
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


		
		$sql = "INSERT INTO User (userID, email, password, userType) VALUES (int(20) NOT NULL AUTO_INCREMENT, " . $email . ", " . $password . ", 1)";
		//echo "<hr>". $sql . "<hr>";
		$result = $conn->query($sql);
		//check if worked
		if ($result) {
		    echo "Success!";

	    	echo "<hr>";
		    while ($row = $result->fetch_assoc()) {
			    echo " userID = " . $row['userID'] . "<br>";
			}
			echo "<hr>";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		

		
		$userIDsql = "SELECT userID FROM User ON (username = " . $username . ")";
			//get userid so can put rest of info in person
		// $result = $conn->query($userIDsql);
		// if ($result) {
		//     echo "Success!";
		// }
		//$result = $result->fetch_assoc();
		//$userID = $result['userID'];
		//check if worked
		
		//$sql2 = "INSERT INTO Person (userID, locationZip, age) VALUES (" . $userID, . " int(6) NOT NULL AUTO_INCREMENT, " . $_POST['age'] . ")";
			//change zip to field once it's added
			//insert rest of info in Person
		//$result = $conn->query($sql2);
		

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
