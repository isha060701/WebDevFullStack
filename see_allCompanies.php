
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

    
    background-image: url("image26.png"); 
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
      <li><a href='javascript: document.location="see_stuDetails.php?usn="+usn+"&psw="+psw'>My details</a></li>
      <li class="active"><a href="">See all companies</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href='javascript: document.location="index.php"'><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>




<div class='container'>

    <section>
        <h1>List of all companies</h1><br>
        <!-- TABLE CONSTRUCTION-->
        <table class="table table-hover table-bordered " style="background-color:rgba(0, 0, 0, 0);">
          <thead>
            <tr>
                <th scope="col" style="text-align: center;">COMPANY NAME</th>
                <th scope="col" style="text-align: center;">DEPARTMENT NAME</th>
                <th scope="col" style="text-align: center;">ROLE</th>
                <th scope="col" style="text-align: center;">CGPA CRITERIA</th>
				<th scope="col" style="text-align: center;">10th PRECENTAGE CRITERIA</th>
				<th scope="col" style="text-align: center;">12th PERCENTAGE CRITERIA</th>
				<th scope="col" style="text-align: center;">OFFERING</th>
				<th scope="col" style="text-align: center;">BACKLOGS</th>
				<th scope="col" style="text-align: center;">CTC</th>
				<th scope="col" style="text-align: center;">INTERNSHIP STIPEND</th>
				<th scope="col" style="text-align: center;">LOCATION</th>
            </tr>
</thead>
<tbody>

            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php  
			
			
			
			
           $sql = "SELECT  cname,dname,role,cgpa_crit,tenth_per_crit,twelfth_per_crit,offering,backlogs ,ctc_package,internship_info,location  FROM  company";
 
           $result = mysqli_query($conn, $sql);   
           $count = mysqli_num_rows($result);  
         // echo "number of rows found= ".$count;
                while($rows = mysqli_fetch_array($result, MYSQLI_ASSOC))
                {
					
					
					
             ?>


            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->					
					
			
		
                <td><?php echo $rows['cname'];?></td>
                <td><?php echo $rows['dname'];?></td>
                <td><?php echo $rows['role'];?></td>
                <td><?php echo $rows['cgpa_crit'];?></td>
				<td><?php echo $rows['tenth_per_crit'];?></td>
                <td><?php echo $rows['twelfth_per_crit'];?></td>
                <td><?php echo $rows['offering'];?></td>
                <td><?php echo $rows['backlogs'];?></td>
				<td><?php echo $rows['ctc_package'];?></td>
				<td><?php echo $rows['internship_info'];?></td>
				<td><?php echo $rows['location'];?></td>
				
            </tr>
			
            <?php
                }
	?>
	
	</tbody>
        </table>
    </section>
	
</div>
	
	

	<?php
                $conn->close();
				exit;
             ?>
	
</body>
  
</html>	
	 
	 
	 


