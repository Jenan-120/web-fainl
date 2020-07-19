<?php
session_start();


	include('connection.php');
$username=$_POST['username'];
$password= md5($_POST['password']);




$query=mysqli_query($connect,"SELECT * FROM personal_info WHERE user_name='$username' AND password='$password' ");

$check = mysqli_num_rows($query);
if($check !=0)
{

	//$_SESSION['user']=$username;
	//header('location:index.php');
	while ($row=mysqli_fetch_assoc($query))
{
$dbemail=$row['email'];
$dbpassword=$row['password'];
$dbusername=$row['user_name'];
$dbfirstname = $row['first_name'];
$dblastname = $row['last_name'];
$dbid=$row['user_id'];
$dbgm=$row['gold_member'];
}
//$user=$row['user_name'];

//$username=$row['user_name'];
	$_SESSION['user']=$dbusername;
	$_SESSION['fn']=$dbfirstname;
	$_SESSION['ln']=$dblastname;
	$_SESSION['email']=$dbemail;
	$_SESSION['password']=$dbpassword;
	$_SESSION['user_id']=$dbid;
	$_SESSION['gm']=$dbgm;
	echo "تم تسجيل  دخولك يا ";
	echo "<br>".$_SESSION['fn'];
	$username=$row['user_name'];
	header('location:signin.php');

}

 else {
	//session_destroy();
	$_SESSION['error'] = '<span style="color:red;text-align:right;">invalid username or password!!!</span>';
header("Location:signin.php");
exit();



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
 	echo "<br>".$_SESSION['fn'];
 	$username=$row['user_name'];
 	header('location:signin.php');

 }



 ?>
