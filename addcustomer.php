<?php
session_start();
include 'connection.php';

if (isset($_POST['cname'])&&isset($_POST['cadd1'])&&isset($_POST['cadd2'])&&isset($_POST['landmark'])&&isset($_POST['pincode'])&&isset($_POST['country'])&&isset($_POST['state'])&&isset($_POST['city'])&&isset($_POST['ccode'])&&isset($_POST['mobile'])&&isset($_POST['email'])) {
	
$cname=$_POST['cname'];
$cadd1=$_POST['cadd1'];
$cadd2=$_POST['cadd2'];
$landmark=$_POST['landmark'];
$pincode= $_POST['pincode'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$ccode=$_POST['ccode'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$id1=$_SESSION['id'];

$sql = "INSERT INTO `customerdetail` (`id`, `name`, `add1`, `add2`, `landmark`, `pincode`, `country`, `state`, `city`, `countrycode`, `mobile`, `email`, `recordholder`)VALUES (NULL, '$cname', '$cadd1', '$cadd2', '$landmark', '$pincode', '$country', '$state', '$city', '$ccode', '$mobile', '$email','$id1')";

if (mysqli_query($conn,$sql)) {
	echo "Records Added Successfully";
}else{
	echo "fail to add record";
}


}





?>