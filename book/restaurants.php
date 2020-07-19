<?php

session_start();
include('connection.php');
?>

<html>
<head>
  <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>restaurant</title>
    <style>

body{
  background-image: url(./img/background.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  margin-top: 90px;
  margin-right: 200px;
  margin-left: 200px;
  font-family: 'Mada', sans-serif;
}
/* nav bar */
header{
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
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
  letter-spacing: 2px;
  font-weight: 500px;
  transition: 0.6s;
}
.banner{
  position: relative;
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  transition: 0.6s;
  padding: 40px 100px;
  z-index: 100000;
}
 /* restaurants list */
 .container {
            max-width: 500px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .container a{
            position: relative;
            display: block;
            margin: 20px 0;
            padding: 10px 30px;
            text-align: center;
            font-size: 2em;
            text-decoration: none;
            color: #fff;
            background: #3f51b5;
            box-shadow: 0 5px 10px rgba(0,0,0,0,5);
            transition: 0.5s;
        }
        .container a:hover{
            background: #e91e63;
        }
        .container a:before{
            content: '';
            position: absolute;
            top: 8px;
            left:8px;
            width: 100%;
            height: 100%;
            background: #fff;
            z-index: -1;
            transition: transform 0.5s ease-in-out;
        }
        .container a:nth-child(1):before{
            transform-origin: right;
            transform: scaleX(0);
        }
        .container a:hover:nth-child(1):before{
            transform-origin: left;
            transform: scaleX(1);
        }


        .container a:nth-child(2):before{
            transform-origin: bottom;
            transform: scaleY(0);
        }
        .container a:hover:nth-child(2):before{
            transform-origin: top;
            transform: scaleY(1);
        }

        .container a:nth-child(3):before{
            transform-origin: left;
            transform: scaleX(0);
        }
        .container a:hover:nth-child(3):before{
            transform-origin: right;
            transform: scaleX(1);
        }

        .container a:nth-child(4):before{
            transform-origin: bottom;
            transform: scaleY(0);
        }
        .container a:hover:nth-child(4):before{
            transform-origin: top;
            transform: scaleY(1);
        }

        .container a:after{
            content: '';
            position: absolute;
            top: 8px;
            left:8px;
            width: 100%;
            height: 100%;
            box-sizing: border-box;
            border: 1px solid #fff;
            z-index: -1;
            transition:  0.5 ;
            transition-delay: 0.5s;
        }
        .container a:hover:after{
           top: -8px;
           left: -8px;
        }



    </style>
</head>
<body>
  <!-- nav bar -->
  <header>
    <a href="#" class="logo"><img src="./img/logo.jpeg" style="width:120px;height:100px;"></a>
    <ul>
      <?php
      if(isset($_SESSION['user'])){?>
          <li><a href="logoutrestaurants.php" style="font-size:20px , color=blue ">تسجيل الخروج</a></li>
          <li><a href="contactus.php" style="font-size: 20px;">تواصل معنا </a></li>
          <li><a href="aboutus.php" style="font-size: 20px;">عنا </a></li>
      <li><a href="profile.php" style="font-size: 20px;">الملف الشخصي</a></li>
        <li><a href="home.php" style="font-size: 20px;">الصفحه الرئيسيه </a></li>





    <?php  } ?>

    <?php
    if(!isset($_SESSION['user'])){?>


    <li><a href="contactus.php" style="font-size: 20px;">تواصل معنا </a></li>
  <li><a href="aboutus.php" style="font-size: 20px;">عنا </a></li>
  <li><a href="register.php" style="font-size: 20px;">التسجيل  </a></li>
  <li><a href="signin.php" style="font-size: 20px;">تسجيل الدخول </a></li>
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
<br>
<br>
<br>



<!-- restaurant list -->
<div  class="d-flex flex-column bd-highlight mb-3 container">
  <a href="bhamam.php" class="p-2 bd-highlight" style="text-align: right;">مطعم برج الحمام</a>
  <a href="fsweileh.php" class="p-2 bd-highlight" style="text-align: right;">مطعم فريج صويلح </a>
  <a href="klej.php" class="p-2 bd-highlight" style="text-align: right;">مطعم الخليج الصيني</a>
  <a href="snober.php" class="p-2 bd-highlight" style="text-align: right;">مطعم الصنوبر</a>
  <a href="darhmd.php" class="p-2 bd-highlight" style="text-align: right;">مطعم دار حمد</a>
  <a href="meskamn.php" class="p-2 bd-highlight" style="text-align: right;">مطعم ميس الغانم</a>
  <a href="myar.php" class="p-2 bd-highlight" style="text-align: right;">مطعم ميار اللبناني</a>

</div>

</body>
</html>
