<?php
include 'connection.php';

if (isset($_GET['category'])&&isset($_GET['brand'])&&isset($_GET['model'])) {
	$category=$_GET['category'];
	$brand=$_GET['brand'];
	$model=$_GET['model'];

$cat;
$sql="select * from category where category='$category'";
$result=mysqli_query($conn,$sql);
$rows=array();
while ($row=mysqli_fetch_assoc($result)) {
	$cat=$row['category'];
}

$sql1="select * from $cat where brand='$brand' and model='$model'";
$result1=mysqli_query($conn,$sql1);
while ($row=mysqli_fetch_assoc($result1)) {
		$rows[]=$row;
}
print json_encode($rows);
}

?>