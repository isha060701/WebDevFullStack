<!DOCTYPE html> 
	<html> 
	<head> 
	<title>HOME PAGE</title> 
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
			integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	
	
	</head>
	
	<style> 
	 body{ 
    background-image: url("image9.png"); 
	background-repeat: no-repeat; 
	
	background-size: 100% 100%;
	
  height: 722px;
	} 
	
	.button { 
	border: none; 
	color: white; 
	padding: 10px 32px 10px 32px; 
	text-align: center; 
	text-decoration: none; 
	display: inline-block; 
	font-size: 16px; 
	margin: 4px 2px; 
	cursor: pointer; 
	background-color:#0033cc; 
	border-radius: 15px; 
	box-shadow: 5px 9px #3399ff;
   
	} 
	.button:hover {background-color: black} 
	#signup{
	background-color: #ddd;
  border: none;
  color: black;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  transition: 0.3s;
	}
	#signup:hover {
  background-color: #6600cc;
  color: white;
}
	#employer_login{
	display:none;
	}
	
	#employer_reg{
	display:none;
	}
	
	
	
	
	
.full-page
{
  height:100%;
  width: 100%;
  background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.4)),url(p1.jpg);
  background-position: center;
  background-size: cover;
  position: absolute;
}
	
.navbar
{
  display: flex;
  align-items: center;
  padding: 20px;
  padding-left: 50px;
  padding-right: 30px;
  padding-top: 50px;
}
nav
{
  flex: 1;
  text-align: right;
}
nav ul
{
  display: inline-block;
  list-style: none;
}
nav ul li
{
  display: inline-block;
  margin-right: 50px;
}
nav ul li a
{
  text-decoration: none;
  font-size: 22px;
  color: white;
  font-family: sans-serif;
}
nav ul li button
{
  font-size: 22px;
  color: white;
  outline: none;
  border: none;
  background: transparent;
  cursor: pointer;
  font-family: sans-serif;
}
nav ul li button:hover
{
  color: black;
}
nav ul li a:hover
{
  color:black;
}
#login-form
{
  display: none;
}
.form-box
{
  width: 380px;
  height: 480px;
  position: relative;
  margin: 2% auto;
  background: rgba(0,0,0,0.3);
  padding: 10px;
  overflow: hidden;
}
.button-box{
  width: 220px;
  margin: 35px auto;
  position: relative;
  box-shadow: 0 0 20px 9px #ff61241f;
  border-radius: 30px;
}
.toggle-btn{
  padding: 10px 30px;
  cursor: pointer;
  background: transparent;
  border: 0;
  outline: none;
  position: relative;
}
#btn{
  top: 0;
  left: 0;
  position: absolute;
  width: 110px;
  height: 100%;
  background: #F3C693;
  border-radius: 30px;
  transition: 5s;
}
.input-group-login{
  top: 150px;
  position: absolute;
  width: 280px;
  transition: .5s;
}
.input-group-register
{
  top: 120px;
  position: absolute;
  width: 280px;
  transition: .5s;
}
.input-field
{
  width: 100%;
  padding: 10px 0;
  margin: 5px 0;
  border-left: 0;
  border-top: 0;
  border-right: 0;
  border-bottom: 1px solid #999;
  outline: none;
  background: transparent;
}
.submit-btn
{
  width:85%;
  padding: 10px 0px;
  cursor: pointer;
  display: block;
  margin: auto;
  background: #F3C693;
  border: 0;
  outline: none;
  border-radius: 30px;
}
.check-box
{
  margin: 30px 10px 34px 0;
}
span
{
  color: #777;
  font-size: 12px;
  bottom: 68px;
  position: absolute;
}
	
#about{
display:none;}	
	
	
	
	
	</style> 
	</head> 
	
	<body> 
	
	<p><br><br></p>
	
	 <!--
	
	<div class="container">
	<div class="row" >
	<div class="col-lg-2" style="none;"></div>
	<div class="col-lg-5" ><h1>PLACEMENT WEBSITE</h1></div>
	<div class="col-lg-2">
	<button class="button" type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal1">
	Login
  </button>
	</div>
	
	
	<div class="col-lg-2">
	<button class="button" type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal2" >
	Register
  </button>
	</div>
	<div class="col-lg-1" style="none;"></div>
	
	</div>
	</div>
	
	-->
	
	
	
	
	<nav>
      <ul id='MenuItems'>
 
        <li><a href="javascript:about();">About</a></li>
		<li><a data-toggle="modal" data-target="#Modal1" href="#Modal1">Login</a></li>
		<li><a data-toggle="modal" data-target="#Modal2" href="#Modal2">Register</a></li>
        <li><a href='stats.php'>Placement Stats</a></li>
        <li><a href="javascript:contact();">Contact</a></li>
        
      </ul>
    </nav>
	
	
	
	
	
	
	
	
  
  <!-- Modal -->
  <div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Login</h5>
		  
		</div>
		<div class="modal-body">
			<form >
			<div id="student_login">
  <div class="container">
    <h1>STUDENT</h1>
 
    <hr>
    <label for="usn"><b>USN</b></label><br>
    <input type="text" placeholder="Enter USN" name="usn_login" id="usn_login" required>
<br><br>
    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw_stu_login" id="psw_stu_login" required>
   
    <hr>
    <button type="submit" class="submit" onclick="login_stu_validation()">SUBMIT</button>
  </div>
  
  <div class="container signin">
    <p>Login as an employer <a href="javascript:login_emp();">Click here</a>.</p>
  </div>
  </div>
  
  <div id="employer_login">
  <div class="container">
    <h1>EMPLOYER</h1>
 
    <hr>
    <label for="cmpid"><b>Comapany ID</b></label><br>
    <input type="text" placeholder="Enter Company ID" name="cmpid_login" id="cmpid_login" required>
	<br><br>
    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw_emp_login" id="psw_emp_login" required>
    
    <hr>
    <button type="submit" class="submit" onclick="login_emp_validation()">SUBMIT</button>
  </div>
  
  <div class="container signin">
    <p>Login as an student <a href="javascript:login_stu();">Click here</a></p>
  </div>
  </div>
  
</form>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		</div>
	  </div>
	</div>
  </div>
 
 
 
  
<div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Register</h5>
		 
		</div>
		<div class="modal-body">
		
    <form >
 			<div id="student_reg">
  <div class="container">
    <h1>STUDENT</h1>
 <p>Please fill in this form to create an account.</p>
    <hr>
  
    <label for="usn"><b>USN</b></label><br>
    <input type="text" placeholder="Enter USN" name="usn" id="usn" required>
<br><br>
    <label for="psw_stu"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw_stu" id="psw_stu" required>
<br><br>
    <label for="psw-repeat_stu"><b>Repeat Password</b></label><br>
    <input type="password" placeholder="Repeat Password" name="psw-repeat_stu" id="psw-repeat_stu" required>
    <hr>
    <button type="submit" class="submit" onclick="pass_stu_validation()">SUBMIT</button>
 
    </div>
  
  
  <div class="container signin">
    <p>Not a student? <a href="javascript:reg_emp();">Click here to register as an employer</a>.</p>
  </div>
  </div>
  
  <div id="employer_reg">
  <div class="container">
    <h1>EMPLOYER</h1>
 <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="cmpid"><b>Comapany ID</b></label><br>
    <input type="number" placeholder="Enter Company ID" name="cmpid" id="cmpid" required>
	<br><br>
	<label for="cmpname"><b>Comapany Name</b></label><br>
    <input type="text" placeholder="Enter Comapany name" name="cmpname" id="cmpname" required>
<br><br>
    <label for="psw_emp"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw_emp" id="psw_emp" required>
<br><br>
    <label for="psw-repeat_emp"><b>Repeat Password</b></label><br>
    <input type="password" placeholder="Repeat Password" name="psw-repeat_emp" id="psw-repeat_emp" required>
    <hr>
    <button type="submit" class="submit" onclick="pass_emp_validation()">SUBMIT</button>
  </div>
  
  <div class="container signin">
    <p>Not an employer? <a href="javascript:reg_stu();">Click here to register as an student</a>.</p>
  </div>
  </div>
  
</form>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		</div>
	  </div>
	</div>
  </div>
  
  
 
 
  <div id="about"> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <div class="container">
  
   <h1><b>ABOUT US</b></h1><br>
  
  <ul>
  <li>B.M.S College of Engineering has authored and set many examples of yeomen student centric initiatives.</li>
  <li>One such initiative is the Department of Training and Placement. The Institution ﬁrmly believes that placements are the major benchmark to the performance of the institute.</li>
  <li>The placement cell is the nodal center and an integral part of the institution. Started during 1995 it has scaled great heights and touched about 18500+ cumulative offers since its inception.</li>
   <li>The Centre has very active linkages and collaborations with industry.</li>
    <li>The Centre helps students in pursuing their career interests and also assists the employers in achieving their hiring goals.</li>
    <li>The vital roles of the Centre is to groom and shape the students and make them industry ready by imparting necessary skills and training.</li>
    <li>The Centre provides value added services like personal interview, analytical, quantitative, reasoning, mock tests, and team spirits and enterprise dynamics as part of their preplacement training.</li>
    <li>It also facilitates a web portal service to students to take up simulated online tests. The Centre offers complete state-of-the-art physical, communication and computing infrastructure for its effective functioning and best arrangement necessary to facilitate the ofﬁcials and companies visiting for placements.</li>
    <li>Our highly skilled and dedicated staff will deliver precisely planned services to the student community and companies.</li>
</ul> <br><br> 
<h1><b>VISION</b></h1><br>
To emerge as a most preferred destination for all corporates to hire globally component and ethically strong engineering talent.
  <br><br> 
  <h1><b>PROCESS</b></h1><br>
 <ul>
  <li>The placement ofﬁce shall communicate, network and build relations with potential recruiters. Students seeking placement shall register for the campus placements.</li>
  <li>Companies are encouraged to give pre-placement talks before the commencement of recruitment process.</li>
  <li>The companies conduct different rounds of selection process (aptitude test, group discussion, personal interview, HR and others) and inform the names of selected students to the placement department, which in turn shall inform the concerned students of the same.</li>
  
</ul>
<br><br><br>
  </div>
  </div>
  
  
  
  
  
  <div id="contact"> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <div class="container">
  
   <h1><b>CONTACT US</b></h1><br>
  

  <p>Address: Department of Placement & Training</p>
   <p>B.M.S. College of Engineering, II Floor, Sports Block, Bengaluru-560019</p>
    <p>Email: placement@bmsce.ac.in</p>
	 <p>Phone: +91-80-22423789, +91-80-26603936</p>
 <p>Ext: 5041</p>
 
 <br>
 <p>For any technical difficulties in the website contact us at:</p>
 <p>adithi.cs19@bmsce.ac.in</p>
  <p>aditiaf.cs19@bmsce.ac.in</p>
   <p>ishasingh.ec19@bmsce.ac.in</p>

<br><br><br>
  </div>
  </div>
  
  
  
  
  
	<script> 
	
	
	function login_emp(){
	document.getElementById("employer_login").style.display="block"; 
	document.getElementById("student_login").style.display="none"; 
	}
	
	function login_stu(){
	document.getElementById("employer_login").style.display="none"; 
	document.getElementById("student_login").style.display="block"; 
	}
	
	function reg_stu(){
	document.getElementById("employer_reg").style.display="none"; 
	document.getElementById("student_reg").style.display="block"; 
	}
	
	function reg_emp(){
	document.getElementById("employer_reg").style.display="block"; 
	document.getElementById("student_reg").style.display="none"; 
	}
	
	function pass_emp_validation(){
	var w,y,z,x;
	w=document.getElementById('cmpid').value;
	z=document.getElementById('cmpname').value;	
	y=document.getElementById('psw_emp').value;
	x=document.getElementById('psw-repeat_emp').value;
	
	if (w == "" || w == null) { 
	alert("Comapany ID must be filled out"); 
	return false; 
	} 
	
	if (z == "" || z == null) { 
	alert("Company name must be filled out"); 
	return false; 
	} 
	
	if (y == "" || y == null) { 
	alert("Please enter your password"); 
	return false; 
	} 
	
	if (x == "" || x == null) { 
	alert("Please re-enter your password"); 
	return false; 
	} 
	
	
	
	if(x==y)
	{
	document.location="update3.php?cmpid="+w+"&cmpname="+z+"&psw="+y;
	
	
	//window.location="student_details.html";
   }
   
	if(x!=y)
	alert("Check the password entered"); 
    return false;
	}
	
	function pass_stu_validation(){
    var y,x,z,result;
	z = document.getElementById("usn").value; 
	y=document.getElementById('psw_stu').value;
	x=document.getElementById('psw-repeat_stu').value;
	result=z.match('1BM[0-9][0-9][A-Z][A-Z][0-9][0-9][0-9]'); 
	
	
	
	if (x == "" || x == null) { if (z == "" || z == null) { 
	alert("USN must be filled out"); 
	return false; 
	} 
	
	if (y == "" || y == null) { 
	alert("Please enter your password"); 
	return false; 
	} 
	alert("Please re-enter your password"); 
	return false; 
	} 
	
	if(z!=result){
		alert("Enter a valid usn");
	return false;}
	
	if(x==y){
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
	
	document.location="update1.php?usn="+z+"&psw="+y;
	
	
	//window.location="student_details.html";
   }
   
	if(x!=y)
	alert("Check the password entered"); 
    return false;
	}
function login_stu_validation(){
	
	
	var y,z;
	z=document.getElementById('usn_login').value;	
	y=document.getElementById('psw_stu_login').value;
	if (z == "" || z == null) { 
	alert("USN must be filled out"); 
	return false; 
	} 
	
	if (y == "" || y == null) { 
	alert("Please enter your password"); 
	return false; 
	} 
	document.location="update5.php?usn="+z+"&psw="+y;
	
	
}
var flag1=0;
var flag2=0;
function about()
{
	if(flag1==0){
		document.getElementById("contact").style.display="none"; 
	document.getElementById("about").style.display="block"; 
	flag1=1;flag2=0;
	document.location="#about";
	}
	else
	{
		document.getElementById("about").style.display="none"; 
	flag1=0;
	}
	return false;
}

function contact()
{
	if(flag2==0){
		document.getElementById("about").style.display="none"; 
	document.getElementById("contact").style.display="block"; 
	flag2=1;flag1=0;
	document.location="#contact";
	}
	else
	{
		document.getElementById("contact").style.display="none"; 
	flag2=0;
	}
	return false;
}




function login_emp_validation(){
	
	
	var y,z;
	z=document.getElementById('cmpid_login').value;	
	y=document.getElementById('psw_emp_login').value;
	if (z == "" || z == null) { 
	alert("Company ID must be filled out"); 
	return false; 
	} 
	
	if (y == "" || y == null) { 
	alert("Please enter your password"); 
	return false; 
	} 
	document.location="company_login.php?cmpid="+z+"&psw="+y;
	
	
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
