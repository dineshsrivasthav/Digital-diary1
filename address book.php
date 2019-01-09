<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}
function openForm1() {
    document.getElementById("myForm1").style.display = "block";
}

function closeForm1() {
    document.getElementById("myForm1").style.display = "none";
}
</script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script>
function exportToExcel(tableID){
    var tab_text="<table border='2px'><tr style='height: 50px; text-align: center; '>";
    var textRange; var j=0;
    tab = document.getElementById(tableID);
    for(j = 0 ; j < tab.rows.length ; j++)
    {
        tab_text=tab_text;
        tab_text=tab_text+tab.rows[j].innerHTML.toUpperCase()+"</tr>";
        //tab_text=tab_text+"</tr>";
    }
	
    tab_text= tab_text+"</table>";
    
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");
    
       sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));
    return (sa);
}
</script>
	<title>
		Address book
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
background-color:#8f1503  ;
}
.button{
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
#d1{
	
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
input{
	margin-top: 210px;
	float:right;
	height: 30px;
	border-radius: 4px;
	font-family: Trebuchet MS;
	
}
.btn1{
	background-color:#8f1503; 
    border: none; 
    color: white; 
    padding: 12px;
	padding-top:8px;
    font-size: 17px; 
    cursor: pointer; 
    margin-top:210px;
    margin-left: 148px;
    border-radius: 4px;
	width:66px;
	position:absolute;
	height:50px;
	font-family:Trebuchet MS;
}
.btn1:hover {
    background-color:  #C73720;
}
.btn2
{
background-color:#8f1503; 
    border: none; 
    color: white; 
    padding: 12px ;
	padding-top:7px;
    font-size: 17px; 
    cursor: pointer; 
    margin-top:210px;
    float:left;
    margin-left: 38px;
    border-radius: 4px;
    font-family: Trebuchet MS;
     width:59px;	
	 height:50px;
}
.btn2:hover {
    background-color:  #C73720;
}
.btn3{
	background-color:#8f1503; 
    border: none; 
    color: white; 
    padding: 12px;
	padding-top:5px;
    font-size: 17px; 
    cursor: pointer; 
    margin-top:210px;
    float:left;
    margin-left: 224px;
    border-radius: 4px;
    font-family: Trebuchet MS;	
	width:59px;
	position:absolute;
	height:50px;
}
.btn3:hover {
    background-color:#C73720;
}
.btn4{
	background-color:#8f1503; 
    border: none; 
    color: white; 
    padding: 5px;
    font-size: 17px; 
    cursor: pointer; 
    margin-top:210px;
    float:left;
    margin-left: 7px;
    border-radius: 4px;
    font-family: Trebuchet MS;	
	width:80px;
}
.btn4:hover {
    background-color:  #C73720;
}
table{
	position: absolute;
	margin-top:300px;
	padding: 0px 30px;
	font-family: Trebuchet MS;	
	margin-left:30px;
	margin-right: 40px;
	width:95%;
	border-collapse: collapse;
	
}
hr{
	margin-top:-20px;
	margin-left: 40px;
	margin-right: 40px;
	background-color: #e6e6e6;
}
td,th{
	
	height: 45px;
	text-align:center;

}
tr:nth-child(even){
background-color: #e6e6e6;
	margin-right: 40px;
	border-radius: 10px;
}
#std{
	text-align:center;
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
   color:black;
   text-decoration:none;
}
#myInput{
	border-radius:20px;
	width:300px;
	background-color:white;
	font-size:16px;
	margin-right:27px;
}
#myInput:focus
{
	outline: none;
}
.open-button {
 background-color:#8f1503;
 padding: 10px ;
 padding-top:4px;
  font-size: 17px;
  color: white;
  border: none;
  border-radius:4px;
  cursor: pointer;
  position: absolute;
  margin-top:210px;
  width: 59px;
  margin-left:7px;
  height:50px;
  font-family:Trebuchet MS;
}
.open-button1 {
 background-color:#8f1503;
 padding: 10px ;
 padding-top:5px;
  font-size: 16.5px;
  color: white;
  border: none;
  border-radius:4px;
  cursor: pointer;
  position: absolute;
  margin-top:210px;
  width: 65px;
  margin-left:74px;
  height:50px;
  font-family:Trebuchet MS;
}


/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  top: 0;
  right: 375px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  width: 300px;
  height: 180px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 95%;
  padding: 6px;
  margin-bottom:20px;
  margin-top:5px;
  border: none;
  border-radius:4px;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btnx {
 background-color:#8f1503; 
  color: white;
  padding: 6px;
  border: none;
  border-radius:4px;
  cursor: pointer;
  width: 60%;
  margin-left:60px;
  margin-bottom:10px;
  font-family:Trebuchet MS;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: #8f1503;
}
.form-container .btnx:hover, .open-button:hover,.open-button1:hover {
  background-color:  #C73720;
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
<div id="d1"><button class="btn" onclick="location.href='index.php'"><i class="fa fa-home"></i></button> / Address Book</div>
	<h1>Address Book</h1><hr>
</nav>

<form method="post" action="">
<input type="text" id="myInput" placeholder=" Quick search">
<button class="btn2" title="Add record"><i class="fa fa-plus"><a href="add address.php" style="color:white;font-family:Trebuchet MS;"> Add</a></i></button>
<button class="btn4" title="Refresh"onclick="history.go(0)" ><i class="fa fa-refresh"> </i> Refresh </button>
<button class="btn1" title="Export" onclick="exportToExcel('myTable')"><i class="fa fa-share"> Export</i> </button>
<button class="btn3" title="Print" onclick="window.print()"><i class="fa fa-print"> </i> Print</button>
</form>
	
	<button class="open-button" title="Edit record" onclick="openForm()"><i class="fa fa-pencil"></i>Edit</button>
<button class="open-button1" title="Delete record" onclick="openForm1()"><i class="fa fa-trash"></i>Delete</button>

<div class="form-popup" id="myForm" >
  <form action="edit address.php" class="form-container">

    <label for="id" style="font-family:Trebuchet MS;"><b>Edit record</b></label><br><br>
    <input type="text" placeholder="Enter the aid of the record you want to edit" name="id" required><br>
	
    <button type="submit"  class="btnx">Enter</button><br>
    <button type="button" class="btnx cancel" onclick="closeForm()">Close</button>
  </form>
  </div>
  
  <div class="form-popup" id="myForm1" >
  <form action="" class="form-container" method="POST">

    <label for="idx" style="font-family:Trebuchet MS;"><b>Delete record</b></label><br><br>
    <input type="text" placeholder="Enter the aid of the record you want to delete" name="idx" required><br>
	
    <button type="submit"  class="btnx">Enter</button><br>
    <button type="button" class="btnx cancel" onclick="closeForm1()">Close</button>
  </form>
  </div>

	
	
	
	
	</body>
</html>




<?php
$con=mysqli_connect("localhost","root","","project");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if(isset($_GET['order'])) {
	$order = $_GET["order"];
}
else{
	$order = "aid";
}
if(isset($_GET['sort'])) {
	$sort = $_GET["sort"];
}
else{
	$sort = "ASC";
}
$uname=$_SESSION['userid'];
$result = mysqli_query($con,"SELECT * FROM address_book where username='$uname' order by $order $sort");
if (!$result) {
        exit('<p>Error performing query: ' . mysql_error() . '</p>');
    }
	
$sort == 'DESC' ? $sort = 'ASC' : $sort = 'DESC';
echo "<table id='myTable'  >
<tr>
<th><a href='?order=aid&&sort=$sort'>Aid</a></th>
<th><a href='?order=name&&sort=$sort'>Name</a></th>
<th><a href='?order=gender&&sort=$sort'>Gender</a></th>
<th><a href='?order=dob&&sort=$sort'>DOB</a></th>
<th><a href='?order=father_name&&sort=$sort'>Father's name</a></th>
<th><a href='?order=mobile&&sort=$sort'>Phone</a></th>
<th><a href='?order=email&&sort=$sort'>Mail Id</a></th>
<th><a href='?order=address&&sort=$sort'>Address</a></th>
<th><a href='?order=qualification&&sort=$sort'>Qualification</a></th>
<th><a href='?order=designation&&sort=$sort'>Designation</a></th>
<th><a href='?order=nationality&&sort=$sort'>Nationality</a></th>
<th><a href='?order=other_details&&sort=$sort'>Other details</a></th>
<th><a href='?order=username&&sort=$sort'>Username</a></th>
</tr>";

while($row = mysqli_fetch_array($result))
{
	$aid = $row['aid'];
	$name = $row['name'];
	$gender = $row['gender'];
	$dob = $row['dob'];
	$father_name = $row['father_name'];
	$mobile = $row['mobile'];
	$email = $row['email'];
	$address = $row['address'];
	$qualification = $row['qualification'];
	$designation = $row['designation'];
	$nationality = $row['nationality'];
	$other_details = $row['other_details'];
	$username = $row['username'];
echo "<tr>";
echo "<td>" . $row['aid'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo "<td>" . $row['dob'] . "</td>";
echo "<td>" . $row['father_name'] . "</td>";
echo "<td>" . $row['mobile'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['qualification'] . "</td>";
echo "<td>" . $row['designation'] . "</td>";
echo "<td>" . $row['nationality'] . "</td>";
echo "<td>" . $row['other_details'] . "</td>";
echo "<td>" . $row['username'] . "</td>";

echo "</tr>";
}
echo "</table>";
if (isset($_POST['id'])) {
      $id = $_POST['id'];   
   }
   ?>
<?php

$con=mysqli_connect("localhost","root","","project"); 	 	
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 if (isset($_POST['idx'])) {
      $idx = $_POST['idx']; 
$result2 = mysqli_query($con,"DELETE FROM address_book WHERE aid='$idx'");	  
  

if (!$result2) {
        exit('<p>Error performing query: ' . mysql_error() . '</p>');
    }
 }
	mysqli_close($con);
	
?>
