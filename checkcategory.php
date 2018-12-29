<?php


include 'connection.php';
if(isset($_GET['cat'])){
	$cat=$_GET['cat'];
	//echo $cat;
$sql='select * from category where category="'.$cat.'"';
//echo $sql;
$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($result)) {
	echo "category already exit";
}
//echo "no result found";
}


if (isset($_GET['fp'])&&isset($_GET['sp'])&&isset($_GET['tp'])&&isset($_GET['category1'])) {
	
	$fp=$_GET['fp'];
	$sp=$_GET['sp'];
	$tp=$_GET['tp'];
$category1=$_GET['category1'];

//	echo $fp.' '.$sp.' '.$tp;

$sql = "INSERT INTO `category` (`id`, `category`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`) VALUES (NULL, '$category1', '$fp', '$sp', 'imagepath', '$tp', 'zone','price')";


if (mysqli_query($conn,$sql)) {



	$sql="create table $category1(id int AUTO_INCREMENT PRIMARY KEY,$fp VARCHAR(50),$sp VARCHAR(50),$tp VARCHAR(50),imagepath VARCHAR(50),zone VARCHAR(50),price VARCHAR(50) )";
	//echo  $sql;
	if (mysqli_query($conn,$sql)) {
		echo "new category added successfully";
	}else{
		echo "fail to create table";
	}
	





}else{
	echo "fail to add";
}

}




?>