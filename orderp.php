
 <?php
session_start();
$_session['id']=4;
include "connection.php";
if (isset($_POST['category'])&&isset($_POST['brand'])&&isset($_POST['model'])&&isset($_POST['size'])&&isset($_POST['quantity'])&&isset($_POST['sellp'])&&isset($_POST['mainproductid'])&&isset($_POST['logoid'])) {
	//isset($_POST['category'])&&isset($_POST['brand'])&&isset($_POST['model'])&&isset($_POST['size'])&&isset($_POST['quantity'])&&isset($_POST['sellp'])
$category="N/A";
$brand="N/A";
$model="N/A";
$size="N/A";
$quantity=0;
$sellp=0;
$productid=0;
$logoid=0;
$id=0;
$category=$_POST['category'];
$brand=$_POST['brand'];
$model=$_POST['model'];
$size=$_POST['size'];
$quantity=$_POST['quantity'];
$sellp=$_POST['sellp'];
$id=$_session['id'];
$productid=$_POST['mainproductid'];
$logoid=$_POST['logoid'];
$flag="true";
if ($productid!=0&&$logoid!=0&&&&$id!=0) {
$sql1="select * from orders where productid='$productid' and logoid='$logoid' and customerid='$id' and status='ordered'";

$result=mysqli_query($conn,$sql1);
while ($row=mysqli_fetch_assoc($result)) {
	
	if ($row['id']==null) {
		# code...
	}else{
	$flag="false";
	
	echo "order already placed !";
}
}
}else
{
	echo "please fill all required fields";
}

if ($flag=="true") {
	if ($category!='N/A'&&$sellp!=0&&$logoid!=0&&$productid!=0) {
		
$sql = "INSERT INTO `orders` (`id`, `type`, `productid`, `logoid`, `customerid`, `dateoforder`, `sellprice`, `status`) VALUES (NULL, '$category', '$productid', '$logoid', '$id',now(), $sellp, 'ordered')";

if (mysqli_query($conn,$sql)) {
	echo "order placed successfully";


}else
{
	echo "please fill all fields !";
}
}
}

}else{

	
echo "please fill all required fields";
}
	?>
