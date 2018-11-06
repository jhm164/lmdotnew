<?php
if(is_array($_FILES)) 
{
 if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
  $sourcePath = $_FILES['userImage']['tmp_name'];
  $fileType=$_FILES['userImage']['type'];
  $fileName=$_FILES['userImage']['name'];
  $targetPath = "images/".$_FILES['userImage']['name'];


$conn=mysqli_connect("localhost","root","","lmdot");

if(!$conn){
	echo die();
}


  		$id=4;
$sql = "INSERT INTO `lmdot`.`logo` (`id`,`imagepath`, `imagename`, `type`, `cid`) VALUES (NULL, '$targetPath','$fileName','$fileType',$id)";
if(mysqli_query($conn,$sql)){
  if(move_uploaded_file($sourcePath,$targetPath)) {
  ?>
   <img src="<?php echo $targetPath; ?>">
   <?php
   exit();
  }
    echo "$fileName upload is complete";
} else {
    echo "move_uploaded_file function failed";
}

 }
}
?>