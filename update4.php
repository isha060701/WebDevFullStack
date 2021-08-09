
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
          
     
        $id =  $_REQUEST['id'];
		$eligibility =  $_REQUEST['eligibility'];
		$backlogs =  $_REQUEST['backlogs'];
		$offering =  $_REQUEST['offering'];
		$ctc =  $_REQUEST['ctc'];
		$dept =  $_REQUEST['dept'];
		$int =  $_REQUEST['int'];
		$loc =  $_REQUEST['loc'];
		$role =  $_REQUEST['role'];
		$test =  $_REQUEST['test'];
		$link =  $_REQUEST['link'];
 
        $eligibility_ten =  $_REQUEST['eli_ten'];
        $eligibility_twelve =  $_REQUEST['eli_twelve'];
 
        
          
        // Performing insert query execution
        // here our table name is college
  //    $sql = "INSERT INTO student (usn,password) VALUES ('{$usn}','{$psw}')";
	//	print($usn);
     //     $sql = "INSERT INTO student (usn,password) VALUES ('1bm','aa')";
	$result = $conn->query("update company set cgpa_crit='".$eligibility."',backlogs='".$backlogs."',offering='".$offering."',ctc_package='".$ctc."',internship_info='".$int."',location='".$loc."',
	role='".$role."',tentative_test_date='".$test."',additional_instruction='".$link."',dname='".$dept."',tenth_per_crit='".$eligibility_ten."',twelfth_per_crit='".$eligibility_twelve."'
	where comp_id='".$id."'");
        
					// $result = $conn->query("INSERT INTO Offers_job (compid,cgpa_crit,tenth_per_crit,twelfth_per_crit)
            // VALUES ('".$usn."','".$res_id."','".$res_file."')"); 
	 
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
