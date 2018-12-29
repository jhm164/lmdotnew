t1<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	
<form action="t1.php" method="post" enctype="multipart/form-data">
<input type="file" name="file_img" />
<input type="submit" name="btn_upload" value="Upload">	
</form>


</body>
</html>
<?php
if(isset($_POST['btn_upload'])){
	# code...
	$conn=mysqli_connect("localhost","root","","lmdot");

if(!$conn){
	echo die();
}


	
	$filetmp = $_FILES["file_img"]["tmp_name"];
	$filename = $_FILES["file_img"]["name"];
	$filetype = $_FILES["file_img"]["type"];
	$filepath = "images/".$filename;


move_uploaded_file($filetmp,$filepath);
	
$sql = "INSERT INTO `lmdot`.`logo` (`id`, `imagepath`, `imagename`, `type`, `cid`) VALUES (NULL, '$filepath','$filename','$filetype',1);";
if(mysqli_query($conn,$sql)){
echo "success";
}else
{

}
 

}
	?>