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
/* emoji */
.face{
position: relative;
width: 300px;
height: 300px;
border-radius: 50%;
background: #ffcd00;
display: flex;
justify-content: center;
align-items: center;
}
.face::before{
content: '';
position: absolute;
top: 180px;
width: 150px;
height: 70px;
background: #b57700;
border-bottom-left-radius: 70px;
border-bottom-right-radius: 70px;
transition: 0.5s;
}
.face:hover::before{
top: 210px;
width: 150px;
height: 20px;
background: #b57700;
border-bottom-left-radius: 0px;
border-bottom-right-radius: 0px;
}
.eyes{
position: relative;
top: -40px;
display: flex;
border-radius: 50%;
}
.eyes .eye {
position: relative;
width: 80px;
height: 80px;
display:block;
background:#fff;
margin: 0 15px;
border-radius: 50%;
}
.eyes .eye::before{
content: '';
position: absolute;
top: 50%;
left: 25px;
transform: translate(-50% -50%);
width: 40px;
height: 40px;
background: #333;
border-radius: 50%;
}

</style>

</head>
<body >

  <header>
    <a href="#" class="logo"><img src="./img/logo.jpeg" style="width:120px;height:100px;"></a>
    <ul>

      <?php

      if(isset($_SESSION['book_id'])){?>

  <li><a href="book_info.php" style="font-size:20px , color=blue ">تفاصيل الحجز</a></li>
      <?php  } ?>
      <?php
      if(isset($_SESSION['user'])){?>

        <li><a href="logoutcontactus.php" style="font-size:20px , color=blue ">تسجيل الخروج</a></li>
        <li><a href="aboutus.php" style="font-size: 20px;">عنا </a></li>
        <li><a href="profile.php" style="font-size: 20px;">الملف الشخصي</a></li>
          <li><a href="restaurants.php" style="font-size: 20px;">المطاعم</a></li>
        <li><a href="home.php" style="font-size: 20px;">الصفحه الرئيسيه </a></li>

    <?php  } ?>

    <?php
    if(!isset($_SESSION['user'])){?>

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
  if(isset($_SESSION['user'])){
    $fullname= $_SESSION['fn']." ".$_SESSION['ln'];
  $user=($_SESSION['user']);
  $email=$_SESSION['email'];
}else { $user="اسم المستخدم"; $fullname="الاسم"; $email="ادخل البريد الالكتروني";}

    ?>


  <div class="container">
  <div class="row">
  <div class="col-md-4">
  <div class="panel  " style="margin-top:30px; ">
  <div class="jumbotron ">
  <h2>لأي استفسار أو مشكله في الموقع تواصل معنا , مع تحيات مصمم الموقع جنان الهندي</h2>

  <hr/>


  </div></div></div>
  <div class="col-md-8">
  <div class="panel " style="margin:30px; padding:20px;" >
  <div class="jumpotron ">
  <form class="form-horizontal " method="POST" action="sendingemail.php" role="form" id="contactform">
    <div class="form-group ">
      <label for="contactname" class="col-sm-2 control-label">name</label>
  	<div class="col-sm-10">
      <input type="text" class="form-control" id="contactname" name="contactname" placeholder="<?php echo $fullname; ?>">

    </div></div>
    <div class="form-group">
      <label for="contactemail" class="col-sm-2 control-label">Email Address</label>
  	<div class="col-sm-10">
      <input type="email" class="form-control" id="contactemail" name="contactemail" placeholder="<?php echo $email; ?>">
    </div></div>
     <div class="form-group">
      <label for="contactsubject" class="col-sm-2 control-label">subject</label>
  	<div class="col-sm-10">
      <input type="text" class="form-control" id="contactsubject" name="contactsubject" placeholder="enter subject">
    </div></div>

     <div class="form-group">
      <label for="contactmessage" class="col-sm-2 control-label">message</label>
  	<div class="col-sm-10">
      <textarea class="form-control" id="contactmessage" name="contactmessage"></textarea>
    </div></div>

    <div class="form-group">
    <div class="col-sm-10 col-md-offset-2">
    <button type="button" class="btn btn-default" id="contactbtn">Submit</button>
    </div></div>
    </form>

  </div>
  </div>
  </div>
  </div></div>
  <br/><br/>












<!--adding footer-->


<script src="js/jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/validator/validator.min.js"></script>



</body>
</html>
