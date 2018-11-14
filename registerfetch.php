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

//echo $fname.' '.$mname.' '.$lname.' '.$addr.' '.$landmark.' '.$pin.' '.$contact.' '.$username.' '.$password;

$sql = "INSERT INTO `lmdot`.`customer` (`id`, `fname`, `address`, `landmark`, `pin`, `username`, `password`, `mname`, `lname`, `contact`) VALUES (NULL, '$fname', '$addr', '$landmark', $pin, '$username', '$password', '$mname', '$lname', '$contact')";
if (mysqli_query($conn,$sql)) {
	echo "Records added successfully";
}else{
	echo "Fail to add records";
}



}else{
	echo "please fill all fields";
}
?>