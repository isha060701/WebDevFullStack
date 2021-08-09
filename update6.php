
<?php
	$host = "localhost";  
    $user = "root";  
    $password = "";  
    $db_name = "placement_db";  
      
    $con = mysqli_connect($host, $user, $password, $db_name); 


          
     
        $usn =  $_REQUEST['usn'];
        $compid = $_REQUEST['compid'];
        $psw = $_REQUEST['psw'];
          
      
	if ($result = $conn->query("INSERT INTO Applies (usn,compid)
             VALUES ('".$usn."','".$compid."')"))
			 {
	
				echo '<script>alert("Application successful")</script>';
				
				echo '<script type="text/javascript">
    document.location="update5.php?usn=' .$usn. '&psw=' .$psw. '" ;
</script>';
				
				
	} 
	
	 

          
        // Close connection
        $conn->close();
	exit;
?>