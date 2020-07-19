<?php
session_start();

include('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet">
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
span{
text-align:center;
}
/* nav bar */
header{

/*position: fixed;*/
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
form{
  margin-left:150px;
  margin-right:150px;
}

</style>

</head>
<body >

  <header>
    <a href="#" class="logo"><img src="./img/logo.jpeg" style="width:120px;height:100px;"></a>
    <ul>

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


  <div class= "panel-body">
<?php

if(isset($_SESSION['er'])){
   echo $_SESSION['er'];
   unset( $_SESSION['er']);
   session_destroy();
}
?>
<form  data-toggle="validator" role="form" method="POST" action="successfulsignup.php">

<div class="form-group">
<div class="row padding-top-10">
<div class="col-md-4"></div>

<div class="col-md-1">
<div class="form-group">
    <label class="radio-inline">
	<div class="input-group">
  </label>
  </div></div></div>
 <div class="col-md-1">
 <div class="form-group">
<label class="radio-inline">
<div class="input-group">
</label>

</div>
</div>
</div>
</div>
</div>


</br>


  <div class="form-group">
    <label for="Name" class="control-label"></label>
	<div class="row padding-top-10">
	<div class="col-md-12">
    <input type="text" class="form-control " id="username" name="username" placeholder="ادخل اسم المستخدم" required /></div>

  </div>
	</div>

  <div class="form-group">
    <label for="name" class="control-label"></label>
	<div class="row padding-top-10">
	<div class="col-md-6">
    <input type="text" class="form-control" id="name" name="firstname" placeholder="الاسم الاول" required />
	</div>
	<div class="col-md-6">
  <input type="text" class="form-control" id="lastname" name="lastname" placeholder="الاسم الاخير" required />
  </div>
  </div>
	</div>


 <div class="form-group">
    <label for="email" class="control-label"></label>
    <input type="email" class="form-control" id="email" name="email" placeholder="البريد الاكتروني" data-error="that email address is invalid" required>
    <div class="help-block with-errors"></div>
  </div>

 <br>

  <div class="row padding-top-10">
  <div class="col-md-6">
  <input type="text" data-minlength="8" class="form-control" id="phone" name="phone" placeholder=" رقم الهاتف  " required/>
  </div>

  <br>
  <br>

	<div class="form-group">
 <div class="row padding-top-10">
  <div class="col-md-6">
  <label for="password" class="control-label"></label></div>
  <div class="col-md-6">
  <label for="confirmpassword" class="control-label"> </label>
  </div></div>
  <div class="row padding-top-10">
  <div class="col-md-6">
  <input type="password" data-minlength="8" class="form-control" id="password" name="password" placeholder=" ادخل كلمه المرور  " required/>
  <div class="help-block"> 8 الحد الادنى</div></div>
  <div class="col-md-6">
  <input type="password" data-minlength="8" class="form-control" id="confirmpassword"  data-match="#password" data-match-error="للأسفو كلمة المرور لاتتطابق" placeholder="اعد كلمة المرور" required/>
  <div class="help-block with-errors"></div>
  </div>
 </div></div></div>


  <button type="submit" name="submit"  >تسجيل</button>
  </form>
</div>
  <script src="js/jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/validator/validator.min.js"></script>


</body>
</html>
