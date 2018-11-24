<?php
session_start();
include 'connection.php';
if (isset($_GET['fname'])&&isset($_GET['mname'])) {
	$fname=$_GET['fname'];
	$mname=$_GET['mname'];
	$lname=$_GET['lname'];
	$addr=$_GET['addr'];
	$landmark=$_GET['landmark'];
	$pin=$_GET['pin'];
	$contact=$_GET['contact'];
	$username=$_GET['username'];
	$password=$_GET['password'];
	

//echo $fname.' '.$mname.' '.$lname.' '.$addr.' '.$landmark.' '.$pin.' '.$contact.' '.$username.' '.$password;
/*
$sql = "INSERT INTO `customer` (`id`, `fname`, `address`, `landmark`, `pin`, `username`, `password`, `mname`, `lname`, `contact`, `accaunt`) VALUES (NULL, '$fname', '$addr', '$landmark', $pin, '$username', '$password', '$mname', '$lname', 0)";
*/
/*
$sql = "UPDATE `customer` SET `fname` = '$fname',`mname` = '$mname',`lname` = '$lname',`addr` = '$addr',`landmark` = '$landmark',`pin` = '$pin',`contact` = '$contact', WHERE `customer`.`id` = $id";
*/

$sql="select * from customer where username='$username' and password='$password'";
$result=mysqli_query($conn,$sql);
if($row=mysqli_fetch_assoc($result)) {
$id=$row['id'];
	

$sql = "UPDATE `customer` SET `fname` = '$fname', `address` = '$addr', `landmark` = '$landmark', `pin` = '$pin',  `mname` = '$mname', `lname` = '$lname', `contact` = '$contact' WHERE id=$id";
if (mysqli_query($conn,$sql)) {
	echo "Updated successfully";
	//header('Location:login.php');
}else{
	echo "Fail to update ";
}
}else{
	echo "Fail to update username or password incorrect ";
}


}else{
	echo "please fill all fields";
}
?>