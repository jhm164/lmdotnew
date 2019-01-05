
 <?php
session_start();
include "connection.php";

//if (isset($_GET['category'])&&isset($_GET['brand'])&&isset($_GET['model'])&&isset($_GET['size'])&&isset($_GET['quantity'])&&isset($_GET['sellp'])&&isset($_GET['mainproductid'])&&isset($_GET['logoid'])&&isset($_GET['selectedcustomer'])&&isset($_GET['paymentmode'])&&isset($_GET['total'])&&isset($_GET['mainid'])) {
	//isset($_GET['category'])&&isset($_GET['brand'])&&isset($_GET['model'])&&isset($_GET['size'])&&isset($_GET['quantity'])&&isset($_GET['sellp'])
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
$totalprice=0;
$mainid='';

$category=$_GET['category'];
$brand=$_GET['brand'];
$model=$_GET['model'];
$size=$_GET['size'];
$quantity=$_GET['quantity'];
$sellp=$_GET['sellp'];
$id=$_SESSION['id'];
$productid=$_GET['mainproductid'];
$logoid=$_GET['logoid'];
$selectedcustomer=$_GET['selectedcustomer'];
$paymentmode=$_GET['paymentmode'];
$totalprice=$_GET['total'];
$mainid=$_GET['mainid'];

echo $category.' '.$brand.' '.$model.' '.$size.' '.$quantity.' '.$sellp.' '.$id.' '.$productid.' '.$logoid.' '.$selectedcustomer.' '.$paymentmode.' '.$totalprice.' '.$mainid ;

$flag="true";
if ($productid!=null&&$logoid!=null&&$id!=null) {
$sql1="select * from orders where productid='$productid' and logoid='$logoid' and customerid='$id' and status='ordered' and mainid='$mainid' ";
echo $sql1;

$result=mysqli_query($conn,$sql1);
while ($row=mysqli_fetch_assoc($result)) {

	
	if ($row['id']==null) {
		
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
		



$sql = "INSERT INTO `orders` (`id`, `type`, `productid`, `logoid`, `customerid`, `dateoforder`, `totalprice`, `sellprice`, `subcustomerid`, `ordermode`, `status`,`mainlogoid`) VALUES (NULL,'$category', '$productid', '$logoid', '$id',now(), $totalprice, $sellp, '$selectedcustomer', '$paymentmode','ordered','$mainid');";
if (mysqli_query($conn,$sql)) {

$sql4="update  customer set accaunt=accaunt-$totalprice where id=$id";

if (mysqli_query($conn,$sql4)) {
	echo "order placed successfully";
}else{
	echo "please fill all fields ";
}


}else
{
	echo "please fill all fields !";
}
}
}

//}else{

	
//echo "please fill all required fields ";
//}
	?>
