<?php
/*
	$servername = "127.0.0.1"; 
	$username = "root";
	$password = ""; 
	$database = "placement_db";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);


echo '<h1>My Web Page</h1>';

echo '<div id="piechart"></div>';

echo '<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load("current", {"packages":["corechart"]});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ["Department", "Count"],</script>';


//echo 'a';

	
	$sql = "select s.dept_name, count(*)
from applies a,student s
where a.usn=s.usn
group by s.dept_name" ;
           $result = mysqli_query($conn, $sql);   
           $count = mysqli_num_rows($result);  
         // echo "number of rows found= ".$count;
		 // echo 'a';
                while($rows = mysqli_fetch_array($result, MYSQLI_ASSOC))
                {
            // echo $rows['dept_name'];
$dname=$rows['dept_name'];
$cnt=$rows['count(*)'];
                 // echo '['; $rows['dept_name'] echo','; $rows['count(*)'] echo'],';
				 //echo '<script>[</script>'; echo $rows['dept_name']; echo'<script>,</script>'; echo $rows['count(*)']; echo'<script>],</script>';
				 echo "<script>[  '<?php echo $dname; ?>' , '<?php echo $cnt; ?>' ],</script>";
				
				}
				echo '<script>]);
				
				
				  var chart = new google.visualization.PieChart(document.getElementById("piechart"));
  chart.draw(data, options);
}
</script>';
				  ?>
           
               
				
				
				
				<?php
				
				
				$conn->close();
				exit;
				
				
				*/
				 ?>
				 
				 
<?php
 $host = "localhost";  
    $user = "root";  
    $password = "";  
    $db_name = "placement_db";  
      
    $con = mysqli_connect($host, $user, $password, $db_name); 
?>
<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
 
<!-- 
 <style>
 body {

background-image: linear-gradient(to right, #ffb3b3, #b3ffb3);
}
-->

</style>
 
 
 
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
 var data = google.visualization.arrayToDataTable([

 ['Department','Count'],
 <?php 
			//$query = "SELECT * from class";
			$query = "select s.dept_name, count(*)
from applies a,student s
where a.usn=s.usn
group by s.dept_name" ;

			 $exec = mysqli_query($con,$query);
			 while($row = mysqli_fetch_array($exec)){

			 echo "['".$row['dept_name']."',".$row['count(*)']."],";
			 }
			 ?> 
 
 ]);

 var options = {
 title: 'Applications from each department (Current)',
  pieHole: 0.5,
          pieSliceTextStyle: {
            color: 'black',
          },
          legend: 'none'
 };
 var chart = new google.visualization.PieChart(document.getElementById("columnchart12"));
 chart.draw(data,options);
 }
	
    </script>
	
	
	
	
	
	
	
	
	
	
	
	<script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
 var data = google.visualization.arrayToDataTable([

 ['Department','Count'],
 <?php 
			//$query = "SELECT * from class";
			$query = "select s.dept_name, count(*)
from Offers_job o,student s
where o.usn=s.usn
group by s.dept_name" ;

			 $exec = mysqli_query($con,$query);
			 while($row = mysqli_fetch_array($exec)){

			 echo "['".$row['dept_name']."',".$row['count(*)']."],";
			 }
			 ?> 
 
 ]);

 var options = {
 title: 'Jobs offered to each department (Current)',
  pieHole: 0.5,
          pieSliceTextStyle: {
            color: 'black',
          },
          legend: 'none'
 };
 var chart = new google.visualization.PieChart(document.getElementById("columnchart121"));
 chart.draw(data,options);
 }
	
    </script>
	
	
	
	
	
	
	
	
	
	
	

</head>
<body>
 <div class="container-fluid">
 <div id="columnchart12" style="width: 100%; height: 500px;"></div>
 </div>
 
 
  <div class="container-fluid">
 <div id="columnchart121" style="width: 100%; height: 500px;"></div>
 </div>
 
 

<hr><hr>
<br><br>

<div class="container">

<p><b><h4>Previous years statistics (Average)</h4></b><p>
<img src="stats.jpeg"><hr><br><br><br>

<p><b><h4>Previous years statistics (2014-2015)</h4></b><p>
<img src="stats1.jpeg"><hr><br><br><br>

<p><b><h4>Previous years statistics (2015-2016)</h4></b><p>
<img src="stats2.jpeg"><hr><br><br><br>

<p><b><h4>Previous years statistics (2016-2017)</h4></b><p>
<img src="stats3.jpeg"><hr><br><br><br>

<p><b><h4>Previous years statistics (2017-2018)</h4></b><p>
<img src="stats4.jpeg"><hr><br><br><br>

<p><b><h4>Previous years statistics (2018-2019)</h4></b><p>
<img src="stats5.jpeg"><hr><br><br><br>

<p><b><h4>Previous years statistics (2019-2020)</h4></b><p>
<img src="stats6.jpeg"><hr><br><br><br>

</div>


</body>
</html> 
				 
				 
				 
				 
				 
				 
