<?php
session_start();

include('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <title>bookform</title>
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
/* white div */
.olive{
    background: rgb(39, 42, 54);
    padding-top: 60px;
    padding-left: 30px;
    width: 50%;
    height: 70%;
    border-color: white;
    border: 13px solid rgba(124, 119, 119, 0.555);
    border-radius: 6%;
}



</style>
</head>
<body>
  <header>
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

  }
     ?>
    </ul>
  </header>

<center>

<img src="./img/brh.png" style="width:600px;height:400px;padding-top: 100px;border-radius: 6%;">

    <h3 style="color: rgb(39, 42, 54);;padding-top: 70px;"><b>:ادخل بيانات الحجز</b> </h3>
    <div class="olive">


      <form name="submit" onsubmit="return validateForm()" data-toggle="validator" role="form" method="POST" action="successfulbooking.php">
        <div class="container">
          <div class="row">

            <div class="input-field  ">
              <input  type="text"  name="persons_number" id="persons_number" class="validate" >
              <label class="active" for="persons_number" style="color: white;" required>:عدد الأشخاص </label>
            </div>
          </div>
          <div class="row">

<div class="input-field  ">
  <input  type="text"  name="notes" id="notes" class="materialize-textarea"  class="validate" >
  <label class="active"  style="color: white;" required > :أدخل رقم الفيزا 
 </label>
 <p style="color: white;"> :أدخل رقم الفيزا 
(سيتم خصم 5د.ك في حال عدم الحضور وعدم الغاء الحجز )</p>
</div>
</div>

            <div class="row">
            <div class="col s12 m12">
                <div class="input-field">
                    <input type="text" name="date" id="date" class="detepicker">
                    <label for="date" style="color: white;">:اختر التاريخ</label>
                </div>
        </div>
     <div class="col s12 m3"></div>
    </div>

            <div class="row">
            <div class="col s12 m12">
                <div class="input-field">
                    <input type="text" name="time" id="time" class="timepicker">
                    <label for="time" style="color: white;">:اختر الوقت</label>
                </div>
        </div>
     <div class="col s12 m12"></div>
    </div>


      <div class="col s12 m12">

        <p>
          <label>
            <input name="smoker" type="radio" id="family" value="عائلات" checked />
            <span style="color: white;">عائلات</span>
          </label>
        </p>
      </div>
        <p>
          <label>
            <input name="smoker" type="radio" id="smoker" value="مدخنين" />
            <span style="color: white;">مدخنين</span>
          </label>
        </p>

        <div class="row">
          <div class="input-field ">
            <input  type="text" name="position" id="position"  class="validate">
            <label class="active" for="position" style="color: white;">:رقم الطاولة</label>
          </div>
        </div>

          <div class="row">
            <div class="input-field  col s6 m12">
              <i class="material-icons prefix"></i>
              <textarea  name="notes" id="notes" class="materialize-textarea"  placeholder="مناسبات: تخرج - عيدميلاد - زواج - اخرى "></textarea>
              <label for="notes" style="color: white;">:ملاحظات</label>
            </div>
          </div>

           <h4 style="font-size:10pt;color:white;text-align: left;">:(أختيار  قائمةالطعام (اختياري</h4>
           <br>
           <br>
           <div class="input-feild col 14">
            <select name="cold_appetizers[]" id="cold_appetizers" multiple="true">
              <option disabled="disabled" >المقبلات الباردة</option>
              <option value="مسقغة بالزيت"> <td><p>لبنه جريش</p></td>
            <td><p>1.500د.ك</p></td></option>
              <option value="لبنة جريش"><td><p>مسقعه بالزيت </p></td>
            <td><p>2.750د.ك</p></td></option>
              <option value="جرجير"> <td><p>جرجير</p></td>
            <td><p>1.000د.ك</p></td></option>
              <option value="شنكليش"> <td><p>مكدوس بالزيت والجوز</p></td>
            <td><p>1.000د.ك</p></td></option>
              <option value="حمص"><td><p>شنكليش</p></td>
            <td><p>0.750د.ك</p></td></option>
              <option value="مندبه"> <td><p> حمص بيروتي</p></td>
            <td><p>1.500د.ك</p></td></option>
              <option value="ورق عنب بالزيت"> <td><p>هندبه</p></td>
            <td><p>2.000د.ك</p></td></option>
              <option value="جبنة حلوم"> <td><p>طاجن بالسمك</p></td>
            <td><p>1.500د.ك</p></td></option>
              <option value="لبنة بلديه"><td><p> متبل باذنجان</p></td>
            <td><p>2.000د.ك</p></td></option>
              <!-- <option value="لبنة ماعز مكبوسه بالزيت"><pre></pre>لبنة ماعز مكبوسه بالزيت</option>
              <option value="كشكه"><pre></pre>كشكه </option>
              <option value="متبل باذنجان"><pre></pre> متبل باذنجان</option>
              <option value="لبن بالخيار"><pre></pre>لبن بالخيار</option>
              <option value="غيشة خانوم"><pre></pre>غيشه خانوم</option>
              <option value="مكدوس بالزيت والجوز"><pre></pre>مكدوس بالزيت والجوز</option>
              <option value="بندوره محمره"><pre></pre>بندوره محمره</option>
              <option value="زيتون حليبي"><pre></pre>زيتون حليبي</option>
              <option value="زيتون أخضر"><pre></pre>زيتون اخضر</option> -->

            </select>
            <label style="text-align:left ;">:المقبلات الباردة</label>
          </div>

          <br>
           <div class="input-feild col 14">
            <select name="hot_appetizers[]" id="hot_appetizers" multiple="true">
              <option disabled="disabled" >:المقبلات الحاره</option>
              <option value="حلوم مشوي أو مقلي"> <td><p>بطاطا بروفنسال</p></td>
            <td><p>3.500د.ك</p></td></option>
              <option value="طحالات"> <td><p>بطاطا  مقلية</p></td>
            <td><p>3.750د.ك</p></td></option>
              <option value="قوانص"><td><p>كلاج جبن</p></td>
            <td><p>2.000د.ك</p></td></option>
              <option value="مفركه لحمه"><td><p>صحن سبانخ</p></td>
            <td><p>0.250د.ك</p></td></option>
              <option value="قلاية بندوره بالبصل"> <td><p>مكدوس بالزيت والجوز</p></td>
            <td><p>5.000د.ك</p></td></option>
              <option value="قلاية بندوره باللحمه"><td><p>سبرينغ رول بالخضار</p></td>
            <td><p>2.00د.ك</p></td></option>
              <option value="فطر مطفي بالأعشاب"> <td><p> شيش يرك</p></td>
            <td><p>4.500د.ك</p></td></option>
              <option value="جوانح الدجاج"> <td><p>فطر مطفى بالاعشاب</p></td>
            <td><p>2.000د.ك</p></td></option>
              <option value="طاجن"> <td><p>صفيحة بعلبكي</p></td>
            <td><p>3.500د.ك</p></td></option>
              <!-- <option value="كلاوي"><pre>كلاوي</pre></option>
              <option value="كبدة غنم"><pre>كبدة غنم</pre></option>
              <option value="سناسنل"><pre>سناسنل</pre></option>
              <option value="نخاعات"><pre>نخاعات</pre></option>
              <option value="بيض غن"><pre>بيض غن</pre></option>
              <option value="فول مدمس"><pre>فول مدمس</pre></option>
              <option value="بليلة"><pre>بليلة</pre></option> -->
              <option value="مفركة بطاطا باللحمه"><td><p> متبل باذنجان</p></td>
            <td><p>2.000د.ك</p></td></option>
              <option value="بطاطا بروفنسال"> <td><p>طاجن بالسمك</p></td>
            <td><p>1.500د.ك</p></td></option>
              <option value="بطاطا مقليه"> <td><p>هندبه</p></td>
            <td><p>2.000د.ك</p></td></option>
              <option value="كلاج جبن"> <td><p> حمص بيروتي</p></td>
            <td><p>1.500د.ك</p></td></option>
              <option value="صفيحة بعلبكي"><td><p>شنكليش</p></td>
            <td><p>0.750د.ك</p></td></option>

            </select>
            <label style="text-align:left ;">:المقبلات الحاره</label>
          </div>

          <br>
          <div class="input-feild col 14">
           <select name="maine_plate[]" id="maine_plate" multiple="true">
             <option disabled="disabled" >:الأطباق الرئيسيه </option>
             <option value="كستلالية"> <td><p>كستلالية</p></td>
            <td><p>3.500د.ك</p></td></option>
             <option value="بيبر ستيك"><td><p>بيبر ستيك </p></td>
            <td><p>3.750د.ك</p></td></option>
             <option value="فيليه منيون"><td><p>فيلية منيون</p></td>
            <td><p>2.000د.ك</p></td></option>
             <option value="شرحات فيليه بقري"><td><p>كستلاليه بقر</p></td>
            <td><p>2.250د.ك</p></td></option>
             <option value="لوحة نيه"><td><p>شرحات فيلية يقري</p></td>
            <td><p>5.000د.ك</p></td></option>
             <option value="فتايل"><td><p>اسكالوب دجاج</p></td>
            <td><p>3.00د.ك</p></td></option>
             <option value="مشاوي مشك"><td><p>لوحة نيه</p></td>
            <td><p>4.500د.ك</p></td></option>
             <!-- <option value="(قلوب (4سياخ"><pre> (قلوب (4سياخ</pre></option>
             <option value="بقدونيسيه"><pre>بقدونسيه</pre></option>
             <option value="جاط خضره مشكله"><pre> جاط خضرة مشكل </pre></option>
             <option value="كستلالية بقر"><pre>كستلالية بقر</pre></option>
             <option value="اسكالوب دجاج"><td><p>فتايل</p></td> -->
            <td><p>2.000د.ك</p></td></option>
             <option value="كفته نيه"><pre></pre>كفتة نيه</option>
             <!-- <option value="ميره نيه"><pre>هيرة نيه</pre></option>
             <option value="كبه باللبن"><pre>كبه بالبن</pre></option> -->
           </select>
           <label style="text-align:left ;">:الأطباق الرئيسيه</label>
         </div>

          <br>
          <div class="input-feild col 14">
           <select name="salad[]" id="salad" multiple="true">
             <option disabled="disabled" >:السلطات </option>
             <option value="سلطة كالاماري"> <td><p>سلطه كالاماري</p></td>
            <td><p>3.500د.ك</p></td></option>
             <!-- <option value="سلطه يونانيه"><pre>سلطه يونانيه</pre></option> -->
             <option value="سلطة أعشاب"><td><p>سلطه يونانيه</p></td>
            <td><p>3.750د.ك</p></td></option>
             <option value="سلطة أفوكادو"><td><p>سلطه اعشاب</p></td>
            <td><p>2.000د.ك</p></td></option>
             <option value="سلطة ملفوف بالمايونيز"> <td><p>سلطه افوكادو</p></td>
            <td><p>2.250د.ك</p></td></option>
             <option value="سلطة سلطعون"><td><p>سلطه ملفوف بالمايونيز </p></td>
            <td><p>5.000د.ك</p></td></option>
             <option value="سلطة ذره"> <td><p>سلطه سلطعون</p></td>
            <td><p>3.00د.ك</p></td></option>
             <option value="بقدونيسيه"><td><p>سلطه ذرة</p></td>
            <td><p>4.500د.ك</p></td></option>
             <option value="سلطة الحصن"> <td><p>بقدونسيه</p></td>
            <td><p>2.000د.ك</p></td></option>
             <option value="سلطة جرجير وشمندر"><td><p>سلطه الحصن</p></td>
            <td><p>3.500د.ك</p></td></option>
             <!-- <option value="سلطة ارفي شوكي"><pre>سلطه ارفي شوكي</pre></option>
             <option value="سلطة بطاطا"><pre>سلطه بطاطا</pre></option>
             <option value="سلطة الموسم"><pre>سلطه الموسم</pre></option>
             <option value="جاط خضره مشكل"><pre>جاط خضرة مشكل</pre></option> -->
           </select>
           <label style="text-align:left ;">:السلطات</label>
         </div>

         <br>




</select>
          <div class="input-feild col 14">
           <select name="drinks[]" id="drinks" multiple="true">
             <option disabled="disabled" >:المشروبات </option>
             <option value="ماء(كبير"><td><p>(ماء(كبير</p></td>
            <td><p>1.500د.ك</p></td></option>
             <option value="(ماء (وسط"><td><p>(ماء (وسط</p></td>
            <td><p>0.750د.ك</p></td></option>
             <option value="اسبرسو"><td><p>سفن</p></td>
            <td><p>0.700د.ك</p></td></option>
             <option value="سفن"><td><p>ميرندا</p></td>
            <td><p>0.700د.ك</p></td></option>
             <option value="كولا"><td><p>كولا</p></td>
            <td><p>0.700د.ك</p></td></option>
             <option value="شاي"><td><p> عصير طبيعي</p></td>
            <td><p>0.700د.ك</p></td>
          </tr></option>
             <option value="شاي وحليب"><td><p>شاي</p></td>
            <td><p>1.000د.ك</p></td></option>
             <option value="لبن ساده"> <td><p>لبن ساده</p></td>
            <td><p>0.700د.ك</p></td></option>

           </select>
           <label style="text-align:left ;">:المشروبات</label>
         </div>
<br>


          <button class="btn waves-effect waves-light" type="submit" name="submit" style="margin-left:400px;"><b>حجز</b>
          <i class="material-icons right">send</i>
        </button>
       
<br>
<br>
<br>
<br>
        </div>
  </form>
<br>
<br>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>





<script src="js/validator/validator.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('select').formSelect();
  });
</script>
<script>
     const Calender = document.querySelector('.detepicker');
    M.Datepicker.init(Calender,{});
</script>
<script>
    const timer = document.querySelector('.timepicker');
    M.Timepicker.init(timer,{});
</script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });
</script>

<script>
function validateForm() {
  var personNumber = document.forms["submit"]["persons_number"].value;
  var date = document.forms["submit"]["date"].value;
  var time = document.forms["submit"]["time"].value;
  var smoker = document.forms["submit"]["smoker"].value;
  var notes = document.forms["submit"]["notes"].value;
  var cold_appetizers = document.forms["submit"]["cold_appetizers"].value;
  var hot_appetizers = document.forms["submit"]["hot_appetizers"].value;
  var maine_plate = document.forms["submit"]["maine_plate"].value;
  var salad = document.forms["submit"]["salad"].value;
  var drinks = document.forms["submit"]["drinks"].value;
  if (personNumber == "") {
    alert("ادخل عدد الأشخاص");
    return false;
  }else   if (date== "") {
      alert("ادخل التاريخ");
      return false;
    }
    else   if (time== "") {
        alert("ادخل الوقت");
        return false;
      } else   if (smoker== "") {
          alert("ادخل مدخن او غير مدخن");
          return false;
        }else   if (cold_appetizers== "") {
              alert("ادخل المقبلات الحاره");
              return false;
            }else   if (hot_appetizers== "") {
                alert("ادخل المقبلات الحاره");
                return false;
              } else   if (maine_plate== "") {
                  alert("ادخل الطبق الرئيسي");
                  return false;
                }else   if (salad== "") {
                    alert("ادخل السلطة");
                    return false;
                  }else   if (drinks== "") {
                      alert("ادخل المشروبات");
                      return false;
                    }}

</script>




</center>
</body>
</html>
