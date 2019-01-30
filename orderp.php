
 <?php
session_start();
include "connection.php";

//if (isset($_GET['category'])&&isset($_GET['brand'])&&isset($_GET['model'])&&isset($_GET['size'])&&isset($_GET['quantity'])&&isset($_GET['sellp'])&&isset($_GET['mainproductid'])&&isset($_GET['logoid'])&&isset($_GET['selectedcustomer'])&&isset($_GET['paymentmode'])&&isset($_GET['total'])&&isset($_GET['mainid'])) {
	//isset($_GET['category'])&&isset($_GET['brand'])&&isset($_GET['model'])&&isset($_GET['size'])&&isset($_GET['quantity'])&&isset($_GET['sellp'])
$category="N/A";

$quantity=0;
$sellp=0;
$productid=0;
$logoid=0;
$id=0;
$selectedcustomer=null;
$paymentmode=null;
$totalprice=0;
$mainid='';
$zoom1='';
$category=$_GET['category'];

$quantity=$_GET['quantity'];
$sellp=$_GET['sellp'];
$id=$_SESSION['id'];
$productid=$_GET['mainproductid'];
$logoid=$_GET['logoid'];
$selectedcustomer=$_GET['selectedcustomer'];
$paymentmode=$_GET['paymentmode'];
$totalprice=$_GET['total'];
$mainid=$_GET['mainid'];
$zoom1=$_GET['zoom1'];
echo $category.' '.$quantity.' '.$sellp.' '.$id.' '.$productid.' '.$logoid.' '.$selectedcustomer.' '.$paymentmode.' '.$totalprice.' '.$mainid.' '.$zoom1 ;

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
		
$sql = "INSERT INTO `orders` (`id`, `type`, `productid`, `logoid`, `customerid`, `dateoforder`, `totalprice`, `sellprice`, `subcustomerid`, `ordermode`, `status`,`mainlogoid`,`zoom1`) VALUES (NULL,'$category', '$productid', '$logoid', '$id',now(), $totalprice, $sellp, '$selectedcustomer', '$paymentmode','ordered','$mainid','$zoom1');";
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
