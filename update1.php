
<?php
	$servername = "localhost"; /* phpMyadmin Server name on top */
	$username = "root";
	$password = ""; /* phyMyAdmin -> users -> root -> Edit -> Set password */
	$database = "placement_db";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);

	// Check connection
	//if ($conn->connect_error) {
	//	die("Connection failed: " . $conn->connect_error);
	//	print("<b>Awesome Failure</b>");
//	}
	//echo "Connected successfully <br>";
          
     
        $usn =  $_REQUEST['usn'];
        $psw = $_REQUEST['psw'];
        
          
        // Performing insert query execution
        // here our table name is college
  //    $sql = "INSERT INTO student (usn,password) VALUES ('{$usn}','{$psw}')";
	//	print($usn);
     //     $sql = "INSERT INTO student (usn,password) VALUES ('1bm','aa')";
	if ($result = $conn->query("INSERT INTO student (usn,password)
             VALUES ('".$usn."','".$psw."')"))
			 {
				// echo "Values inserted successfully";
				echo '<script>alert("Registered successfully")</script>';
				//include 'student_details.html';
				//header('student_details.html');
				echo '<script type="text/javascript">
    document.location="student_details.php?usn=' .$usn. '" ;
</script>';
				
				
	} 
	else {
		//echo "Bad Query!";
		echo '<script>alert("Already registered")</script>';
		//include 'index.php';
		
	}
	 
	 
	 
	 
//	 if ($result = $conn->query("INSERT INTO student (usn,password) VALUES ('$usn','$psw')") //{
		//echo "Values inserted successfully";
	//} 
	//else {
	//	echo "Bad Query!";
	//}
        
          
        // Close connection
        $conn->close();
	exit;
?>
