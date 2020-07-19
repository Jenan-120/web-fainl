<html>
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>home</title>
    <style>
  body {
  background-image:url(./img/background.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  margin: 0;
  padding: 0;
  font-family: 'Tajawal', sans-serif;
  box-sizing: border-box;
}
/* nav bar */
header{
  position: fixed;
  top: 0;
  left: 0;
  width: 90%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 40px 100px;
  transition: 0.6s;
}
header .logo{
  position: relative;
  font-weight: 700;
  color:#fff;
  text-decoration: none;
  font-size: 2em;
  text-transform: uppercase;
  letter-spacing: 2px;
  transition: 0.6s;
}
header ul {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}
header ul li {
  position: relative;
  list-style: none;
}
header ul li a {
  position: relative;
  margin: 0 15px;
  text-decoration: none;
  color:  #fff;
  letter-spacing: 4px;
  font-weight: 500px;
  transition: 0.6s;
}
.banner{
  position: relative;
  width: 70%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  transition: 0.6s;
  padding: 40px 100px;
  z-index: 100000;
}
    </style>
</head>
<body>




     <!-- nav bar -->
  <header>
    <a href="#" class="logo"><img src="./img/logo.jpeg" style="width:120px;height:100px;"></a>
    <ul>
      <!-- <li><a href="#">الرئيسيه </a></li> -->
      <li><a href="signin.php"  style="font-size: 20px;">تسجيل الدخول </a></li>
      <li><a href="contactus.php" style="font-size: 20px;">تواصل معنا </a></li>
      <li><a href="aboutus.php" style="font-size: 20px;">عنا </a></li>
    </ul>
  </header>
  <section class="banner"></section>
  <script type="text/javascript">
     window.addEventListener("scroll",function(){
       var header = document.querySelector("header");
       header.classList.toggle("sticky",window.scrollY> 0);
     })

  </script>

<div class="container"></br></br>


<div class="jumbotron " >
<p><h2></h2></p>
<p><h4></h4></p>
<p><h3>



<?php

include('connection.php');
session_start();
$email=$_POST['email'];
$username=$_POST['username'];



//$connect= mysqli_connect("localhost","ymuoomey" ,"saitoh2010","test tree" ) or die (mysqli_error());
//mysqli_select_db($connect ,"test tree") or die("cannot select DB");

$query=mysqli_query($connect,"SELECT * FROM personal_info WHERE user_name='$username' OR email='$email'");
$numrows = mysqli_num_rows($query);
if($numrows !=0){


		$_SESSION['er'] = '<span style="color:red;text-align:right;">existing user name or email!!!</span>';
header("Location:register.php");
exit();

}
	//echo "existing user name or email";
else
{
$password=(md5($_POST['password']));
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$phone = $_POST['phone'];
//$defult_picture ="<img width='100' height='100' src='pictures/default-profile.PNG' alt='defualt' >";
$sql = "INSERT INTO personal_info
VALUES ('','$username', '$firstname','$lastname', '$email','$phone','$password','')";
if (mysqli_query($connect, $sql)) {
    echo "تم التسجيل بنجاح";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
	session_destroy();
}
}

?>





  </h3></p>
  <p><h3>اذهب الى صفحة تسجيل الدخول</h3></p>
  <p><h2><a  href="signin.php">تسجيل الدخول</a><h2></p>
</div></div>

<script src="js/jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</div>
</body>
