<?php
session_start();


	include('connection.php');
$username=$_SESSION['user'];





$query=mysqli_query($connect,"SELECT * FROM booking WHERE user_name='$username'  ");

$check = mysqli_num_rows($query);
if($check !=0)
{
	while ($row=mysqli_fetch_assoc($query))
{
$dbid=$row['book_id'];

}


//$user=$row['user_name'];

//$username=$row['user_name'];
	$_SESSION['book_id']=$dbid;
	echo 	$_SESSION['book_id'];


}





/*
 $query1=mysqli_query($connect,"SELECT * FROM booking WHERE user_name='$username' ");

 $check1 = mysqli_num_rows($query1);
 if($check1 !=0)
 {
 	while ($row=mysqli_fetch_assoc($query1))
 {
 $dbbookid=$row['book_id'];
 $dbresname=$row['resturant_name'];
 $dbnumofperson=$row['persons_number'];
 $dbsmoker = $row['smoker'];
 $dbnotes = $row['notes'];
 $dbdate=$row['date'];
 $dbtime=$row['time'];
 $dbcoldappetizer=$row['cold_appetizer'];
 $dbhotappetizer=$row['hot_appetizer'];
 $dbmaineplate = $row['maine_plate'];
 $dbsalad = $row['salad'];
 $dbdrinks=$row['drinks'];
 }


 //$user=$row['user_name'];

 //$username=$row['user_name'];
 	$_SESSION['bookid_']=$dbbookid;
 	$_SESSION['res_name']= $dbresname;
 	$_SESSION['pn']= $dbnumofperson;
 	$_SESSION['smoker']=$dbsmoker;
 	$_SESSION['notes']=$dbnotes;
 	$_SESSION['date']=$dbdate;
	$_SESSION['time']=$dbtime;
	$_SESSION['ca']=$dbcoldappetize;
	$_SESSION['ha']=$dbhotappetizer;
	$_SESSION['mp']=$dbmaineplate;
	$_SESSION['salad']=$dbsalad;
	$_SESSION['drinks']=$dbdrinks;



 	echo "تم تسجيل  دخولك يا ";
 	echo "<br>".$_SESSION['fn'];
 	$username=$row['user_name'];
 	header('location:signin.php');

 }


  else {
 	//session_destroy();
 	$_SESSION['error'] = '<span style="color:red;text-align:right;">your book info is not updated</span>';
 header("Location:signin.php");




}*/ ?>
