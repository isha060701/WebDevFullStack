<?php      
    $host = "localhost";  
    $user = "root";  
    $password = "";  
    $db_name = "placement_db";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
    session_start();
    //$sql = "SELECT C.cname FROM Company C WHERE  C.comp_id='{$_SESSION['cmpid']}' ";
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
    background-image: url("image12.png"); 
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
            height: 100px;
      width: 50%;
        }
        td {
      height: 100px;
      width: 700px;
        }
        th{
            background-color: white;
            height: 40px;
            width: 40px
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


       
        <h1>MY COMPANY DETAILS</h1>
        <!-- TABLE CONSTRUCTION-->
        <div class="container" style="max-width:700px; margin: 10px 5px;">
        <table class="table table-hover " style="background-color:rgba(0, 0, 0, 0);">
        <!--<thead>
            <tr>
                <th scope="col">COMPANY ID</th>
                <th scope="col">COMPANY NAME</th>
                <th scope="col">OFFERING</th>
                <th scope="col">ROLE</th>
                <th scope="col">CTC(PACKAGE)</th>
                <th scope="col">INTERNSHIP STIPEND</th>
                <th scope="col">CGPA CRITERIA</th>
                <th scope="col">10TH PERCENTAGE CRITERIA</th>
                <th scope="col">12TH PERCENTAGE CRITERIA</th>
                <th scope="col">BACKLOGS CRITERIA</th>

            </tr>
        </thead>-->
        <tbody>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php  
           $sql = "SELECT C.comp_id,C.cname, C.offering, C.role,C.ctc_package,
           C.internship_info,C.cgpa_crit,C.tenth_per_crit,
           C.twelfth_per_crit,C.backlogs FROM Company C 
           WHERE  C.comp_id='{$_SESSION['cmpid']}' ";

           //echo $_SESSION['cmpid'];
           $result = mysqli_query($con, $sql);   
           $count = mysqli_num_rows($result);  
           //echo "number of rows found= ".$count;
                while($rows = mysqli_fetch_array($result, MYSQLI_ASSOC))
                {
             ?>

            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <tr>
                <th scope="col">COMPANY ID</th>
                <td><?php echo $rows['comp_id'];?></td>
                </tr>
                <tr>
                <th scope="col">COMPANY NAME</th>
                <td><?php echo $rows['cname'];?></td>
                </tr>
                <tr>
                <th scope="col">OFFERING</th>
                <td><?php echo $rows['offering'];?></td>
                </tr>
                <tr>
                <th scope="col">ROLE</th>

                <td><?php echo $rows['role'];?></td>
                </tr>
                <tr>
                <th scope="col">CTC(PACKAGE)</th>

                <td><?php echo $rows['ctc_package'];?></td>
                <tr>
                <th scope="col">INTERNSHIP STIPEND</th>
                <td><?php echo $rows['internship_info'];?></td>
                </tr>
                <tr>
                <th scope="col">CGPA CRITERIA</th>

                <td><?php echo $rows['cgpa_crit'];?></td>
                </tr>
                <tr>
                <th scope="col">10TH PERCENTAGE CRITERIA</th>

                <td><?php echo $rows['tenth_per_crit'];?></td>
                </tr>
                <tr>
                <th scope="col">12TH PERCENTAGE CRITERIA</th>

                <td><?php echo $rows['twelfth_per_crit'];?></td>
                </tr>
                <tr>
                <th scope="col">BACKLOGS CRITERIA</th>

                <td><?php echo $rows['backlogs'];?></td>
                </tr>


            </tr>
            <?php
                }
                $con->close();
             ?>
             </tbody>
        </table>
     </div>       
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
  crossorigin="anonymous"></script>
</body>
  
</html>