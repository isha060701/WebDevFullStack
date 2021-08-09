<?php
$host = "localhost";  
$user = "root";  
$password = "";  
$db_name = "placement_db";  
  
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
} 
//session_start();
$sql = "SELECT C.cname FROM Company C WHERE  C.comp_id='{$_SESSION['cmpid']}' ";
$result = mysqli_query($con, $sql); 
$rows = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>
<script>
var cmpid = '<?php $_SESSION['cmpid'] ;?>';
var psw = '<?php $_SESSION['psw'] ;?>';
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?php echo $rows['cname'];?></a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href='javascript: document.location="company_login.php?cmpid="+cmpid+"&psw="+psw'>Home</a></li>
      <li ><a href="my_company_details.php">My Company Details</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="company_logout.php"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
    </ul>
  </div>
</nav>
</body>
</html>
