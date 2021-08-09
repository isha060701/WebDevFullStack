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
	echo "Connected successfully <br>";
          
     
        $usn =  $_REQUEST['usn'];
		$res_file =  $_REQUEST['res_file'];
		//$value = file_get_contents('res_file');
		$cgpa =  $_REQUEST['cgpa'];
		$dept =  $_REQUEST['dept'];
		$name =  $_REQUEST['name'];
		$email =  $_REQUEST['email'];
		$ten_per =  $_REQUEST['ten_per'];
		$twelve_per =  $_REQUEST['twelve_per'];
        $backlogs= $_REQUEST['backlogs'];
        
          
        // Performing insert query execution
        // here our table name is college
  //    $sql = "INSERT INTO student (usn,password) VALUES ('{$usn}','{$psw}')";
	//	print($usn);
     //     $sql = "INSERT INTO student (usn,password) VALUES ('1bm','aa')";
	$result = $conn->query("update student set name='".$name."',email='".$email."',cgpa='".$cgpa."',tenth_per='".$ten_per."',twelfth_per='".$twelve_per."',dept_name='".$dept."',backlogs='".$backlogs."'
	where usn='".$usn."'");
        
			 $result = $conn->query("INSERT INTO resume (usn,resume_file)
             VALUES ('".$usn."','".$res_file."')");
        $conn->close();
	exit;
?>
