<?php

$conn=mysqli_connect("localhost","vendorbo_mer","vivekmittal","vendorbo_merchants");

if(!$conn){
	echo die();
}

$sql = "UPDATE `customer` SET `fname` = \'f11\' WHERE `customer`.`id` = 17";
if (mysqli_query($conn,$sql)) {
echo "success";
}else{
	echo "fail";
}

?>