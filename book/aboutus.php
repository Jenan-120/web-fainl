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
padding-left: 50px;
padding-right:50px;
font-family: 'Tajawal', sans-serif;
box-sizing: border-box;
}
/* nav bar */
header{
/*position: fixed;*/
top: 0;
left: 300px;
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
width: 80%;
display: flex;
justify-content: space-between;
align-items: center;
transition: 0.6s;
padding: 40px 100px;
z-index: 100000;
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

<!-- <li><a href="restaurants.php" style="font-size: 20px;">المطاعم</a></li> -->
<li><a href="home.php" style="font-size: 20px;">الصفحه الرئيسيه </a></li>
<li><a href="profile.php" style="font-size: 20px;">الملف الشخصي</a></li>
<li><a href="logoutaboutus.php" style="font-size:20px , color=blue ">تسجيل الخروج</a></li>
<li><a href="contactus.php" style="font-size: 20px;">تواصل معنا </a></li>

    <?php  } ?>

    <?php
    if(!isset($_SESSION['user'])){?>

      <!-- <li><a href="restaurants.php" style="font-size: 20px;">المطاعم</a></li> -->
  <li><a href="home.php" style="font-size: 20px;">الصفحه الرئيسيه </a></li>
      <li><a href="register.php" style="font-size: 20px;">التسجيل  </a></li>
    <li><a href="signin.php" style="font-size: 20px;">تسجيل الدخول </a></li>
    <li><a href="contactus.php" style="font-size: 20px;">تواصل معنا </a></li>

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
    $fullname="يا"." ". $_SESSION['fn']." ".$_SESSION['ln'];
  $user=($_SESSION['user']);
  $email=$_SESSION['email'];
}else { $user=""; $fullname=""; $email="";}
 echo "<br/>"."<h1 style= 'float:right;text-align:right;'>"."نحن نسعى ".$fullname."</h1>"."<br/>"."<h2 style= 'float:right;text-align:right;'>"."أن نقدم خدمات أفضل من خلال هذا الموقع , عن طريق حجز موعدك الخاص مع مكان الجلوس في المطعم وأيضا اختيار طلبك كامل وأيضا طلب اضافات في حالات المناسبات الخاصه وستجد كل طلباتك واحتياجاتك التي طلبتها بين يديك فور وصولك للمطعم"."<h2>";
    ?>


<!--adding footer-->


<script src="js/jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/validator/validator.min.js"></script>



</body>
</html>
