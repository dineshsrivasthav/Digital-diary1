<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Edit-notes
	</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style >
	body{
		background-image: url("bk8.jpg");
		background-size: cover;
		margin-bottom:50px;
	}
nav
{
position:fixed;
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
.d1{
	
	background-color: #e6e6e6;
	margin-left: 40px;
	margin-right: 40px;
	margin-top:70px;
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
input,select{
border-radius:10px;
height:30px;
border-style:inset;
border-color:#e6e6e6;
width:60%;
float:right;
margin-right:180px;
}
.d2{
background-color: #e6e6e6;
margin-left: 20px;
margin-right: 20px;
margin-top:25px;
height:35px;
padding-top: 7px;
padding-left: 15px;
padding-bottom:3px;
font-family: Trebuchet MS;
border-radius: 8px;
}
#f1{
margin-top:40px;
padding:20px;
font-family: Trebuchet MS;
}
#b1{
background-color:#8f1503;
color:white;
border:none;
width:100px;
height:35px;
margin-left:550px;
border-radius:10px;
font-size:20px;
font-family: Trebuchet MS;
}
#b1:hover{
background-color: #C73720;
}
#b2{
background-color:grey;
color:white;
border:none;
width:100px;
height:30px;
margin-right:250px;
border-radius:10px;
}
#b2:hover{
background-color: #55514F;
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
</nav>
<div class="d1"><button class="btn" onclick="location.href='index.php'"><i class="fa fa-home"></i></button> / <b style="color:#8f1503">Notes</b> / Edit</div>
	<h1>Edit</h1><hr id="hr1">
	
	
	<?php
$con=mysqli_connect("localhost","root","","project"); 	 	
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$id = $_GET['id'];
$nid=$id;
$uname=$_SESSION['userid'];
		$result = mysqli_query($con,"SELECT * FROM notes WHERE username='$uname' and nid=$id");
if (!$result) {
        exit('<p>Error performing query: ' . mysql_error() . '</p>');
    }
        while($row = mysqli_fetch_array($result))
{
	$nid = $row['nid'];
	$notes = $row['notes'];
	$date = $row['date'];
	$time = $row['time'];
	$username = $row['username'];
	   
?>

<form name="myform1" id="f1" action="" method="POST">
<label for="nid">Nid<b style="color:red">*</b></label>
<input type="text" id="aid" name="nid" value="<?php echo $nid; ?>" required><br><br><br>
<label for="notes">Notes</label>
<input type="text" id="notes" name="notes" value="<?php echo $notes; ?>"><br><br><br>
<label for="date">Date</label>
<input type="date" id="date" name="date" value="<?php echo $date; ?>"><br><br><br>
<label for="time">Time</label>
<input type="time" id="time" name="time" value="<?php echo date('h:i',strtotime($time)); ?>" ><br><br><br>
<label for="uname">Username</label>
<input type="text" name="username" value="<?php echo $username; ?>" disabled="disabled"><br><br><br>
<p style="text-align:right;margin-right:200px"><b style="color:red"><b style="color:red">*</b></b>- Required field</p>
<br>
<input style="margin-right:45%;" type="submit" id="b1" value="Save">


</form>
<?php
        }
		?>
<?php
		$con=mysqli_connect("localhost","root","","project"); 	 	
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$nid1=filter_input(INPUT_POST, 'nid');
$notes1=filter_input(INPUT_POST, 'notes');
$date1=filter_input(INPUT_POST, 'date');
$time1=filter_input(INPUT_POST, 'time');
	$result1=mysqli_query($con,"UPDATE notes SET notes='$notes1',date='$date1',time='$time1' where nid=$id ");
	
	
if (!$result1)
  {
  die(' ' . mysql_error());
  }
mysqli_close($con);
?>

 
</body>
</html>



