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
	//echo "Connected successfully <br>";
          
     
        $usn =  $_REQUEST['usn'];
		$psw =  $_REQUEST['psw'];
      
   
	
	$result=$conn->query("select name from student where usn= '{$usn}'  ");
	$row = mysqli_fetch_assoc($result);
	$name=$row["name"];
	
	
	
?>	




<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title>Student User Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
    	body 
    { 

    
    background-image: url("image32.png"); 
    background-repeat: no-repeat; 
    background-attachment: fixed; 
    background-size: 100% 100%; 
    } 
        table {
        	opacity: .9;
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
			width: 1400px;
        }
  
        h1 {
            text-align: center;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            
            border: 1px solid black;
			height: 100px;
			width: 100px;
        }
		
		th{
			background-color: white;
		    height: 80px;}
		    table.table-bordered > thead > tr > th{
    border:1px solid black;
}
table.table-bordered > tbody > tr > td{
    border:1px solid black;
}
  
		
    </style>
	
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	
</head>
<body>


<script>
var usn = '<?php echo $usn ;?>';
var psw = '<?php echo $psw ;?>';
</script>



<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?php echo "$name"?></a>
    </div>
    <ul class="nav navbar-nav">
      <li> <a href='javascript: document.location="update5.php?usn="+usn+"&psw="+psw'>Home</a></li>
      <li class="active"><a href="">My details</a></li>
      <li><a href='javascript: document.location="see_allCompanies.php?usn="+usn+"&psw="+psw'>See all companies</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href='javascript: document.location="index.php"'><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>





<div class='container' style="margin:10px 50px;">
    <section>
        <h1>MY DETAILS</h1><br>
        <!-- TABLE CONSTRUCTION-->
        <table class="table table-hover table-bordered " style="background-color:rgba(0, 0, 0, 0);">
        	<thead>
            <tr >
                <th scope="col" style="text-align: center;">USN</th>
                <th scope="col" style="text-align: center;">NAME</th>
                <th scope="col" style="text-align: center;">EMAIL</th>
                <th scope="col" style="text-align: center;">CGPA</th>
				<th scope="col" style="text-align: center;">10th PRECENTAGE</th>
				<th scope="col" style="text-align: center;">12th PERCENTAGE</th>
				<th scope="col" style="text-align: center;">DEPARTMENT</th>
				<th scope="col" style="text-align: center;">BACKLOGS</th>
				<th scope="col" style="text-align: center;">RESUME</th>
            </tr>
</thead>
<tbody>


            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php  
			
			
			
			
           $sql = "SELECT  S.usn,name,email,cgpa,tenth_per,twelfth_per,dept_name,backlogs ,resume_file  FROM  Student S,Resume R
           WHERE  S.usn='$usn' AND R.usn='$usn'";
           $result = mysqli_query($conn, $sql);   
           $count = mysqli_num_rows($result);  
         // echo "number of rows found= ".$count;
                while($rows = mysqli_fetch_array($result, MYSQLI_ASSOC))
                {
					
					
					
             ?>


            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->					
					
			
		
                <td><?php echo $rows['usn'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['cgpa'];?></td>
				<td><?php echo $rows['tenth_per'];?></td>
                <td><?php echo $rows['twelfth_per'];?></td>
                <td><?php echo $rows['dept_name'];?></td>
                <td><?php echo $rows['backlogs'];?></td>
				<td><a href="download.php?usn=<?php echo $rows['usn'] ?>">Download PDF</a></td>
				
				
            </tr>
			
            <?php
                }
	?>
	
	
        </table>
    </section>
	

</div>	

	<?php
                $conn->close();
				exit;
             ?>
	
</body>
  
</html>	
