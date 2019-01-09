<?php
session_start();
$uname=$_SESSION['userid'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Add New-remainder
	</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style >
	body{
		background-image: url("bk8.jpg");
			background-size: cover;
	}
nav
{
position:absolute;
top:0;
left:0;
width:100vw;
height: 8vh;
background-color: #8f1503 ;
}
.button{
display:inline;
background-color: #8f1503;
font-family: Trebuchet MS;
border-color: #8f1503;
height:53px;
border-width: 1.2px;
border-style: unset;
color:white;
font-size: 15px;
margin-left:40px;
border-radius: 6px;
cursor: pointer;
}
.button:hover
{
	background-color:#C73720;
}
.button:focus
{
	outline: none;
}
.button1{
    float: right;
    margin-right: 20px;
display:inline;
background-color: #8f1503 ;
font-family: Trebuchet MS;
border-color: #8f1503;
height:53px;
border-width: 1.2px;
border-style: unset;
color:white;
font-size: 15px;
margin-left:40px;
border-radius: 6px;
cursor: pointer;
}
.button1:hover
{
    background-color:#C73720;
}
.button1:focus
{
    outline: none;
}

.btn {
    background-color:#e6e6e6 ; 
    border: none; 
    color:#933A16; 
    padding: 8px 16px; 
    font-size: 19px; 
    cursor: pointer; 
    margin-top:-15px;
}
.btn:hover {
    background-color: #d6d6d6;
}
.d4{
	
	background-color: #e6e6e6;
	margin-left: 40px;
	margin-right: 40px;
	margin-top:25px;
	height:28px;
	padding-top: 10px;
	padding-left: 15px;
	font-family: Trebuchet MS;
	border-radius: 8px;
}

h1{
	margin-top: 30px;
	margin-left: 40px;
	font-family: Trebuchet MS;
	font-size:30px;
	color:#373737 ;
}
#hr1{
	margin-top:-20px;
	margin-left: 40px;
	margin-right: 40px;
	background-color: #e6e6e6;
}
label{
margin-left:180px;
}
input,textarea,select{
border-radius:10px;
height:30px;
width:60%;
float:right;
margin-right:180px;
font-size:17px; 
font-family: Trebuchet MS;
}
.d2{
background-color: #e6e6e6;
margin-left: 20px;
margin-right: 20px;
margin-top:25px;
height:35px;
padding-top: 5px;
padding-left: 15px;
padding-bottom:5px;
font-family: Trebuchet MS;
border-radius: 8px;
padding-bottom: 2px;
}
#f1{
margin-top:220px;
padding:20px;
font-family: Trebuchet MS;
}
#btn1{
	background-color:#8f1503;
	color:white;
	border:none;
	width:100px;
	height:30px;
	margin-right:15px;
	border-radius:10px;
	font-family: Trebuchet MS;
	}
#btn2{
background-color:#8f1503;
color:white;
border:none;
width:100px;
height:30px;
margin-right:250px;
border-radius:10px;
font-family: Trebuchet MS;
font-size:17px;
}
#btn1:hover,#btn2:hover{
background-color: #C73720;
}
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 170px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
a{
   font-family: Trebuchet MS; 
}
</style>
</head>
<body>
<nav>
	<button class="button" onclick="location.href='address book.php'"><b>Address Book</b></button>
<button class="button" onclick="location.href='notes.php'"><b>Notes</b></button>
<button class="button" onclick="location.href='remainder system.php'"><b>Remanider System</b></button>
<button class="button" onclick="location.href='gallery.php'"><b>Gallery</b></button>
<div class="dropdown">
  <button class="button"><b>User</b></button>
  <div class="dropdown-content">
    <a href="user-info.php"><b>User information</b></a>
    <a href="change password.php"><b>Change password</b></a>
</div></div>

<button class="button1" onclick="location.href='login page.php'"><b>Logout</b></button>
<div class="d4"><button class="btn" onclick="location.href='index.php'"><i class="fa fa-home"></i></button> / <b style="color:#8f1503">Remainder System</b> / Add new</div>
	<h1>Add New</h1><hr id="hr1">
</nav>
<form name="myform" id="f1" action="" method="post">
<label for="rid">Rid<b style="color:red">*</b></label>
<input type="text" id="rid" name="rid" required><br><br><br>
<label for="start_date">Date</label>
<input type="date" id="start_date" name="start_date"><br><br><br>
<label for="start_time">Time</label>
<input type="time" id="start_time" name="start_time"><br><br><br>
<label for="message">Message</label>
<input type="text" id="message" name="message"><br><br><br>
<label for="uname">Username</label>
<input type="text" name="username" value="<?php echo $uname ?>" disabled="disabled" ><br><br><br>
<p style="text-align:right;margin-right:200px"><b style="color:red">*</b>- Required field</p>
<div class="d2">
<input id="btn1" type="submit" value="Save">
<button id="btn2" onclick="location.href='remainder system.php'">Cancel</button>
</div>
</form>
</body>
</html>



<?php
$con=mysqli_connect("localhost","root","","project");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$rid=filter_input(INPUT_POST, 'rid');
$start_date=filter_input(INPUT_POST, 'start_date');
$start_time=filter_input(INPUT_POST, 'start_time');
$message=filter_input(INPUT_POST, 'message');
$username=filter_input(INPUT_POST, 'username');
$result=mysqli_query($con,"INSERT INTO remainder_system (rid, start_date, start_time, message,username) VALUES('$rid','$start_date','$start_time', '$message','$uname')");
if (!$result)
  {
  die(' ' . mysql_error());
  }
echo "1 record added";
mysqli_close($con);
?>


