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

body{
  margin: 0;
  padding: 0;
  background-image: url(./img/background.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-repeat: no-repeat;
  background-color: rgb(51, 50, 50);
  min-height: 170vh;
  font-family: 'Tajawal', sans-serif;
}</style>
</head>
<body>
<center>

<img src="./img/brh.png" style="width:600px;height:400px;padding-top: 100px;border-radius: 6%;">

    <h3 style="color: rgb(39, 42, 54);;padding-top: 70px;"><b>:ادخل بيانات الحجز</b> </h3>
    <div class="olive">


      <form name="submit" onsubmit="return validateForm()" data-toggle="validator" role="form" method="POST" action="successfulsignup.php">
        <div class="container">
          <div class="row">

            <div class="input-field  ">
              <input  type="text"  name="persons_number" id="persons_number" class="validate" >
              <label class="active" for="persons_number" style="color: white;" required>:عدد الأشخاص </label>
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
            <input name="smoker" type="radio" checked />
            <span style="color: white;">عائلات</span>
          </label>
        </p>
      </div>
        <p>
          <label>
            <input name="smoker" type="radio" />
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
            <select name="cold_appetizers" id="cold_appetizers" multiple="true">
              <option disabled="disabled" >المقبلات الباردة</option>
              <option><pre>  مسقغة بالزيت</pre></option>
              <option><pre></pre>لبنة جريشة</option>
              <option><pre></pre>جرجير</option>
              <option><pre></pre>شنكليش</option>
              <option><pre></pre>حمص</option>
              <option><pre></pre>هندبه</option>
              <option><pre></pre>ورق عنب بالزيت</option>
              <option><pre></pre>جبنه حلوم   </option>
              <option><pre></pre>لبنه بلديه   </option>
              <option><pre></pre>لبنة ماعز مكبوسه بالزيت</option>
              <option><pre></pre>كشكه </option>
              <option><pre></pre> متبل باذنجان</option>
              <option><pre></pre>لبن بالخيار</option>
              <option><pre></pre>غيشه خانوم</option>
              <option><pre></pre>مكدوس بالزيت والجوز</option>
              <option><pre></pre>بندوره محمره</option>
              <option><pre></pre>زيتون حليبي</option>
              <option><pre></pre>زيتون اخضر</option>

            </select>
            <label style="text-align:left ;">:المقبلات الباردة</label>
          </div>

          <br>
           <div class="input-feild col 14">
            <select name="hot_appetizers" id="hot_appetizers" multiple="true">
              <option disabled="disabled" >:المقبلات الحاره</option>
              <option><pre> حلوم مشوي أو مقلي</pre></option>
              <option><pre>طحالات</pre></option>
              <option><pre>قوانص</pre></option>
              <option><pre>مفركه لحمة</pre></option>
              <option><pre>قلاية بندوره بالبصل</pre></option>
              <option><pre>قلايه بندوره بالحمه</pre></option>
              <option><pre>فطر مطفى بالاعشاب</pre></option>
              <option><pre>جوانح الدجاج</pre></option>
              <option><pre>طاجن</pre></option>
              <option><pre>كلاوي</pre></option>
              <option><pre>كبدة غنم</pre></option>
              <option><pre>سناسنل</pre></option>
              <option><pre>نخاعات</pre></option>
              <option><pre>بيض غن</pre></option>
              <option><pre>فول مدمف</pre></option>
              <option><pre>بليلة</pre></option>
              <option><pre>مفركة بطاطا بالحمة</pre></option>
              <option><pre>بطاطا ويدجز</pre></option>
              <option><pre>بطاطا بروفنسال</pre></option>
              <option><pre>بطاطا مقلية</pre></option>
              <option><pre>كلاج جبن</pre></option>
              <option><pre>صفيحه بعلبكي</pre></option>

            </select>
            <label style="text-align:left ;">:المقبلات الحاره</label>
          </div>

          <br>
          <div class="input-feild col 14">
           <select name="maine_plate" id="maine_plate" multiple="true">
             <option disabled="disabled" >:الأطباق الرئيسيه </option>
             <option><pre>كستلالية</pre></option>
             <option><pre>بيبر ستيك</pre></option>
             <option><pre>فيلية منيون</pre></option>
             <option><pre>شرحات فيلية يقري</pre></option>
             <option><pre>لوحة نيه</pre></option>
             <option><pre>فتايل</pre></option>
             <option><pre>مشاوي مشك</pre></option>
             <option><pre> (قلوب (4سياخ</pre></option>
             <option><pre>بقدونسيه</pre></option>
             <option><pre> جاط خضرة مشكل </pre></option>
             <option><pre>كستلالية بقر</pre></option>
             <option><pre>اسكالوب دجاج</pre></option>
             <option><pre></pre>كفتة نيه</option>
             <option><pre>هيرة نيه</pre></option>
             <option><pre>كبه بالبن</pre></option>
           </select>
           <label style="text-align:left ;">:الأطباق الرئيسيه</label>
         </div>

          <br>
          <div class="input-feild col 14">
           <select name="salad" id="salad" multiple="true">
             <option disabled="disabled" >:السلطات </option>
             <option><pre>سلطه كالاماري </pre></option>
             <option><pre>سلطه يونانيه</pre></option>
             <option><pre>سلطه اعشاب</pre></option>
             <option><pre>سلطه افوكادو</pre></option>
             <option><pre>سلطه ملفوف بالمايونيز </pre></option>
             <option><pre>سلطه سلطعون</pre></option>
             <option><pre>سلطه ذرة</pre></option>
             <option><pre>بقدونسيه</pre></option>
             <option><pre>سلطه الحصن</pre></option>
             <option><pre>سلطه جرجير وشمندر</pre></option>
             <option><pre>سلطه ارفي شوكي</pre></option>
             <option><pre>سلطه بطاطا</pre></option>
             <option><pre>سلطه الموسم</pre></option>
             <option><pre>جاط خضرة مشكل</pre></option>
           </select>
           <label style="text-align:left ;">:السلطات</label>
         </div>

         <br>




</select>
          <div class="input-feild col 14">
           <select name="drinks" id="drinks" multiple="true">
             <option disabled="disabled" >:المشروبات </option>
             <option><pre>(ماء(كبير</pre></option>
             <option><pre>(ماء (وسط</pre></option>
             <option><pre>اسبرسو</pre></option>
             <option><pre>سفن</pre></option>
             <option><pre>ميرندا</pre></option>
             <option><pre>كولا</pre></option>
             <option><pre>شاي</pre></option>
             <option><pre>شاي وحليب</pre></option>
             <option><pre>عصير طبيعي</pre></option>
             <option><pre>بن ساده</pre></option>

           </select>
           <label style="text-align:left ;">:المشروبات</label>
         </div>
<br>
         <button class="btn waves-effect waves-light" type="submit" name="submit" style="margin-left:400px;"><b>حجز</b>
          <i class="material-icons right">send</i>
        </button>
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
        }else   if (notes== "") {
            alert("ادخل الملاحظات");
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
