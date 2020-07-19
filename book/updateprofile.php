
<?php
session_start();

include('connection.php');


if (isset($_POST['changefn'])){


	$fn=$_POST['firstname'];
//$ln=$_POST['lastname'];
$username =$_SESSION['user'];





$query=mysqli_query($connect,"SELECT * FROM personal_info WHERE user_name='$username' AND first_name='$fn'   ");
$numrows = mysqli_num_rows($query);
if($numrows !=0) {

		$_SESSION['fn_error'] = '<span style="color:red;text-align:right;">لم يتم تحديث الاسم الأول</span>';
header("Location:profile.php");
exit();


}
	//echo "existing user name or email";
else
{
//$password=$_POST['password'];
$firstname=$_POST['firstname'];
//$lastname=$_POST['lastname'];
//$gender = $_POST['gender'];

$sql = "UPDATE  personal_info SET first_name='$firstname' WHERE user_name='$username'";

if (mysqli_query($connect, $sql)) {
	$_SESSION['fn']=$firstname;
	$_SESSION['fn_success'] = '<span style="color:blue;text-align:right;"><p>تم تحديث الاسم الأول بنجاح </p></span>';
    header("Location:profile.php");
exit();

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
	session_destroy();
}
}
}
elseif (isset($_POST['changeln'])){



$ln=$_POST['lastname'];
$username =$_SESSION['user'];





$query=mysqli_query($connect,"SELECT * FROM personal_info WHERE user_name='$username' AND last_name='$ln'   ");
$numrows = mysqli_num_rows($query);
if($numrows != 0){

		$_SESSION['ln_error'] = '<span style="color:red;text-align:right;">لم يتم تحديث الاسم الأخير</span>';
header("Location:profile.php");
exit();

}
	//echo "existing user name or email";
else
{
//$password=$_POST['password'];
//$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
//$gender = $_POST['gender'];

$sql = "UPDATE  personal_info SET  last_name='$lastname' WHERE user_name='$username'";

if (mysqli_query($connect, $sql)) {
	$_SESSION['ln']=$lastname;
    $_SESSION['ln_success'] = '<span style="color:blue;text-align:right;">تم تحديث الاسم الأخير بنجاح</span>';
    header("Location:profile.php");
exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
	session_destroy();
}
}
}


elseif (isset($_POST['changepassword'])){



//$password=md5($_POST['password']);
$username =$_SESSION['user'];





$query=mysqli_query($connect,"SELECT * FROM personal_info WHERE user_name='$username'   ");
$numrows = mysqli_num_rows($query);
if($numrows =0){

		$_SESSION['password_error'] = '<span style="color:red;text-align:right;">لم يتم تحديث كلمة المرور</span>';
header("Location:profile.php");
exit();

}
	//echo "existing user name or email";
else
{
$password=md5($_POST['password']);
//$firstname=$_POST['firstname'];
//$lastname=$_POST['lastname'];
//$gender = $_POST['gender'];

$sql = "UPDATE  personal_info SET  password='$password' WHERE user_name='$username'";

if (mysqli_query($connect, $sql)) {
	$_SESSION['password']=$password;
    $_SESSION['password_success'] = '<span style="color:blue;text-align:right;">تم تغيير كلمة المرور بنجاح</span>';
    header("Location:profile.php");
exit();

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
	session_destroy();
}
}
}
elseif (isset($_POST['change_phone'])){

	$ph=$_POST['phone'];
//$ln=$_POST['lastname'];
$username =$_SESSION['user'];





$query=mysqli_query($connect,"SELECT * FROM personal_info WHERE user_name='$username' AND phone='$ph'   ");
$numrows = mysqli_num_rows($query);
if($numrows !=0) {

		$_SESSION['ph_error'] = '<span style="color:red;text-align:right;">لم يتم تحديث رقم الهاتف</span>';
header("Location:profile.php");
exit();


}
	//echo "existing user name or email";
else
{
//$password=$_POST['password'];
$phone=$_POST['phone'];
//$lastname=$_POST['lastname'];
//$gender = $_POST['gender'];

$sql = "UPDATE  personal_info SET phone='$phone' WHERE user_name='$username'";

if (mysqli_query($connect, $sql)) {
	$_SESSION['ph']=$phone;
	$_SESSION['ph_success'] = '<span style="color:blue;text-align:right;"><p>تم تحديث رقم الهاتف بنجاح</p></span>';
    header("Location:profile.php");
exit();

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
	session_destroy();
}
}
}

/*elseif(isset($_POST['submit_picture']) ){

	if(($_FILES['picture']['type'] == 'image/gif')
		|| ($_FILES['picture']['type'] == 'image/jpeg')
	|| ($_FILES['picture']['type'] == 'image/jpg'))

	{


$user_name =$_SESSION['user'];
$image_name= mysqli_real_escape_string($connect,$_FILES["picture"]["name"]);
$image_data = mysqli_real_escape_string($connect ,file_get_contents($_FILES["picture"]["tmp_name"]));
$image_type =mysqli_real_escape_string($connect,$_FILES["picture"]["type"]);



	$query=mysqli_query($connect,"SELECT * FROM personal_info WHERE user_name='$user_name'   ");
$numrows = mysqli_num_rows($query);
if($numrows =0){

		$_SESSION['p_error']=  '<span style="color:red;text-align:right;">picture not updated</span>';
header("Location:profile.php");
exit();


}
	//echo "existing user name or email";
else
{
	$destination="pictures/".$_FILES['picture']['name'];
	$filename=$_FILES['picture']['tmp_name'];
			move_uploaded_file($filename ,$destination);
	//$connect = mysqli_connect('localhost','ymuoomey','saitoh2010' ) or DIE ("Could Not Connect to localhost!");
	//mysqli_select_db($connect,'test tree')or DIE ("Could Not Connect to database!");
	$sql =  "UPDATE personal_info SET img='".$_FILES['picture']['name']."' WHERE user_name='$user_name' ";
if (mysqli_query($connect, $sql)) {
	//$_SESSION['']
		$_SESSION['p_success']= '<span style="color:green;text-align:right;">your picture is changed successfully</span>';
  header("Location:profile.php");
exit();
}
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
	session_destroy();
}

}
	}
	else {
		$_SESSION['p_notp']='<span style="color:red;text-align:right;">not a picture</span>';
		header("Location:profile.php");
exit();
	}
}
?>
*/
