<!DOCTYPE html>
<html>
<head>
	<title>Create Order</title>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
<style type="text/css">
		.table {border: 1px solid black!important;} 
.table tr, .table td, .table th {border: 0!important;}
.table tr td, 
.table tr th {border-left: 1px solid black!important;}
.table tr td:nth-child(1), 
.table tr th:nth-child(1) {border-left: 0!important;}
#main
	{
		position: relative;
		
	}
	#logo
	{
		position: absolute;
		
	}
</style>

 <script type="text/javascript">
  	var v1;
  	function f1(v){
  		v1=v;
  		alert(v);
  	}
  	$(document).ready(function(){

  		var pos=$('#main').position();
  		var xv=pos.top;
  		var lv=pos.left

  		
$('#cloud').click(function(){
$('#logo').attr('src',"google.png");

});

$('.logoc').click(function x(v){
	
	$('#logo').css('top',xv+20);
	$('#logo').css('left',lv+25);

var g= $(this).attr('src');
$('#logo').attr('src',g);
//alert('here');
});

$('#down').click(function(){

var s=$('#logo').position();
$('#logo').css('top',s.top+3);
});

$('#up').click(function(){
var s=$('#logo').position();
$('#logo').css('top',s.top-3);
});

$('#demo').click(function(v){
alert(v1);
});


$('#zoomin').click(function(){
var s=$('#logo').height();
$('#logo').css('height',s+3);
});


$('#zoomout').click(function(){
var s=$('#logo').height();
$('#logo').css('height',s-3);
});


$('#left').click(function(){
var s=$('#logo').position();

$('#logo').css('left',s.left-3);
});

$('#right').click(function(){
var s=$('#logo').position();
$('#logo').css('left',s.left+3);
});



$('#submit').click(function(){




var invoice=$_FILES["invoice"]["name"];
alert(invoice);
if (invoice!="") {

$.ajax({url: "image.php?&invoice="+invoice, success: function(result){
        alert('successfully added');
    }});

}
});

  	});
  </script>
</head>
<body class="container-fluid">
<center>
	<div style=" height:auto;padding: 12px;color: white;">
		<table class="table">
			<form action="createorder.php" method="post" enctype="multipart/form-data">
			<thead><th>Create product</th></thead>
			<tbody>
				<tr>
					<td><select  class="form-control" name="category">
							<option value="t-shirt" >tshirt</option>
   							 <option value="shirt">mobile</option>

						</select>
					</td>

				</tr>
<tr>
	
	<td>
	<select  class="form-control" name="brand" >
	<option>
<p>brand</p>
</option>  
</select>
</td>
</tr>
<tr>
	<td>
	
<select name="model" class="form-control">
	<option  ><p>model</p></option>  
  
</select> 

</td>

</tr>

<tr>
	<td>
			
<select  class="form-control" name="size" >
	<option><p>120x130</p></option>  
	 
</select>
		</td>
</tr>
<tr>
	<td>
<form action="createorder.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file_img">
	<input type="submit" class="btn btn-success" name="btn_upload" value="Upload">
</form>
	</td>
</tr>
<tr>
	<td><a href="createorder.php">click</a></td>
</tr>
<tr>
	<td>
	<center><img src="imgmain/tshirt.jpg" id="main" height="300" id="main" width="300">
<img  height="100" id="logo" width="100"></center>


	</td>
</tr>
<tr>
	<td><button id="down" class="btn btn-default">down</button>
<button id="up" class="btn btn-default">up</button>
<button id="zoomin" class="btn btn-default">zoomin</button>
<button id="zoomout" class="btn btn-default">zoomout</button>
<button id="left" class="btn btn-default">left</button>
<button id="right" class="btn btn-default">right</button>
</td>
</tr>
<tr>
	<td>
	<?php 
include 'connection.php';

$sql="select * from logo where cid=4";
$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($result)) {
	?>
	<img src="<?php echo $row['imagepath'];?>" height="100" width="100"  class="img-rounded logoc" onclick="x(<?php echo $row['id']; ?>)" id="<?php echo $row['id'];?>" >
	<?php
}
	?>
</td>
</tr>
<tr>
	<td>
			<input type="text" class="form-control" name="quantity" placeholder="Quantity" >
		</td>
</tr>
<tr>
	<td>
		<input type="text" class="form-control" name="sellp" placeholder="Enter your selling price per product" >
		</td>
</tr>
<tr>
	<td><input type="submit" class="btn btn-success" value="Submit" name="upload"></td>
</tr>
			</tbody>
		</form>
		</table>
	</div>
</center>

	


</body>
</html>
<?php
session_start();
$_session['id']=4;
include "connection.php";

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
	$id=$_session['id'];
$sql = "INSERT INTO `lmdot`.`logo` (`id`, `imagepath`, `imagename`, `type`, `cid`) VALUES (NULL, '$filepath','$filename','$filetype',$id)";
if(mysqli_query($conn,$sql)){
echo "success";
}else
{

}
 

}

if (isset($_POST['upload'])) {
	//isset($_POST['category'])&&isset($_POST['brand'])&&isset($_POST['model'])&&isset($_POST['size'])&&isset($_POST['quantity'])&&isset($_POST['sellp'])
$category="N/A";
$brand="N/A";
$model="N/A";
$size="N/A";
$quantity=0;
$sellp=0;

$category=$_POST['category'];
$brand=$_POST['brand'];
$model=$_POST['model'];
$size=$_POST['size'];
$quantity=$_POST['quantity'];
$sellp=$_POST['sellp'];
$id=$_session['id'];
$productid=1;
$logoid=1;

$flag="true";
$sql1="select * from orders where productid='$productid' and logoid='$logoid' and customerid='$id' and status='ordered'";

$result=mysqli_query($conn,$sql1);
while ($row=mysqli_fetch_assoc($result)) {
	if ($row['id']==null) {
		# code...
	}else{
	$flag="false";
	echo '<h4>order placed already</h4>';
	
}
}

if ($flag=="true") {
	
$sql = "INSERT INTO `orders` (`id`, `type`, `productid`, `logoid`, `customerid`, `dateoforder`, `sellprice`, `status`) VALUES (NULL, 'mobile', '1', '1', '$id',now(), $sellp, 'ordered')";

if (mysqli_query($conn,$sql)) {
	echo "<h4>order placed successfully</h4>";
}

}
}
	?>