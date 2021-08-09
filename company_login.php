<?php      
    $host = "localhost";  
    $user = "root";  
    $password = "";  
    $db_name = "placement_db";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    } 
	
	 $cmpid = $_REQUEST['cmpid'];  
        $psw = $_REQUEST['psw'];
	
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true) 
    {
        $cmpid_login = $_REQUEST['cmpid'];  
        $psw_emp_login = $_REQUEST['psw'];  


        $sql = "SELECT 'comp_id',cname,'password' FROM `Company` WHERE comp_id='$cmpid_login'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result); 
 

        if($count == 1){
            $login=true;
            
           // session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['cmpid']=  $cmpid_login;
            $_SESSION['cname']= $row['cname'];
            $_SESSION['psw']= $psw_emp_login;  
            echo '<script>alert("Logged in successfully")</script>';  
            //echo $usn_login." ".$psw_stu_login;  
        }
        else{  
             //$error_message="Invalid Details.Could not log in";
             echo ("<script LANGUAGE='JavaScript'>
                   window.alert('Invalid Details.Could not log in');
                   window.location.href='index.php';
                   </script>");
            }  
    } 
    else
    {
        $cmpid_login=$_SESSION['cmpid'];
        $psw_emp_login=$_SESSION['psw'];

    }
//$sql = "SELECT C.cname FROM Company C WHERE  C.comp_id='$cmpid_login' ";
//$result = mysqli_query($con, $sql); 
//$rows = mysqli_fetch_array($result, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->
    <title>Company Details</title>
<style>
        body 
        { 
            background-image: url("image7.jpg"); 
            background-repeat: no-repeat; 
            background-attachment: fixed; 
            background-size: 100% 100%; 
        } 

        h1 {
            text-align: center;
        }
        table {
            opacity: .9;
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
            width: 1400px;
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
<?php
require 'nav.php'
?>

<div class='container' style="margin:10px 55px;">
        <h1 style="color:white">STUDENT APPLICATIONS</h1>
        <!-- TABLE CONSTRUCTION-->
        <section>
        <table class="table table-hover table-bordered" style="background-color:rgba(0, 0, 0, 0);">
        <thead>
            <tr>
                <th scope="col">STUDENT NAME</th>
                <th scope="col">USN</th>
                <th scope="col">EMAIL</th>
                <th scope="col">DEPARTMENT</th>
                <th scope="col">CGPA</th>
                <th scope="col">10TH PERCENTAGE</th>
                <th scope="col">12TH PERCENTAGE</th>
                <th scope="col">BACKLOGS</th>
                <th scope="col" style="text-align: center;">RESUME</th>
				<th scope="col" style="text-align: center;">APPLICATION STATUS</th>

            </tr>
        </thead>
        <tbody>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php  
           $sql = "SELECT distinct S.name,S.usn, S.email, S.dept_name,S.cgpa,S.tenth_per,S.twelfth_per,S.backlogs,R.resume_file  FROM Company C , Student S, Applies A,Resume R
           WHERE  A.compid='$cmpid_login' AND A.usn=S.usn AND S.usn=R.usn";
           //echo $_SESSION['cmpid'];
           $result = mysqli_query($con, $sql);   
           $count = mysqli_num_rows($result);  
           //echo "number of rows found= ".$count;
                while($rows = mysqli_fetch_array($result, MYSQLI_ASSOC))
                {
             ?>
			 <?php $flag=0;?>

            <tr>
			
			
					<?php
		$result2 = $con->query("select * from Offers_job where compid= '{$cmpid_login}' and usn= '{$rows['usn']}' ");
	if ($result2->num_rows == 0)
			 $flag=1;
		?>
			
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['usn'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['dept_name'];?></td>
                <td><?php echo $rows['cgpa'];?></td>
                <td><?php echo $rows['tenth_per'];?></td>
                <td><?php echo $rows['twelfth_per'];?></td>
                <td><?php echo $rows['backlogs'];?></td>
                <td><a href="download.php?usn=<?php echo $rows['usn'] ?>">Download PDF</a></td>
				<?php if($flag==1){ ?>
                <td><button class="button" id="button" onclick="accept('<?php echo $rows['usn']; ?>')">Accept</button></td>
				<?php } else { ?>
				<td><button class="button"  disabled>Accepted</button></td>
				<?php } ?>

            </tr>
			
			<?php
                }
               
             ?>	
            
             </tbody>
        </table>
            </div>
			
			
			<script>
	function accept(usn)
	{
		//alert("a");
//var id = '<?php echo $cmpid ;?>';
//var psw = '<?php echo $psw ;?>';
var id = '<?php echo $_SESSION['cmpid'] ;?>';
var psw = '<?php echo $_SESSION['psw'] ;?>';
	document.location="update7.php?usn="+usn+"&cmpid="+id+"&psw="+psw ;
	
    document.getElementById("button").disabled = true;	
	
	}

	</script>
	<?php
                
                $con->close();
             ?>		
			
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
</body>
  
</html>
