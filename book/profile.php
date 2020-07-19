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
  margin:80px;
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


        <li><a href="logout.php" style="font-size:20px , color=blue ">تسجيل الخروج</a></li>
       <li><a href="contactus.php" style="font-size: 20px;">تواصل معنا </a></li>
        <li><a href="aboutus.php" style="font-size: 20px;">عنا </a></li>
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






<div class="containr">
<p><br/></p>
<div class="row" >
<div class="col-md-1"></div>
<div class="col-md-9">
<!-- <div class="panel panel-body "> -->


<?php

if(isset($_SESSION['user'])){
	//include('connection.php');
	$user=$_SESSION['user'];
	$query = mysqli_query($connect , "select * from personal_info WHERE user_name='$user' ");
	/*while($row = mysqli_fetch_assoc($query)){
		$_SESSION['img']=$row['img'];
	echo "<img width='100' height='100' src='pictures/".$_SESSION['img']."' alt='defualt err' >";
}*/









echo "<h3 style= 'float:right;text-align:right;'>"."<div style= color:white;>".$_SESSION['user']." : اسم المستخدم "."</div>"."</h3>";

	echo  "<h3 style= 'float:left;text-align:left;'>"."<div style= color:white;>"."  الاسم الكامل"." : ".$_SESSION['fn']." ".$_SESSION['ln']."</div>"."</h3>";
  echo "<h3 style= 'float:center;text-align:center;'>"."<div style= color:white;>".":عنوان البريد الالكتروني" ."<br/>". $_SESSION['email']."</div>"."</h3>";

	//echo "id : ".$_SESSION['user_id'];
	echo "<hr>";
	echo "   <h1 style= 'float:center;text-align:center;color:white;'>:تعديل الملف الشخصي </h1>";

	?>


 <form data-toggle="validator" role="form" method="POST" action="updateprofile.php">
   <div class="form-group">
    <label for="firstname" class="control-label"><div style= color:white;> تعديل الاسم الأول</div></label>
	<div class="row padding-top-10">
	<div class="col-md-12">
    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="الاسم الأول" required /></div>
	 </div>

	</div>
	<button type="submit" name="changefn" class="btn " >حفظ التغيرات</button>
	<div class="col-md-12"><br/></div>
	</form>
	<?php
if(isset($_SESSION['fn_success'])){
	echo $_SESSION['fn_success'];
	unset ($_SESSION['fn_success']);
}
elseif(isset($_SESSION['fn_error'])){
	echo $_SESSION['fn_error'];
	unset ($_SESSION['fn_error']);
}


	?>

	 <form data-toggle="validator" role="form" method="POST" action="updateprofile.php">
   <div class="form-group">
    <label for="lastname" class="control-label"><div style= color:white;> تعديل الاسم الأخير</div></label>
	<div class="row padding-top-10">
	<div class="col-md-12">
    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="الاسم الأخير" required /></div>
	 </div>
	</div>
	<button type="submit"  name="changeln" class="btn " >حفظ التغيرات</button>
	<div class="col-md-12"><br/></div>
	</form>

		<?php
if(isset($_SESSION['ln_success'])){
	echo $_SESSION['ln_success'];
	unset ($_SESSION['ln_success']);
}
elseif(isset($_SESSION['ln_error'])){
	echo $_SESSION['ln_error'];
	unset ($_SESSION['ln_error']);
}
?>





<form data-toggle="validator" role="form" method="POST" action="updateprofile.php">
<div class="form-group">
<div class="row padding-top-10">
  <div class="col-md-6">
  <label for="password" class="control-label"><div style= color:white;> تغيير الرقم السري</div></label></div>
  <div class="col-md-6">
  <label for="confirmpassword" class="control-label"><div style= color:white;> تأكيد الرقم السري الجديد</div></label>
  </div></div>
  <div class="row padding-top-10">
  <div class="col-md-6">
  <input type="password" data-minlength="8" class="form-control" id="password" name="password" placeholder="أدخل الرقم السري" required/>
  <div class="help-block" style="color:black;">أقل شيء 8 أرقام</div>
  </div>
  <div class="col-md-6">
  <input type="password"  class="form-control" id="confirmpassword"  data-match="#password" data-match-error="للأسفو كلمة المرور لاتتطابق" placeholder="اعد كتابة الرقم السري" required/>
  <div class="help-block with-errors"></div>
    </div></div></div>
	<button type="submit" name="changepassword" class="btn " >حفظ التغيرات</button>
	<div class="col-md-12"><br/></div>
	</form>
			<?php
if(isset($_SESSION['password_success'])){
	echo $_SESSION['password_success'];
	unset ($_SESSION['password_success']);
}
elseif(isset($_SESSION['password_error'])){
	echo $_SESSION['password_error'];
	unset ($_SESSION['password_error']);
}
?>






<form data-toggle="validator" role="form" method="POST" action="updateprofile.php">
  <div class="form-group">
   <label for="phone" class="control-label"><div style= color:white;> تغيير رقم الهاتف</div></label>
 <div class="row padding-top-10">
 <div class="col-md-12">
   <input type="text" class="form-control" id="phone" name="phone" placeholder="ادخل رقم الهاتف الجديد" required /></div>
  </div>

 </div>
 <button type="submit" name="change_phone" class="btn " >حفظ التغيرات</button>
 <div class="col-md-12"><br/></div>
 </form>
 <?php
if(isset($_SESSION['ph_success'])){
 echo $_SESSION['ph_success'];
 unset ($_SESSION['ph_success']);
}
elseif(isset($_SESSION['ph_error'])){
 echo $_SESSION['ph_error'];
 unset ($_SESSION['ph_error']);
}
 ?>

<?php  }



  else { session_destroy();?>



<?php } ?>


<!--</div>-->
</div>
</div>
</div>







<!--adding footer-->


<script src="js/jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/validator/validator.min.js"></script>



</body>
</html>
