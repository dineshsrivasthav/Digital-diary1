<html>
<head>
<script type="text/javascript">

 /*
  function checkForm(form)
  {
    if(form.username.value == "") {
      alert("Error: Username cannot be blank!");
      form.username.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.username.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.username.focus();
      return false;
    }
	
	if(form.password.value == "") {
      alert("Error: Password cannot be blank!");
      form.username.focus();
      return false;
    }
	re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}$/;
	if(!re.test(form.password.value)) {
      alert("Error: Password must contain atleast one small letter, capital letter, number and a minimum length of 6 characters!");
      form.password.focus();
      return false;
    }
    return true;
  }
*/
</script>

  <title>
    Login page
  </title>
  <style>
 body
{
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
background-color:   #8f1503   ;
}
.h1
{
  text-align:center; 
  margin:90px 90px;
  font-family: Trebuchet MS;
  font-size:35px;
  color: #373737 ;
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
}
input[type=checkbox] {
    visibility: ;
}
.checkboxOne {
    width: 40px;
    height: 0px;
    padding-bottom: 5px;
    padding-top: 3px;
    background: #8f1503;
    margin-left: 42px;
    top: 14px;
    position: relative;
    border-radius: 3px;
     cursor: pointer;
     transition: all .5s ease;
}
.checkboxOne label {
    display: block;
    width: 16px;
    height: 16px;
    border-radius: 50%;
    transition: all .5s ease;
    cursor: pointer;
    position: absolute;
    top:  -4px;
    left: -3px;
    background: #ccc;
}
.checkboxOne input[type=checkbox]:checked + label {
    left: 27px;
}
div
{
  margin:2px 520px; 
  margin-top: -60px;
  /*background-color: #e6e6e6;
  border:2px solid #8f1503  ; */
  text-align:center;
  border-radius:8px;
  padding-top: 25px;
  padding-bottom: -24px;
font-family: Trebuchet MS;
}
input::placeholder{
  color: black;
}
#p1
{
  color: black ;
  font-family:Trebuchet MS ;
  margin:17px 50px;
  font-size: 15px;
  padding-top: 10px;
  margin-left:10px;
}

.button 
{background-color:  #8f1503   ; 
  margin:38px 2px ;
  padding:12px;
  padding-bottom: 8px;
  padding-top: 8px;
  color:white;
  border-color:#8f1503  ;
  font-family: Trebuchet MS;
  border-radius:5px;}
  .button:hover
  {
    background-color: #C73720;
  }
</style>
</head>
<body>
  <nav id="home">
<p class="h1"><b>DIGITAL DIARY</b></p>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return checkForm(this);">
<div>
    <img src="final.png" width:"100px" height="100px" radius:"4px"><br><br><br>
<input class="c1" type="text" name="username" placeholder="Username"><br><br><br>
<input class="c1" type="password" name="password" placeholder="Password"><br><br>
    <p id="p1">Remember me</p><br>
    <div class="checkboxOne">
        <label for="checkboxOneInput"></label>
    </div><br>
	
<input class="button" type="submit" value="Login" name="login">
<button class="button" type="button" onclick="location.href='sign_up.php'"><b>Sign up</b></button>
  </div>
  </form>
</nav>
</body>
</html>


<?php
$con=mysqli_connect("localhost","root","","project");
$db="project";
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if(isset($_POST['username'])){
	$sql= "SELECT * from sign_up where userid='".$_POST['username']."' AND pass='".$_POST['password']."'";
	$result = mysqli_query($con,$sql);
      if(mysqli_num_rows($result) == 1) {
		  session_start();
		  $_SESSION['userid']=$_POST['username'];
		  $_SESSION['pass']=$_POST['password'];
		  /*if($_POST['remember_me']=='1' || $_POST['remember_me']=='on')
		  {
			  $hour=time()+3600*24*30;
			  setcookie($_SESSION['userid'],$_POST['username'],$hour);
			  setcookie($_SESSION['pass'],$_POST['password'],$hour);
		  }*/
		   header("location: index.php");
		   exit();
      }else {
         echo "<p style='margin-top:55px;' >" . "Your username or password is invalid"."</p>";
		 exit();
      }
}
mysqli_close($con);
?>