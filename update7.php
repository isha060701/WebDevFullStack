
<?php
	$host = "localhost";  
    $user = "root";  
    $password = "";  
    $db_name = "placement_db";  
      
    $con = mysqli_connect($host, $user, $password, $db_name); 



        $usn =  $_REQUEST['usn'];
        $compid = $_REQUEST['cmpid'];
        $psw = $_REQUEST['psw'];
          
      
	if ($result = $conn->query("INSERT INTO Offers_job (usn,compid)
             VALUES ('".$usn."','".$compid."')"))
			 {
	
				//echo '<script>alert("Application successful")</script>';
				
				echo '<script type="text/javascript">
    document.location="company_login.php?cmpid=' .$compid. '&psw=' .$psw. '" ;
</script>';
        //header("location: company_login.php");
				
				
	} 
	   
        // Close connection
        $conn->close();
	exit;
?>