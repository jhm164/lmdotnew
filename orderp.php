
 <?php
session_start();
include "connection.php";

if (isset($_POST['category'])&&isset($_POST['brand'])&&isset($_POST['model'])&&isset($_POST['size'])&&isset($_POST['quantity'])&&isset($_POST['sellp'])&&isset($_POST['mainproductid'])&&isset($_POST['logoid'])&&isset($_POST['selectedcustomer'])&&isset($_POST['paymentmode'])) {
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
$selectedcustomer=null;
$paymentmode=null;

$category=$_POST['category'];
$brand=$_POST['brand'];
$model=$_POST['model'];
$size=$_POST['size'];
$quantity=$_POST['quantity'];
$sellp=$_POST['sellp'];
$id=$_SESSION['id'];
$productid=$_POST['mainproductid'];
$logoid=$_POST['logoid'];
$selectedcustomer=$_POST['selectedcustomer'];
$paymentmode=$_POST['paymentmode'];

/*
echo $category.' '.$brand.' '.$model.' '.$size.' '.$quantity.' '.$sellp.' '.$id.' '.$productid.' '.$logoid.' '.$selectedcustomer.' '.$paymentmode;

*/
$flag="true";
if ($productid!=null&&$logoid!=null&&$id!=null) {
$sql1="select * from orders where productid='$productid' and logoid='$logoid' and customerid='$id' and status='ordered' ";
echo "here";

$result=mysqli_query($conn,$sql1);
while ($row=mysqli_fetch_assoc($result)) {
	echo "here";
	
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
		



$sql = "INSERT INTO `orders` (`id`, `type`, `productid`, `logoid`, `customerid`, `dateoforder`, `totalprice`, `sellprice`, `subcustomerid`, `ordermode`, `status`) VALUES (NULL,'$category', '$productid', '$logoid', '$id',now(), 0, $sellp, '$selectedcustomer', '$paymentmode','ordered');";
if (mysqli_query($conn,$sql)) {
	echo "order placed successfully";


}else
{
	echo "please fill all fields !";
}
}
}

}else{

	
echo "please fill all required fields outer";
}
	?>
