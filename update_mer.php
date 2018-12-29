<?php
include 'connection.php';
if (isset($_POST['fname'])) {
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$addr=$_POST['addr'];
	$landmark=$_POST['landmark'];
	$pin=$_POST['pin'];
	$contact=$_POST['contact'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$accaunt=$_POST['accaunt'];
	$id=$_POST['id'];

//echo $fname.' '.$mname.' '.$lname.' '.$addr.' '.$landmark.' '.$pin.' '.$contact.' '.$username.' '.$password;


$sql = "UPDATE `customer` SET `fname` = '$fname', `address` = '$addr', `landmark` = '$landmark', `pin` = '$pin', `username` = '$username', `password` = '$password', `mname` = '$mname', `lname` = '$lname', `contact` = '$contact', `accaunt` = '$accaunt'  WHERE `id` = $id";
if (mysqli_query($conn,$sql)) {
	echo "Records updated successfully";
	//header('Location:login.php');
}else{
	echo "Fail to update";
}



}else{
	echo "can't update";
}
?>