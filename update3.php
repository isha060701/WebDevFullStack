
<?php
	$host = "localhost";  
    $user = "root";  
    $password = "";  
    $db_name = "placement_db";  
      
    $con = mysqli_connect($host, $user, $password, $db_name); 

	// Check connection
	//if ($conn->connect_error) {
	//	die("Connection failed: " . $conn->connect_error);
	//	print("<b>Awesome Failure</b>");
//	}
	echo "Connected successfully <br>";
          
     
        $cmpid =  $_REQUEST['cmpid'];
		$cmpname =  $_REQUEST['cmpname'];
        $psw_emp = $_REQUEST['psw'];
        
          
        // Performing insert query execution
        // here our table name is college
  //    $sql = "INSERT INTO student (usn,password) VALUES ('{$usn}','{$psw}')";
	//	print($usn);
     //     $sql = "INSERT INTO student (usn,password) VALUES ('1bm','aa')";
	if ($result = $conn->query("INSERT INTO company (comp_id,cname,password)
             VALUES ('".$cmpid."','".$cmpname."','".$psw_emp."')"))
			 {
				// echo "Values inserted successfully";
				echo '<script>alert("Registered successfully")</script>';
				//include 'student_details.html';
				//header('student_details.html');
				echo '<script type="text/javascript">
    document.location="company_details.php?id=' .$cmpid. '" ;
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
