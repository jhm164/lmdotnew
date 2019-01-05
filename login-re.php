
<?php
session_Start();
echo 'ok';

include 'connection.php';

if (isset($_POST['username'])&&isset($_POST['username'])) {
	$admin=0;
$username=$_POST['username'];
$password=$_POST['password'];
//echo $username.' '.$password;
if ($username!=''&&$password!='') {
	# code...

echo 'redirecting please wait...';
	$sql="select * from customer where username='$username' and password='$password'";
//echo $sql;
	$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($result)) {

	$_SESSION['fname']=$row['fname'];
	$_SESSION['lname']=$row['lname'];
	$_SESSION['id']=$row['id'];

echo $_SESSION['fname'].' '.$_SESSION['lname'].' '.	$_SESSION['id'];

//		setcookie('id',$row['id'], time() + (86400 * 30), "/");
//	setcookie('fname',$row['fname'], time() + (86400 * 30), "/");
//	setcookie('lname',$row['lname'], time() + (86400 * 30), "/");
	//	echo 'session'.$_SESSION['id'];
//echo 'cookie'.$_COOKIE['id'];

  if ($row['admin']==1) {
// echo "inside";
if(isset($_SESSION['fname'])&&isset($_SESSION['lname'])&&isset($_SESSION['id'])){
 $_SESSION['admin']=$row['admin'];

	//echo "<script>location='adminp.php'</script>";
//header('Location:adminp.php');
}else{
  z  	echo "<a href='login.php' >Try Again</a>";
//	header('Location:login.php');
}

  }
  //echo "outside";
  if(isset($_SESSION['fname'])&&isset($_SESSION['lname'])&&isset($_SESSION['id'])){
    //  		echo "<script>location='dashboard.php'</script>";
header('Location:dashboard.php');
  }else{
      
 
  $_SESSION['id']=$row['id'];
	//	echo "<script>location='main.php'</script>";
//header('Location:main.php');

  }
  
}
//echo "<script>location='login.php'</script>";
//	header('Location:login.php');
	
}else{
//	echo "<script>location='login.php'</script>";
//	header('Location:login.php');
}

}else{
///	echo 'please fill all fields';
//	echo "<script>location='login.php'</script>";
//	header('Location:login.php');
}

?>
