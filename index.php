<!DOCTYPE html>
<html>
<head>
	<title>
		index
	</title>
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
.s
{
height: 53px;
width:100px;
float:right;
background-color:#8f1503 ;
color: white;
font-family: Trebuchet MS;
border-color: #8f1503;
font-size: 15px;
border-radius:8px;
opacity: 0%;
}
.s:hover{
	background-color: #C73720;
}
.s:focus{
	outline: none;
}
h2
{
  text-align:center; 
  margin:70px 90px;
  color:#373737 ;
  font-family: Trebuchet MS;
  font-size:35px;
}
.button
{
	margin: 15px 30px;
    text-align:left;
	width:425px;
	font-size: 20px;
	padding: 15px;
	color:#8f1503;
	border-color: #8f1503;
	border-width: 1.2px;
	font-family: Trebuchet MS;
	border-radius:12px;
	background-color: #e6e6e6;
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
</style>
</head>
<body >
<nav>
	<button class="button1" onclick="location.href='login page.php'"><b>Logout</b></button>

</select>
	<h2> DIGITAL DIARY</h2>
<button class="button" onclick="location.href='address book.php'"><b>Address Book</b></button><br>
<button class="button" onclick="location.href='notes.php'"><b>Notes</b></button><br>
<button class="button" onclick="location.href='remainder system.php'"><b>Remanider System</b></button><br>
<button class="button" onclick="location.href='gallery.php'"><b>Gallery</b></button><br>
<button class="button" onclick="location.href='user-info.php'"><b>User</b></button><br>
	
</div>

</nav>
<script>
	function address_book{
		window.open("C:\Users\dines\Desktop\IWP project\address book.php");
	}
</script>
</body>
</html>