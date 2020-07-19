<?php

session_start();
include('connection.php');
?>
<html>
<head>
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
<body>

  <script>
    document.querySelector('body')
    .addEventListener('mousemove' , eyeball);
    function eyeball(){
    var eye = document.querySelectorAll
    ('.eye');
    eye.forEach(function(eye){
        let x = (eye.getBoundingClientRect()
        .left) + (eye.clientWidth / 2);
        let y = (eye.getBoundingClientRect()
        .top) + (eye.clientHeight / 2);
        let radian = Math.atan2(event.pageX -
        x, event.pageY - y );
        let rot = (radian * (180 / Math.PI) *
        -1) + 20 ;
        eye.style.transform = "rotate("+rot
        +"deg)";
    })
    }
   </script>

  <div class="white" >

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
          <li><a href="logouthome.php" style="font-size:20px , color=blue ">تسجيل الخروج</a></li>
          <li><a href="contactus.php" style="font-size: 20px;">تواصل معنا </a></li>
          <li><a href="aboutus.php" style="font-size: 20px;">عنا </a></li>
      <li><a href="profile.php" style="font-size: 20px;">الملف الشخصي</a></li>
      <!-- <li><a href="restaurants.php" style="font-size: 20px;">المطاعم</a></li> -->




    <?php  } ?>

    <?php
    if(!isset($_SESSION['user'])){?>


    <li><a href="contactus.php" style="font-size: 20px;">تواصل معنا </a></li>
    <li><a href="aboutus.php" style="font-size: 20px;">عنا </a></li>
    <li><a href="register.php" style="font-size: 20px;">التسجيل  </a></li>
    <li><a href="signin.php" style="font-size: 20px;">تسجيل الدخول </a></li>
    <!-- <li><a href="restaurants.php" style="font-size: 20px;">المطاعم</a></li> -->

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

  <center>

<br>
<br>

<div>
<span style="font-size: 40pt;color:white;background-color:gba(107, 107, 107, 0.726);text-align: center;background-color: #414040c4;margin-top: 10px; "> "مرحبا بكم في"اختار </span>
<br>
 <a href="restaurants.php" style="font-size:20pt ;color:white ;text-align: center;">أختر مطعمك وإحجز طاولتك</a>

<?php

if(isset($_SESSION['book_error'])){
echo $_SESSION['book_error'];
unset( $_SESSION['book_error']);
unset( $_SESSION['book_id']);

 }

 ?>
</div>
<br>

<div class="face">
  <div class="eyes">
      <div class="eye"></div>
      <div class="eye"></div>
  </div>
</div>

</center>
</div>
</body>
