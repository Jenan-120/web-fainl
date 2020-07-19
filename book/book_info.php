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
position: fixed;
top: 30px;
left: 250px;
width: 90%;
display: flex;
justify-content: space-between;
align-items: center;
padding: 40px 100px;
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
.olive{
    background: rgb(39, 42, 54);
    padding-top: 20px;
    padding-left: 20px;
    width: 100%;
    height: 50%;
    border-color: white;
    border: 13px solid rgba(124, 119, 119, 0.555);
    border-radius: 6%;
}
</style>

</head>
<body >

  <header>
    <ul>
    
    
      <?php
      if(isset($_SESSION['user'])){?>

<li><a href="delete_book.php" style="font-size:20px" >الغاء الحجز</a></li>
<li><a href="logout.php" style="font-size:20px" >تسجيل الخروج</a></li>
<li><a href="contactus.php" style="font-size:20px">تواصل معنا </a></li>
<li><a href="profile.php" style="font-size:20px" >الملف الشخصي</a></li>
<li><a href="restaurants.php" style="font-size:20px">المطاعم</a></li>
<li><a href="home.php"  style="font-size:20px">الصفحه الرئيسيه </a></li>

    <?php  } ?>

    <?php
    if(!isset($_SESSION['user'])){?>
  <li><a href="restaurants.php" style="font-size:20px">المطاعم</a></li>
  <li><a href="home.php" style="font-size:20px">الصفحه الرئيسيه </a></li>
      <li><a href="register.php" style="font-size:20px">التسجيل  </a></li>
    <li><a href="signin.php" style="font-size:20px">تسجيل الدخول </a></li>
    <li><a href="contactus.php" style="font-size:20px">تواصل معنا </a></li>

  <?php  } ?>
    </ul>
  </header>

  <section class="banner"></section>

 <br>
 <br>
 <br>
 <br>
 <br>
  </script>
  <div class="olive">
  <?php
  // $notes=$_SESSION['notes'];
if(strlen($_SESSION['notes']) == 0)
$_SESSION['notes']="لا يوجد ملاحظات";

  if(isset($_SESSION['book_id'])){
    //  echo "<h1 style= 'float:right;text-align:right;color:white;font-size:25pt;'>".":رقم الحجز ". $_SESSION['book_id']."</h1>";
     echo "<h1 style= 'float:left;text-align:center;color:white;font-size:25pt;'>".":اسم المطعم ". $_SESSION['res_name']."</h1>";
     echo "<h1 style= 'float:center;text-align:center;color:white;font-size:25pt;'>".": عدد الأشخاص ".  $_SESSION['pn']."</h1>"."<br/>";
     echo "<br/>"."<h1 style= 'float:right;text-align:right;color:white;font-size:25pt;'>".": عائلات أم مدخنين "."<br/>".  $_SESSION['smoker']."</h1>"."<br/>"."<br/>";
     echo "<hr>";
      echo "<h1 style= 'float:left;text-align:center;color:white;font-size:25pt;'>".": ملاحظات "."<br/>".  $_SESSION['notes']."</h1>"."<br/>";
      echo "<h1 style= 'float:right;text-align:left;color:white;font-size:25pt;'>".": التاريخ"."<br/>".  $_SESSION['date']."</h1>";
      echo "<h1 style= 'float:center;text-align:center;color:white;font-size:25pt;'>".": الوقت"."<br/>".  $_SESSION['time']."</h1>"."<br/>";
      echo  "<hr/>";
      echo "<h1 style= 'float:right;text-align:right;color:white;font-size:25pt;'>".": المقبلات البارده"."<br/>".  $_SESSION['ca']."</h1>";
      echo "<h1 style= 'float:left;text-align:left;color:white;'font-size:25pt;'>".": المقبلات الحاره"."<br/>".  $_SESSION['ha']."</h1>";
      echo "<h1 style= 'float:center;text-align:center;color:white;font-size:25pt;'>".": الطبق الرئيسي"."<br/>".  $_SESSION['mp']."</h1>"."<br/>";
      echo "<h1 style= 'float:center;text-align:center;color:white;font-size:25pt;'>".": المشروبات"."<br/>".  $_SESSION['drinks']."</h1>"."<br/>";

  $user=($_SESSION['user']);
  $email=$_SESSION['email'];
}

    ?>

</div>
<!--adding footer-->


<script src="js/jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/validator/validator.min.js"></script>



</body>
</html>
