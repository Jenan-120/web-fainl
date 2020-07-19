<?php
include('connection.php');
session_start();
$email=$_SESSION['email'];
$username=$_SESSION['user'];

$cold_appetizers="";
$hot_appetizers="";
$maine_plate="";
$salad="";
$drinks="";

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
          }
      //  echo $cold_appetizers." <br>    ".$hot_appetizers."     ".$maine_plate."     ".$salad."     ".$drinks;
$resturantname="برج الحمام";
$persons_number=$_POST['persons_number'];
$date=$_POST['date'];
$time=$_POST['time'];
$smoker=$_POST['smoker'];
$position=$_POST['position'];
$notes=$_POST['notes'];
$time=$_POST['time'];

$sql = "INSERT INTO booking
VALUES ('','$username', '$resturantname','$position', '$persons_number','$smoker','$notes','$date','$time','$cold_appetizers','$hot_appetizers','$maine_plate','$salad','$drinks')";
if (mysqli_query($connect, $sql)) {
    echo "تم التسجيل بنجاح";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
	session_destroy();
}


// As output of $_POST['Color'] is an array we have to use foreach Loop to display individual value

//echo $username." ".$coldapetiser;
?>
