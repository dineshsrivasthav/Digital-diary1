<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">

  function checkPassword(str)
  {
    var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}$/;
    return re.test(str);
  }

  function checkForm(form)
  {
    re = /^\w+$/;
    if(!re.test(form.username.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.username.focus();
      return false;
    }
	re =/^\d{10}$/;
    if(!re.test(form.mobile.value)) {
      alert("Error: Please enter a valid mobile number!");
      form.mobile.focus();
      return false;
    }
    if(form.password.value != "" && form.password.value == form.confirm.value) {
      if(!checkPassword(form.password.value)) {
        alert("The password you have entered is not valid!");
        form.password.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.password.focus();
      return false;
    }
    return true;
  }

</script>

  <title>
    Sign up page
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
  border-radius: 4px;
  width:300px;
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
div
{
  margin:2px 520px; 
  margin-top: -60px;
  /*background-color: #e6e6e6;
  border:2px solid #8f1503;*/
  text-align:center;
  border-radius:8px;
  padding-top: 25px;
  padding-bottom: -24px;
font-family: Trebuchet MS;
}
input::placeholder{
  color: black;
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
  .button:focus
  {
    outline-color: #C73720;
  }
</style>
</head>
<body>
  <nav id="home">
<p class="h1"><b>DIGITAL DIARY</b></p>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return checkForm(this);">
<div>
    <img src="final.png" width:"100px" height="100px" radius:"4px"><br><br>
<input class="c1" type="text" name="userid" placeholder="What would you like to be called as..." required><br><br>
<input class="c1" type="email" name="email" placeholder="Enter your email" required><br><br>
<input class="c1" type="tel" name="mobile" placeholder="Enter your mobile number" required><br><br>
<input class="c1" type="password" name="pass" placeholder="Password" required><br><br>
<input class="c1" type="password" name="confirm" placeholder="Confirm password" required><br>
<input type="submit" class="button"  value="Sign up" >
<button type="button" class="button" onclick="location.href='login page.php'"><b>Cancel</b></button>
  </div>
  </form>
</nav>
</body>
</html>


<?php
$con=mysqli_connect("localhost","root","","project");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$userid=filter_input(INPUT_POST, 'userid');
$email=filter_input(INPUT_POST, 'email');
$mobile=filter_input(INPUT_POST, 'mobile');
$pass=filter_input(INPUT_POST, 'pass');
$confirm=filter_input(INPUT_POST, 'confirm');
$result=mysqli_query($con,"INSERT INTO `sign_up` (userid, email, mobile, pass, confirm) VALUES('$userid','$email','$mobile','$pass','$confirm')");
if (!$result)
  {
  die(' ' . mysql_error());
  }
echo "1 record added";
header("location: login page.php");
mysqli_close($con);
?>