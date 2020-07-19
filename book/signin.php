<?php

session_start();
?>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
  <title>home</title>
    <style>
  body{
        background-image:url(./img/background.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  font-family: 'Tajawal', sans-serif;
  margin-top: 90px;
  margin-right: 200px;
  margin-left: 200px;
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

<!-- <?php
 
 if(isset($_SESSION['!=0'])){?>

<?php  } ?> -->


     <!-- nav bar -->
  <header>
    <a href="#" class="logo"><img src="./img/logo.jpeg" style="width:120px;height:100px;"></a>
    <ul>

      <?php

      if(isset($_SESSION['book_id'])){?>

    <li><a href="book_info.php" style="font-size:20px , color=blue ">تفاصيل الحجز</a></li>
      <?php  } ?>

      <?php
      if(isset($_SESSION['user'])){?>
        <li><a href="logout.php" style="font-size:20px , color=blue ">تسجيل الخروج</a></li>
        <li><a href="contactus.php" style="font-size: 20px;">تواصل معنا </a></li>
        <li><a href="aboutus.php" style="font-size: 20px;">عنا </a></li>
        <li><a href="profile.php" style="font-size: 20px;">الملف الشخصي</a></li>
        <li><a href="restaurants.php" style="font-size: 20px;">المطاعم</a></li>
        <li><a href="home.php" style="font-size: 20px;">الصفحه الرئيسيه </a></li>

    <?php  } ?>

    <?php
    if(!isset($_SESSION['user'])){?>
      <li><a href="contactus.php" style="font-size: 20px;">تواصل معنا </a></li>
      <li><a href="aboutus.php" style="font-size: 20px;">عنا </a></li>
      <li><a href="register.php" style="font-size: 20px;">التسجيل  </a></li>
    <li><a href="signin.php" style="font-size: 20px;">تسجيل الدخول </a></li>
    <li><a href="restaurants.php" style="font-size: 20px;">المطاعم</a></li>
    <li><a href="home.php" style="font-size: 20px;">الصفحه الرئيسيه </a></li>


  <?php  } ?>
    </ul>
  </header>

  <section class="banner"></section>

  <script type="text/javascript">
     window.addEventListener("scroll",function(){
       var header = document.querySelector("header");
       header.classList.toggle("sticky",window.scrollY> 0);
     })

  </script>

  <?php
if(isset($_SESSION['user'])){ ?>

<!-- <form data-toggle="validator" role="form" method="POST" action="logout.php">
 <button type="submit" class="btn btn-success">sign out</button> -->
<?php if(isset($_SESSION['user'])){
   echo "<br/>"."<h1 style= 'float:right;text-align:right;'>"."مرحبا بك يا ".$_SESSION['fn']." ".$_SESSION['ln']."</h1>"."<br/>"."<h3 style= 'float:right;text-align:right;'>"."تستطيع الآن الدخول على صفحة الحساب الشخصي لحجز مطعمك أو لتغير بيانات الحساب الشخصي"."<h3>";



}
if(isset($_SESSION['book_id'])){
echo "<h1 style= 'float:right;text-align:right;'>"."يوجد هناك حجز باسمك رقمه"."<br/>".$_SESSION['book_id']."<br/>"."في مطعم"."<br/>".$_SESSION['res_name']."<br/>"."بتاريخ".$_SESSION['date']."</h1>";

}


?>
<!-- </form> -->

<?php } else {?>

<form data-toggle="validator" role="form" method="POST" action="login.php">

  <div class="form-group">
    <label for="email" >user name</label>
	<div class="input-group">
  <span class="input-group-addon "><span class="glyphicon glyphicon-user "></span></span>
  <input type="text" class="form-control" id="username" name="username" placeholder="Enter your user name" required />
  </div></div>


  <div class="form-group">
    <label for="password">Password</label>
   <div class="input-group">
  <span class="input-group-addon "><span class="glyphicon glyphicon-star"></span></span>
  <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" data-minlength="8" required />
  </div></div>


  <hr/>
 <!-- <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span>back</button>-->
  <button type="submit" class="btn " name="submit" ><span class="glyphicon glyphicon-log-in"></span>  sign in</button>
  <div class="forgot-password ">
  <!--<a  class="tree" href="#">forget your password?</a>-->
  <div>or</div>
  <a    href="register.php"><h4>register</h4></a>


</form>

<?php } ?>
<?php if(isset($_SESSION['error'])){
   echo $_SESSION['error'];
   unset( $_SESSION['error']);
   session_destroy();
}
?>

</div>
 </div>

</div>
</div>

<script src="js/jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/validator/validator.min.js"></script>

</body>
