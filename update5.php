<?php
	$host = "localhost";  
    $user = "root";  
    $password = "";  
    $db_name = "placement_db";  
      
    $con = mysqli_connect($host, $user, $password, $db_name); 
     
        $usn =  $_REQUEST['usn'];
        $psw = $_REQUEST['psw'];
        
          
        // Performing insert query execution
        // here our table name is college
  //    $sql = "INSERT INTO student (usn,password) VALUES ('{$usn}','{$psw}')";
	//	print($usn);
     //     $sql = "INSERT INTO student (usn,password) VALUES ('1bm','aa')";
	$result = $conn->query("SELECT * from student where usn= '{$usn}'  ");
	if ($result->num_rows == 0)
			 {
				echo '<script>alert("Not yet registered")</script>';
				//include 'student_details.html';
				//header('student_details.html');
				echo '<script type="text/javascript">
    document.location="index.php" ;
</script>';
			
				
	} 
	$result=$conn->query("SELECT password from student where usn= '{$usn}'  ");
	$row = mysqli_fetch_assoc($result);
	//echo  $row["password"];
	if(!($row["password"]==$psw)){
		echo '<script>alert("Incorrect password")</script>';
		echo '<script type="text/javascript">
    document.location="index.php" ;
	</script>';}
	
	
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
        	background-image: url("image21.jpg"); 
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
		    height: 80px;
		}
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
      <li class="active"><a href="">Home</a></li>
      <li ><a href='javascript: document.location="see_stuDetails.php?usn="+usn+"&psw="+psw'>My details</a></li>
      <li><a href='javascript: document.location="see_allCompanies.php?usn="+usn+"&psw="+psw'>See all companies</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href='javascript: document.location="index.php"'><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>





<div class='container'>
    <section>
        <h1>ELIGIBLE JOBS</h1><br>
        <!-- TABLE CONSTRUCTION-->
        <table class="table table-hover table-bordered " style="background-color:rgba(0, 0, 0, 0);">
        	<thead>
            <tr>
                <th scope="col" style="text-align: center;">COMPANY NAME</th>
                <th scope="col" style="text-align: center;">PROFILE NAME</th>
                <th scope="col" style="text-align: center;">TENTATIVE TEST DATE</th>
                <th scope="col" style="text-align: center;">CTC (IN LPA)</th>
				<th scope="col" style="text-align: center;">OFFERING</th>
				<th scope="col" style="text-align: center;">INTERNSHIP STIPEND</th>
				<th scope="col" style="text-align: center;">LOCATION</th>
				<th scope="col" style="text-align: center;">ADDITIONAL INSTRUCTIONS</th>
				<th scope="col" style="text-align: center;">APPLICATION STATUS</th>
            </tr>
            </thead>
            <tbody>

            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php  
			
			
			
			
				$result1=$conn->query("select backlogs from student where usn= '{$usn}'  ");
	$row1 = mysqli_fetch_assoc($result1);
	//echo  $row["password"];
	if($row1["backlogs"]=="Null")
	{	
           $sql = "SELECT C.comp_id,C.cname,C.role, C.tentative_test_date, C.ctc_package,C.offering,C.internship_info,C.location,C.additional_instruction FROM Company C , Student S
           WHERE  S.usn='$usn' AND S.cgpa>=C.cgpa_crit AND S.dept_name=C.dname AND S.tenth_per>=C.tenth_per_crit AND S.twelfth_per>=C.twelfth_per_crit";//AND C.backlogs=S.backlogs" ;
           $result = mysqli_query($conn, $sql);   
           $count = mysqli_num_rows($result);  
         // echo "number of rows found= ".$count;
                while($rows = mysqli_fetch_array($result, MYSQLI_ASSOC))
                {
             ?>
<?php $flag=0;
$flag2=0;
?>

            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->					
					
					<?php
		$result2 = $conn->query("SELECT * from applies where usn= '{$usn}' and compid= '{$rows['comp_id']}' ");
	if ($result2->num_rows == 0)
			 $flag=1;
		 
		 
		 $result3 = $conn->query("SELECT * from Offers_job where usn= '{$usn}' and compid= '{$rows['comp_id']}' ");
	if ($result3->num_rows == 0)
			 $flag2=1;
		 
		?>
		
                <td><?php echo $rows['cname'];?></td>
                <td><?php echo $rows['role'];?></td>
                <td><?php echo $rows['tentative_test_date'];?></td>
                <td><?php echo $rows['ctc_package'];?></td>
				<td><?php echo $rows['offering'];?></td>
                <td><?php echo $rows['internship_info'];?></td>
                <td><?php echo $rows['location'];?></td>
                <td><?php echo $rows['additional_instruction'];?></td>
				<?php if($flag==1){ ?>
                <td><button class="button" id="button" onclick="apply(<?php echo $rows['comp_id']; ?>)">Apply</button></td>
				<?php } else { ?>
				<td><button class="button" id="button" disabled>Applied</button></td>
				<?php } ?>
				
				<?php if($flag2==1&&$flag==0){ ?>
                <td>Pending</button></td>
				<?php } else { ?>
				<td>Accepted</button></td>
				<?php } ?>
				
            </tr>
			
            <?php
                }
	}
	
	
	
	
	
	if($row1["backlogs"]=="No active backlogs")
	{
			
					
			
           $sql = "SELECT C.comp_id,C.cname,C.role, C.tentative_test_date, C.ctc_package,C.offering,C.internship_info,C.location,C.additional_instruction FROM Company C , Student S
           WHERE  S.usn='$usn' AND S.cgpa>=C.cgpa_crit AND S.dept_name=C.dname AND S.tenth_per>=C.tenth_per_crit AND S.twelfth_per>=C.twelfth_per_crit AND C.backlogs=S.backlogs" ;
           $result = mysqli_query($conn, $sql);   
           $count = mysqli_num_rows($result);  
         //  echo "number of rows found= ".$count;
                while($rows = mysqli_fetch_array($result, MYSQLI_ASSOC))
                {
             ?>

<?php $flag=0;
$flag2=0;
?>

            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->					
					
					
					<?php
		$result2 = $conn->query("SELECT * from applies where usn= '{$usn}' and compid= '{$rows['comp_id']}' ");
	if ($result2->num_rows == 0)
			 $flag=1;
		 
		 
		 $result3 = $conn->query("SELECT * from Offers_job where usn= '{$usn}' and compid= '{$rows['comp_id']}' ");
	if ($result3->num_rows == 0)
			 $flag2=1;
		 
		?>
                <td><?php echo $rows['cname'];?></td>
                <td><?php echo $rows['role'];?></td>
                <td><?php echo $rows['tentative_test_date'];?></td>
                <td><?php echo $rows['ctc_package'];?></td>
				<td><?php echo $rows['offering'];?></td>
                <td><?php echo $rows['internship_info'];?></td>
                <td><?php echo $rows['location'];?></td>
                <td><?php echo $rows['additional_instruction'];?></td>
				<?php if($flag==1){ ?>
                <td><button class="button" id="button" onclick="apply(<?php echo $rows['comp_id']; ?>)">Apply</button></td>
				<?php } else { ?>
				<td><button class="button" id="button" disabled>Applied</button></td>
				<?php } ?>
				
				<?php if($flag2==1&&$flag==0){ ?>
                <td>Pending</button></td>
				<?php } else { ?>
				<td>Accepted</button></td>
				<?php } ?>
				
            </tr>
			
            <?php
                }
	}
	

               // $conn->close();
				//exit;
             ?>
        </table>
    </section>
	</div>
	<script>
	function apply(id)
	{
		
var usn = '<?php echo $usn ;?>';
var psw = '<?php echo $psw ;?>';
	document.location="update6.php?usn="+usn+"&compid="+id+"&psw="+psw ;
	
    document.getElementById("button").disabled = true;	
	
	}
	
	
	
	
	
	
	
	</script>
	
	<?php
                $conn->close();
				exit;
             ?>
	
</body>
  
</html>	
