<!DOCTYPE html>
<html>
<head
<title>COMPANY DETAILS</title>
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
input[type=text], input[type=password],input[type=number],input[type=date],select {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password],input[type=number]:focus ,input[type=date],select{
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
<form ">
  <div class="container">
    <h1>Please fill up the details</h1>
  
    <hr>

    <label for="eligibilty"><b>Eligibility in terms of cgpa</b></label><br>
    <input type="number" step="0.01" placeholder="Enter the eligibilty in terms of CGPA" name="eligibilty" id="eligibilty" required>
<br><br>

<label for="eligibilty"><b>Eligibility in terms of 10th percentage</b></label><br>
    <input type="number" step="0.01" placeholder="Enter the eligibilty in terms of 10th percentage" name="eligibilty" id="eligibilty_ten" required>
<br><br>

<label for="eligibilty"><b>Eligibility in terms of 12th percentage</b></label><br>
    <input type="number" step="0.01" placeholder="Enter the eligibilty in terms of 12th percentage" name="eligibilty" id="eligibilty_twelve" required>
<br><br>

    <label for="backlogs"><b>Backlogs</b></label><br>
    <select name="backlogs" id="backlogs">
    <option value="Null">Null</option>
    <option value="No active backlogs">No active backlogs</option>
 
  </select>
  <br><br>
	
	<label for="offering"><b>Offering</b></label><br>
    <select name="offering" id="offering">
  <option value="Internship + Full time">Internship + Full time</option>
    <option value="Internship">Internship</option>
    <option value="Full time">Full time</option>
  </select>
  <br><br>
	
	<label for="ctc"><b>CTC</b></label><br>
    <input type="number" placeholder="Enter the CTC" name="ctc" id="ctc" required>
	<br><br>
	
	
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
	
	
	
	
	<label for="int"><b>Internship Stipend</b></label>
    <input type="number" placeholder="Enter the amount" name="int" id="int" >
	
	<label for="loc"><b>Location</b></label>
    <input type="text" placeholder="Enter the location" name="loc" id="loc" required>
	
	<label for="role"><b>Designation</b></label>
    <input type="text" placeholder="Enter the designation" name="role" id="role" required>
	
	<label for="test"><b>Tentitive test dates</b></label>
    <input type="date"  placeholder="Enter the tentitive test dates" name="test" id="test" required>
	
	<label for="link"><b>Additional instructions</b></label>
    <input type="text" placeholder="Enter the link for any additional instructions" name="link" id="link" >
	
	
    <hr>
   
    <button type="submit" class="registerbtn" onclick="validation()">SUBMIT</button>
  </div>
  
 
</form>

<script>
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("test").setAttribute("min", today);




function validation(){
    var a,b,s,t,u,v,w,y,x,z,c,d,f=0;
	s = document.getElementById("eligibilty").value; 
	t = document.getElementById("backlogs").value; 
	u = document.getElementById("offering").value; 
	v = document.getElementById("ctc").value; 
	w = document.getElementById("dept").value; 
	x = document.getElementById("int").value; 
	y=document.getElementById('loc').value;
	z=document.getElementById('role').value;
	a=document.getElementById('test').value;
	b=document.getElementById('link').value;
	c = document.getElementById("eligibilty_ten").value; 
	d = document.getElementById("eligibilty_twelve").value; 
	
	
	
	
	if (s == "" || s == null) { 
	alert("CGPA Eligibility must be filled out");  f=1;
	}

if (c == "" || c == null) { 
	alert("10 th Eligibility must be filled out");  f=1;
	}
	
	if (d == "" || d == null) { 
	alert("12 th Eligibility must be filled out");  f=1;
	}

	
	 if (t == "" || t == null) { 
	alert("Blackogs criteria must be filled"); f=1; 
	} 
	 if (u == "" || u == null) { 
	alert("Offering must be filled out");  f=1;
	} 
	 if (v == "" || v == null) { 
	alert("CTC must be filled out"); f=1; 
	} 
	 if (w == "" || w == null) { 
	alert("Department must be filled out");  f=1;
	} 
	 
	 if (y == "" || y == null) { 
	alert("Location must be filled"); f=1; 
	} 
	 if (z == "" || z == null) { 
	alert("Designation must be filled");  f=1;
	}


if (a == "" || a == null) { 
	alert("Test dates must be filled out");  f=1;
	} 
	 	
   
   if(f==1)
   return false;
   

	
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
	var id=pair[1];

	
	//document.location="update2.php?usn="+usn+"&res_id="+s+"&res_file="+t+"&cgpa="+u+"&dept="+v+"&name="+w+"&email="+x+"&ten_per="+y+"&twelve_per="+z;
//window.location="update2.php";


var e = document.getElementById("dept");
var text1 = e.options[e.selectedIndex].text;

var e = document.getElementById("dept");
//var text1 = e.options[e.selectedIndex].text;
text1=e.value;

var f = document.getElementById("backlogs");
//var text2 = f.options[e.selectedIndex].text;
text2=f.value;


var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET", "update4.php?id="+id+"&eligibility="+s+"&backlogs="+text2+"&offering="+u+"&ctc="+v+"&dept="+text1+"&int="+x+"&loc="+y+"&role="+z+"&test="+a+"&link="+b+"&eli_ten="+c+"&eli_twelve="+d , true);
    xmlhttp.send();
	
	

	
	//document.location="index.php";
	
	
	}

</script>

</body>
</html>
