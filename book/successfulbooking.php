<?php
session_start();

include('connection.php');
?>

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
      <?php
      if(isset($_SESSION['user'])){?>

        <li><a href="logouthome.php" style="font-size:20px , color=blue ">تسجيل الخروج</a></li>
          <li><a href="profile.php" style="font-size:20px , color=blue ">الحساب الشخصي</a></li>
        <li><a href="home.php" style="font-size: 20px;">الصفحه الرئيسيه </a></li>
    <?php  } ?>

    <?php
    if(!isset($_SESSION['user'])){

      session_destroy();
      header('location:home.php');

  } ?>
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
<p>



  <?php


  $email=$_SESSION['email'];
  $username=$_SESSION['user'];



  $cold_appetizers="";
  $hot_appetizers="";
  $maine_plate="";
  $salad="";
  $drinks="";
if(isset($_POST['submit'])){
  if(!empty($_POST['cold_appetizers'])) {
      foreach($_POST['cold_appetizers'] as $selected){
  $cold_appetizers .='  ,' ." ".$selected;
      }
    }
      if(!empty($_POST['hot_appetizers'])) {
        foreach($_POST['hot_appetizers'] as $selected){
    $hot_appetizers .='  ,' ." ".$selected;
        }
      }
      if(!empty($_POST['maine_plate'])) {
          foreach($_POST['maine_plate'] as $selected){
     $maine_plate .='  ,' ." ".$selected;
          }
        }
        if(!empty($_POST['salad'])) {
            foreach($_POST['salad'] as $selected){
        $salad .='  ,' ." ".$selected;
            }
          }
          if(!empty($_POST['drinks'])) {
              foreach($_POST['drinks'] as $selected){
          $drinks .='  ,' ." ".$selected;
              }
            }}
        //  echo $cold_appetizers." <br>    ".$hot_appetizers."     ".$maine_plate."     ".$salad."     ".$drinks;
  $resturantname="برج الحمام";
  $persons_number=$_POST['persons_number'];
  $date=$_POST['date'];
  $time=$_POST['time'];
  $smoker=$_POST['smoker'];
  $position=$_POST['position'];
  $notes=$_POST['notes'];
  $time=$_POST['time'];


  $query=mysqli_query($connect,"SELECT * FROM booking WHERE user_name='$username' ");
  $numrows = mysqli_num_rows($query);
  if($numrows !=0){


      $_SESSION['book_error'] = '<span style="color:red;text-align:right;" ><h3>يوجد عندك حجز مسبق , لا يمكنك حجز أكثر من حجز في آن واحد</h3></span>';
  header("Location:home.php");
  exit();

  }
  else{
  $sql = "INSERT INTO booking
  VALUES ('','$username', '$resturantname','$position', '$persons_number','$smoker','$notes','$date','$time','$cold_appetizers','$hot_appetizers','$maine_plate','$salad','$drinks')";
  if (mysqli_query($connect, $sql)) {
      echo "تمت اضافة طلبك بنجاح";


  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($connect);
  	session_destroy();
  }


  $username =$_SESSION['user'];

   $query=mysqli_query($connect,"SELECT * FROM booking WHERE user_name='$username'  ");

   $check = mysqli_num_rows($query);
   if($check !=0)
   {

   	//$_SESSION['user']=$username;
   	//header('location:index.php');
   	while ($row=mysqli_fetch_assoc($query))
   {
  	 $dbbookid=$row['book_id'];
     $dbresname=$row['resturant_name'];
     $dbnumofperson=$row['persons_number'];
     $dbsmoker = $row['smoker'];
     $dbnotes = $row['notes'];
     $dbdate=$row['date'];
     $dbtime=$row['time'];
     $dbcoldappetizer=$row['cold_appetizers'];
     $dbhotappetizer=$row['hot_appetizers'];
     $dbmaineplate = $row['maine_plate'];
     $dbsalad = $row['salad'];
     $dbdrinks=$row['drinks'];
   }
   //$user=$row['user_name'];

   //$username=$row['user_name'];
   $_SESSION['book_id']=$dbbookid;
   $_SESSION['res_name']= $dbresname;
   $_SESSION['pn']= $dbnumofperson;
   $_SESSION['smoker']=$dbsmoker;
   $_SESSION['notes']=$dbnotes;
   $_SESSION['date']=$dbdate;
   $_SESSION['time']=$dbtime;
   $_SESSION['ca']=$dbcoldappetizer;
   $_SESSION['ha']=$dbhotappetizer;
   $_SESSION['mp']=$dbmaineplate;
   $_SESSION['salad']=$dbsalad;
   $_SESSION['drinks']=$dbdrinks;
   //	echo "<br>".$_SESSION['fn'];

   	//header('location:signin.php');

   }

    else {
   	//session_destroy();
   	$_SESSION['error'] = '<span style="color:red;text-align:right;">no book exist!!!</span>';
   header("Location:signin.php");
   exit();



    }
}
  ?>





  </h3></p>
  <p><h3>اذهب الى صفحة الحجز لترى تفاصيل حجزك</h3></p>

  <?php

  if(isset($_SESSION['book_id'])){?>

<li><a href="book_info.php" style="font-size:20px , color=blue ">تفاصيل الحجز</a></li>
  <?php  } ?>


</div></div>

<script src="js/jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>
