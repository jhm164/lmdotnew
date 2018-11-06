<?php
session_start();

$id= 4;
$fileName = $_FILES["file1"]["name"]; // The file name
$fileTmpLoc =$_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file1"]["type"]; // The type of file it is
$fileSize = $_FILES["file1"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true


	$filepath = "images/$fileName";


$conn=mysqli_connect("localhost","root","","lmdot");

if(!$conn){
	echo die();
}



if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
}
if(move_uploaded_file($fileTmpLoc, "images/$fileName")){
		$id=4;
$sql = "INSERT INTO `lmdot`.`logo` (`id`, `imagepath`, `imagename`, `type`, `cid`) VALUES (NULL, '$filepath','$fileName','$fileType',$id)";
mysqli_query($conn,$sql);


    echo "$fileName upload is complete";
} else {
    echo "move_uploaded_file function failed";
}
?>