<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Mada:wght@500&display=swap" rel="stylesheet">
    <title>fsweileh</title>
    <style>

body {
  background-image:url(./img/background.jpg); 
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-size: cover;
  margin-top: 90px;
  margin-right: 200px;
  margin-left: 200px;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  font-family: 'Mada', sans-serif;
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
/* swiper */
.swiper-container {
  width: 100%;
  padding-top: 50px;
  padding-bottom: 200px;
}

.swiper-slide {
  background-position: center;
  background-size: cover;
  width: 300px;
  height: 300px;
 }
   /* menu */
.container{
  max-width: 1000px;
  margin: 100px auto;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
 }
.card{
  position: relative;
  margin: 60px 0;
  width: 400px;
  height: 600px;
  background: rgb(236, 229, 195);
  transform-style: preserve-3d;
  transform: perspective(2000px);
  transition: 1s;
  box-shadow: inset 300px 0 50px rgba(0, 0, 0, 0.24);
 }
.card:hover{
  z-index: 1000;
  transform: perspective(2000px) rotate(-10deg);
  box-shadow: inset 20px 0 50px rgba(0,0,0,.5);
 }
.card .imgBox {
  position: relative;
  width: 100%;
  height: 100%;
  border: 1px solid #000;
  box-sizing: border-box;
  transform-origin: left;
  z-index: 1;
  transition: 1s;
 }
.card:hover .imgBox {
  transform: rotateY(-135deg);
 }
.card .imgBox .img {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
 }
.card .details {
  position: absolute;
  top: 0;
  left: 0;
  box-sizing: border-box;
  padding: 20px;
  }
  table {
  border-collapse: collapse;
  width: 100%;
}
th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
pre{
  font-size: 15pt;
  color: black;
  font-style:bold;
  font-family:aril;
}

</style>
</head>
<body>

    <!-- nav bar -->
  <header>
    <a href="./home.html" class="logo"><img src="./img/logo.jpeg" style="width:120px;height:100px;"></a>
    <ul>
      <li><a href="./restaurants.php"  style="font-size: 20px;">المطاعم</a></li>
      <li><a href="./profile.php"  style="font-size: 20px;">الحساب الشخصي</a></li>
      <li><a href="./contactus.php" style="font-size: 20px;">تواصل معنا </a></li>
      <li><a href="aboutus.php" style="font-size: 20px;">عنا </a></li>
    </ul>
  </header>
 
<br>
<br>

 <h1 style=" color:rgb(36, 29, 80);font-size:30pt;text-align: center;">:[فريج صويلح]</h1>

 

 <?php
if(!isset($_SESSION['user'])){
   ?>
  <div style= 'float:center;text-align:center' ><a href="formf.php"><h2 style="color:white;font-size:30pt;">احجز الآن</h2></a></div>
      <?php  } ?>
 <div  class="d-flex flex-column bd-highlight mb-3 container">
<p class="p-2 bd-highlight" style=" color:rgb(36, 29, 80);font-size:20pt;text-align: right;">:الموقع</p>
</div>
<div style="display: flex;flex-wrap: wrap;justify-content: space-around;">
  <h4>بالقرين</h4>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d111409.32992138038!2d48.11188758476519!3d29.237036269325703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcfa1441ff045a5%3A0xcc84e9ae21408b7!2z2YHYsdmK2Kwg2LXZiNmK2YTYrSDYp9mE2YLYsdmK2YY!5e0!3m2!1sar!2skw!4v1595162643152!5m2!1sar!2skw" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

  <h4>المباركية</h4>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d445635.4093075271!2d48.322043076117936!3d29.237475081879747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf84e8b24fa11f%3A0x174ca2def224cdab!2z2YXYt9i52YUg2YHYsdmK2Kwg2LXZiNmK2YTYrSDYp9mE2YXYqNin2LHZg9mK2Kk!5e0!3m2!1sar!2skw!4v1595162866813!5m2!1sar!2skw" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
<div  class="d-flex flex-column bd-highlight mb-3 container">
<p class="p-2 bd-highlight" style=" color:rgb(36, 29, 80);font-size:20pt;text-align: right;">:اطلالات وصور المطعم </p>
</div>

  <div class="swiper-container">
    <div class="swiper-wrapper">
    <div class="swiper-slide" ><img src="./img/fsw1.jpg" style="width: 300px;height: 300px;"></div>
    <div class="swiper-slide" ><img src="./img/fsw2.jpg"  style="width:300px;height: 300px;"></div>
    <div class="swiper-slide" ><img src="./img/fsw3.jpg" style="width: 300px;height: 300px;"></div>
    <div class="swiper-slide" ><img src="./img/fsw5.jpg" style="width: 300px;height: 300px;"></div>
    <div class="swiper-slide" ><img src="./img/fsw6.jpg" style="width: 300px;height: 300px;"></div>
    <div class="swiper-slide" ><img src="./img/fsw7.jpg" style="width: 300px;height: 300px;"></div>
  </div>
        


     <!--  Pagination -->
     <div class="swiper-pagination"></div>
    </div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
      var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
          rotate: 20,
          stretch: 0,
          depth: 600,
          modifier: 1,
          slideShadows: true,
        },
       loop:true,
       autoplay:{
         delay:600,
         disableOnInteraction:false,
       },
      });
    </script>
    <br>
    <br>
<div  class="d-flex flex-column bd-highlight mb-3 container">
<p class="p-2 bd-highlight" style=" color:rgb(36, 29, 80);font-size:20pt;text-align: right;">:قائمه الطعام واسعارها </p>
</div>
<tr>
 <td>   
<div class="container">
<div class="card">
<div class="imgBox">
<img src="./img/raas.png" style="width: 400px;height: 600px;">
</div>
<div class="details">
     <h2 style="text-align: center;"><b>الأطباق الرئيسية</b></h2>
     <table>
      <tr>
          <td><p>مجبوس دجاج</p></td>
          <td><p> د.ك 2.000</p></td>
        </tr>
        <tr>
          <td><p>مجبوس لحم </p></td>
          <td><p> د.ك 3.750</p></td>
        </tr>
        <tr>
          <td><p>مطبق زبيدي</p></td>
          <td><p>د.ك 4.500</p></td>
        </tr>
        <tr>
          <td><p>مطبق هامور</p></td>
          <td><p>د.ك 4.250</p></td>
        </tr>
        <tr>
          <td><p>مموش ربيان  </p></td>
          <td><p>0.700د.ك</p></td>
        </tr>
        <tr>
          <td><p>مموش ربيان يابس</p></td>
          <td><p>0.700د.ك</p></td>
        </tr>
        <tr>
          <td><p>مربين</p></td>
          <td><p>3.500د.ك</p></td>
        </tr>
        <tr>
          <td><p>برياني روبيان </p></td>
          <td><p> د.ك 3.250</p></td>
        </tr>
        <!-- <tr>
          <td><p>مرق لحم مع عيش ابيض </p></td>
          <td><p>3.700د.ك</p></td>
        </tr>
        <tr>
          <td><p>مرق دجاج مع عيش ابيض د</p></td>
          <td><p>2.750د.ك</p></td>
        </tr> <tr>
          <td><p>كبه لبن </p></td>
          <td><p>1.500د.ك</p></td>
        </tr>
        <tr>
          <td><p>مرقوق</p></td>
          <td><p>1.250د.ك</p></td>
        </tr> -->
  </table>
</div></div>
<td>
<td>
<div class="card">
<div class="imgBox">
<img src="./img/mshrob.png" style="width: 400px;height: 600px;">
</div>
<div class="details">
 <h2 style="text-align: center;"><b>المشويات</b> </h2>
 <table>
  <tr>
      <td><p>كباب صويلح </p></td>
      <td><p> د.ك 2.000</p></td>
    </tr>
    <tr>
      <td><p>كباب </p></td>
      <td><p> د.ك 3.750</p></td>
    </tr>
    <tr>
      <td><p>شيش طاووق  </p></td>
      <td><p>د.ك 4.500</p></td>
    </tr>
    <tr>
      <td><p>تكا</p></td>
      <td><p>د.ك 2.250</p></td>
    </tr>
    <tr>
      <td><p>عرايس</p></td>
      <td><p>0.700د.ك</p></td>
    </tr>
    <tr>
      <td><p>دجاج علي الفحم كامل </p></td>
      <td><p>4.700د.ك</p></td>
    </tr>
    <tr>
      <td><p>دجاج علفحم نصف </p></td>
      <td><p>3.500د.ك</p></td>
    </tr>
    <tr>
      <td><p>مشاوي مشكل وسط </p></td>
      <td><p> د.ك 3.250</p></td>
    </tr>
    <tr>
      <td><p>مرق لحم مع عيش ابيض </p></td>
      <td><p>3.700د.ك</p></td>
    </tr>
    <!-- <tr>
      <td><p>مرق دجاج مع عيش ابيض د</p></td>
      <td><p>2.750د.ك</p></td>
    </tr> <tr>
      <td><p>مشاوي مشكل كبير </p></td>
      <td><p>1.500د.ك</p></td>
    </tr>
    <tr>
      <td><p>عيش كباب </p></td>
      <td><p>1.250د.ك</p></td>
    </tr> -->
</table>
</div></div>
<tr>
<td>
<div class="card">
<div class="imgBox">
<img src="./img/salad.png" style="width: 400px;height: 600px;">
</div>
<div class="details">
    <h2 style="text-align: center;"><b>السلطات</b></h2>
    <table>
      <tr>
          <td><p>سلطه كالاماري</p></td>
          <td><p>3.500د.ك</p></td>
        </tr>
        <tr>
          <td><p>سلطه يونانيه</p></td>
          <td><p>3.750د.ك</p></td>
        </tr>
        <tr>
          <td><p>سلطه اعشاب</p></td>
          <td><p>2.000د.ك</p></td>
        </tr>
        <tr>
          <td><p>سلطه افوكادو</p></td>
          <td><p>2.250د.ك</p></td>
        </tr>
        <tr>
          <td><p>سلطه ملفوف بالمايونيز </p></td>
          <td><p>5.000د.ك</p></td>
        </tr>
        <tr>
          <td><p>سلطه سلطعون</p></td>
          <td><p>3.00د.ك</p></td>
        </tr>
        <tr>
          <td><p>سلطه ذرة</p></td>
          <td><p>4.500د.ك</p></td>
        </tr>
        <tr>
          <td><p>بقدونسيه</p></td>
          <td><p>2.000د.ك</p></td>
        </tr>
        <tr>
          <td><p>سلطه الحصن</p></td>
          <td><p>3.500د.ك</p></td>
        </tr>
  </table>
</div></div>
  <div class="card">
    <div class="imgBox">
    <img src="./img/mshrob.png"style="width: 400px;height: 600px;">
    </div>
    <div class="details">
    <h2><b>المشروبات </b></h2>
    <table>
      <tr>
          <td><p>كستلالية</p></td>
          <td><p>3.500د.ك</p></td>
        </tr>
        <tr>
          <td><p>بيبر ستيك </p></td>
          <td><p>3.750د.ك</p></td>
        </tr>
        <tr>
          <td><p>فيلية منيون</p></td>
          <td><p>2.000د.ك</p></td>
        </tr>
        <tr>
          <td><p>كستلاليه بقر</p></td>
          <td><p>2.250د.ك</p></td>
        </tr>
        <tr>
          <td><p>شرحات فيلية يقري</p></td>
          <td><p>5.000د.ك</p></td>
        </tr>
        <tr>
          <td><p>اسكالوب دجاج</p></td>
          <td><p>3.00د.ك</p></td>
        </tr>
        <tr>
          <td><p>لوحة نيه</p></td>
          <td><p>4.500د.ك</p></td>
        </tr>
        <tr>
          <td><p>فتايل</p></td>
          <td><p>2.000د.ك</p></td>
        </tr>
        <tr>
          <td><p>اسكالوب دجاج </p></td>
          <td><p>3.500د.ك</p></td>
        </tr>
  </table>
</div>
</body>
</html>

