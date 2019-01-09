<?php
session_start();
$uname=$_SESSION['userid'];
$pw=$_SESSION['pass'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		User
	</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style >
	body{
		background-image: url("bk8.jpg");
		background-size: cover;
	}
nav
{
position:fixed;
top:0;
left:0;
width:100vw;
height: 8vh;
background-color: #8f1503 ;
}
.button{
display:inline;
background-color: #8f1503  ;
font-family: Trebuchet MS;
border-color:#8f1503;
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
.button9{
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
.button9:hover
{
    background-color:#C73720;
}
.button9:focus
{
    outline: none;
}

#d4{
	
	background-color: #e6e6e6;
	border-color:#8f1503;
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
	margin-top: 20px;
	margin-left: 40px;
	font-family: Trebuchet MS;
	font-size:30px;
	color:#373737 ;
}
.btn {
    background-color:#e6e6e6 ; 
    border: none; 
    color: #8f1503; 
    padding: 8px 16px; 
    font-size: 19px; 
    cursor: pointer; 
    margin-top:-15px;
}
.btn:hover {
    background-color: #d6d6d6;
}
hr{
	margin-top: -20px;
	margin-left: 40px;
	margin-right: 40px;
	background-color: #e6e6e6;
}
#d1
{ 
  margin-top: -18px;
  margin-left:510px;
  height:400px;
  width:300px;
  text-align:center;
  border:3px ;
  border-radius:8px;
  padding-top: 20px;
  padding-left:6px; 
font-family: Trebuchet MS;
margin-bottom: 100px;
}
.c1
{
  border-radius:4px;
  width:250px;
  height:28px;
  font-family: Trebuchet MS;
  padding-left: 10px;
  background:transparent;
  outline:none;
  outline-style: none;
  border-top:none;
  border-left: none;
  border-right: none;
  border-bottom: 2px solid #8f1503;
  color:black;
}
.button1
{background-color: #8f1503 ; 
  margin:38px 2px ;
  padding:12px;
  padding-bottom: 8px;
  padding-top: 8px;
  color:white;
  border-color:#8f1503 ;
  font-family: Trebuchet MS;
  border-radius:5px;}
.button1:hover
  {
    background-color: #C73720;
  }
 p{
 	font-family: Trebuchet MS;
 }
 #p1{
 	margin-top: 30px;
 	margin-left:580px;
 	font-size:20px;
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
.c1::placeholder{
  color:black;
  text-decoration-style: bold;
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

<button class="button9" onclick="location.href='login page.php'"><b>Logout</b></button>
<div id="d4"><button class="btn" onclick="location.href='index.php'"><i class="fa fa-home"></i></button> / User</div>
	<h1>User</h1><hr>

<p id="p1"><b>Change password</b></p><br>
<form name="myform1" id="f1" action="" method="POST">
<div id="d1">
    <img src="final.png" width:"100px" height="90px" radius:"4px"><br>
<p><b><?php echo $uname ?></b></p><br>
<input class="c1" type="password" name="password" placeholder="Current password"><br><br>
<input class="c1" type="password" name="new_password" placeholder="Enter new password"><br><br>
<input class="c1" type="password" name="confirm_password" placeholder="Re-enter password"><br>
<input type="submit" value="Update" class="button1"></div></form>
	</body>
</html>




<?php
		$con=mysqli_connect("localhost","root","","project"); 	 	
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$pass0=filter_input(INPUT_POST, 'password');
$pass1=filter_input(INPUT_POST, 'new_password');
$confirm1=filter_input(INPUT_POST, 'confirm_password');
if(($pass0==$pw) && ($pass1==$confirm1)){
	$result1=mysqli_query($con,"UPDATE `sign_up` SET pass='$pass1',confirm='$confirm1' where userid='$uname' ");
	echo "<p style='margin-left:10px;margin-top:-500px;'>" . "Password updated sucessfully."."<br>" ."Please re-login." . "</p>";
}
else{
	echo "<p style='margin-left:10px;margin-top:-500px;color:red'>" . "*Enter correct password to change it." . "</p>";
}
mysqli_close($con);
?>