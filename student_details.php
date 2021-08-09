<!DOCTYPE html>
<html>
<head>
<title>STUDENT DETAILS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
			integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password],input[type=number],select {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus ,input[type=number]:focus,select{
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
<br><br>
<form name="form" method="post" action="resume.php" enctype="multipart/form-data">
  <div class="container">
    <h1>Fill up your details</h1>
  
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
	
	<label for="ten"><b>10th percentage</b></label>
    <input type="number" step="0.01" placeholder="Enter your 10th percentage" name="ten_per" id="ten_per" required>
	
	<label for="twelve"><b>12th percentage</b></label>
    <input type="number" step="0.01" placeholder="Enter your 12th percentage" name="twelve_per" id="twelve_per" required>
	
	<label for="cgpa"><b>CGPA</b></label>
    <input type="number" step="0.01" placeholder="Enter your CGPA" name="cgpa" id="cgpa" required>
	
	<label for="dept"><b>Department</b></label><br>
    <select name="dept" id="dept">
    <option value="Computer Science and Engineering">Computer Science and Engineering</option>
    <option value="Information Science and Engineering">Information Science and Engineering</option>
    <option value="Civil Engineering">Civil Engineering</option>
	<option value="Electronics and Instrumentation Engineering">Electronics and Instrumentation Engineering</option>
	<option value="Mechanical Engineering">Mechanical Engineering</option>
	<option value="Bio-Technology">Bio-Technology</option>
	<option value="Medical Electronics">Medical Electronics</option>
	<option value="Industrial Engineering and Management">Industrial Engineering and Management</option>
	<option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
	<option value="Aerospace Engineering">Aerospace Engineering</option>
	<option value="Chemical Engineering">Chemical Engineering</option>
	<option value="Electronics and Telecommunication Engineering">Electronics and Telecommunication Engineering</option>
	<option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
	
  </select>
  <br><br>
  
  
    <label for="backlogs"><b>Backlogs</b></label><br>
    <select name="backlogs" id="backlogs">
    <option value="Null">Null</option>
    <option value="No active backlogs">No active backlogs</option>
    <option value="Has active backlogs">Has active backlogs</option>
  </select>
  <br><br>
  
	
	
	<label for="res_file"><b>Resume</b></label><br>
    <input type="file" placeholder="Upload your resume file" name="res_file" id="res_file" required>
	
	
	
    <hr>
   
    <button type="submit" name="submit" class="registerbtn" onclick="validation()" name="submit">SUBMIT</button>
  </div>
  
</form>




<?php
	/*
	$servername = "127.0.0.1"; 
	$username = "root";
	$password = ""; 
	$database = "placement_db";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);
	if (isset($_POST['submit'])) { // if submit button on the form is clicked
    // name of the uploaded file
   $filename = $_FILES['res_file']['resume_file'];
  // $filename = $_FILES[0].name;

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['res_file']['tmp_name'];
    $size = $_FILES['res_file']['size'];
	
	echo $usn = "<script>document.write(usn)</script>";
	echo $res_id = "<script>document.write(res_id)</script>";
	
	

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['res_file']['size'] > 5000000) { // file shouldn't be larger than 5Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO resume (resume_file,usn,resumeid) VALUES ('$filename','$usn','$res_id')";
			
		//	$result = $conn->query("INSERT INTO resume (usn,resumeid,resume_file)
       //      VALUES ('".$usn."','".$res_id."','".$res_file."')");
	 
			
			
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}




      $conn->close();
	exit;
	
	*/
?>





<script>
function validation(){
    var r,t,u,v,w,y,x,z,result,f=0;

	t = document.getElementById("res_file").value; 
	u = document.getElementById("cgpa").value; 
	v = document.getElementById("dept").value; 
	w = document.getElementById("name").value; 
	x = document.getElementById("email").value; 
	y=document.getElementById('ten_per').value;
	z=document.getElementById('twelve_per').value;
	r=document.getElementById('backlogs').value;
	 
	result=x.match('[a-z]+.[a-z][a-z][0-9][0-9]@bmsce.ac.in');
	
	
	//var text = v.options[v.selectedIndex].text;
	
	

	 if (t == "" || t == null) { 
	alert("Please upload your resume file"); f=1; 
	} 
	 if (u == "" || u == null) { 
	alert("CGPA must be filled out");  f=1;
	} 
	 if (v == "" || v == null) { 
	alert("Department must be filled out"); f=1; 
	} 
	 if (w == "" || w == null) { 
	alert("Name must be filled out");  f=1;
	} 
	 if (x == "" || x == null) { 
	alert("Email must be filled out"); f=1;
	} 
	 if (y == "" || y == null) { 
	alert("10th percentage enter your password"); f=1; 
	} 
	 if (z == "" || z == null) { 
	alert("12th percentage must be filled out");  f=1;
	} 
	
	if (r == "" || r == null) { 
	alert("Backlogs must be filled out");  f=1;
	} 
   
   if(f==1)
   return false;
   
   
  
	if(x!=result){
		alert("Enter a valid email");
	return false;}
	
	//window.location="student_details.html";
	//document.location="update1.php";
/*	var data = new FormData();
     data.append('usn',z );
      data.append('psw',y );
	  var xhr = new XMLHttpRequest();
  xhr.open('POST', "update1.php");
  xhr.onload = function () {
    console.log(this.response);
  };
  xhr.send(data);
  document.location="update1.php";*/
  
  
 /* var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET", "update1.php?usn=" +z+"&psw="+y, true);
    xmlhttp.send();*/
	
	var urlString= window.location.href;
//document.write(urlString);
var paramString = urlString.split('?')[1];
              
            var params_arr = paramString.split('&');
          
          
                  
                var pair = params_arr[0].split('=');
                  
              //  document.write("Key is:" + pair[0]);
               // document.write("Value is:" + pair[1]);
	var usn=pair[1];

	
	//document.location="update2.php?usn="+usn+"&res_id="+s+"&res_file="+t+"&cgpa="+u+"&dept="+v+"&name="+w+"&email="+x+"&ten_per="+y+"&twelve_per="+z;
//window.location="update2.php";

var e = document.getElementById("dept");
//var text1 = e.options[e.selectedIndex].text;
text1=e.value;

var f = document.getElementById("backlogs");
//var text2 = f.options[e.selectedIndex].text;
text2=f.value;



var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET", "update2.php?usn="+usn+"&res_file="+t+"&cgpa="+u+"&dept="+text1+"&name="+w+"&email="+x+"&ten_per="+y+"&twelve_per="+z+"&backlogs="+text2, true);
    xmlhttp.send();
	
	

	
	//document.location="index.php";
	
	
	}
	

</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
	integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
	crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
	crossorigin="anonymous"></script>










</body>
</html>
