<?php
session_start();
$uname=$_SESSION['userid'];
?>
<!DOCTYPE html>
<html>
<head>
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
		User-info
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
background-color: #8f1503  ;
}
.button{
display:inline;
background-color: #8f1503;
font-family: Trebuchet MS;
border-color: #8f1503 ;
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
	outline:none;
	border:none;
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
    color: #8f1503 ; 
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
	margin-left: 40px;
	margin-right: 40px;
	background-color: #e6e6e6;
	margin-top:-15px;
}
label{
margin-left:180px;
}
input,select{
border-radius:5px;
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
padding-top: 5px;
padding-left: 15px;
padding-bottom:5px;
font-family: Trebuchet MS;
border-radius: 8px;
}
#f2{
margin-top:40px;
padding:20px;
font-family: Trebuchet MS;
}
table {
background-color:#e6e6e6;
font-family: Trebuchet MS;
width: 50%;
margin-left:350px;
border:2px solid #8f1503;
text-align: center;
margin-bottom: 100px;

}
td, th {
color:solid black;
text-align: center;
padding: 8px;
border-bottom:1px solid #373737;
font-size:17px;
}
#p1{
font-family: Trebuchet MS;
margin-left: 590px;	
margin-top: 120px;	
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
.btn2
{
background-color:#8f1503; 
    border: none; 
    color: white; 
    padding: 7px ;
    font-size: 17px; 
    cursor: pointer; 
    margin-top:30px;
    float:left;
    margin-left: 38px;
    border-radius: 4px;
    font-family: Trebuchet MS;	
}
.btn2:hover {
    background-color:  #C73720;
}
.btn3{
	background-color:#8f1503; 
    border: none; 
    color: white; 
    padding: 7px;
    font-size: 17px; 
    cursor: pointer; 
    margin-top:30px;
    float:left;
    margin-left: 4px;
    border-radius: 4px;
    font-family: Trebuchet MS;	
}
.btn3:hover {
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
</nav>
<div class="d1"><button class="btn" onclick="location.href='index.php'"><i class="fa fa-home"></i></button> /User</div>
	<h1>User</h1><hr id="hr1">
<button class="btn2" onclick="location.href='add user-info.php'" ><i class="fa fa-plus"> </i> Add</button>
<button class="btn3" onclick="location.href='edit user-info.php'" ><i class="fa fa-pencil"> </i> Edit</button>
<button class="btn3" onclick="history.go(0)" ><i class="fa fa-refresh"> </i> Refresh</button>
<button class="btn3" onclick="exportToExcel('myTable')"><i class="fa fa-share"> </i> Export</button>
<button class="btn3" onclick="window.print()"><i class="fa fa-print"> </i> Print</button>
	<p id="p1"><b> Personal Information</b></p>
</body>
</html>



<?php
$con=mysqli_connect("localhost","root","","project");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM `user_info` where username='$uname'");
$row = mysqli_fetch_array($result);
                                             

echo "<table id='myTable'>";
echo"<col width='230px'>";
echo"<col width='150px'>";
echo "<tr>";
echo "<td style='text-align:right;'><b>" . "Aid" . "</b></td>";
echo "<td style='text-align:left;'>" . $row['aid'] . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='text-align:right;'><b>" . "Name" . "</b></td>";
echo "<td style='text-align:left;'>" . $row['name'] . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='text-align:right;'><b>" . "Gender" . "</b></td>";
echo "<td style='text-align:left;'>" . $row['gender'] . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='text-align:right;'><b>" . "Date of birth" . "</b></td>";
echo "<td style='text-align:left;'>" . $row['dob'] . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='text-align:right;'><b>" . "Father name" . "</b></td>";
echo "<td style='text-align:left;'>" . $row['father_name'] . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='text-align:right;'><b>" . "Phone" . "</b></td>";
echo "<td style='text-align:left;'>" . $row['mobile'] . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='text-align:right;'><b>" . "MailId" . "</b></td>";
echo "<td style='text-align:left;'>" . $row['email'] . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='text-align:right;'><b>" . "Address" . "</b></td>";
echo "<td style='text-align:left;'>" . $row['address'] . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='text-align:right;'><b>" . "Qualification" . "</b></td>";
echo "<td style='text-align:left;'>" . $row['qualification'] . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='text-align:right;'><b>" . "Designation" . "</b></td>";
echo "<td style='text-align:left;'>" . $row['designation'] . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='text-align:right;'><b>" . "Nationality" . "</b></td>";
echo "<td style='text-align:left;'>" . $row['nationality'] . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='text-align:right;'><b>" . "Other details" . "</b></td>";
echo "<td style='text-align:left;'>" . $row['other_details'] . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='text-align:right;'><b>" . "Username" . "</b></td>";
echo "<td style='text-align:left;'>" . $row['username'] . "</td>";
echo "</tr>";
echo "</table>";
mysqli_close($con);
?>