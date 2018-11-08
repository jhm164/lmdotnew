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
<script>

function _(el){
	return document.getElementById(el);
}
function uploadFile(){
	var file = _("file1").files[0];
	// alert(file.name+" | "+file.size+" | "+file.type);
	var formdata = new FormData();
	formdata.append("file1", file);
	var ajax = new XMLHttpRequest();
	ajax.upload.addEventListener("progress", progressHandler, false);
	ajax.addEventListener("load", completeHandler, false);
	ajax.addEventListener("error", errorHandler, false);
	ajax.addEventListener("abort", abortHandler, false);
	ajax.open("POST", "file_upload_parser.php");
	ajax.send(formdata);
}
function progressHandler(event){
	_("loaded_n_total").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
	var percent = (event.loaded / event.total) * 100;
	_("progressBar").value = Math.round(percent);
	_("status").innerHTML = Math.round(percent)+"% uploaded... please wait";
}
function completeHandler(event){
	_("status").innerHTML = event.target.responseText;
	_("progressBar").value = 0;
}
function errorHandler(event){
	_("status").innerHTML = "Upload Failed";
}
function abortHandler(event){
	_("status").innerHTML = "Upload Aborted";
}
</script>
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

#wrapper
{
 text-align:center;
 margin:0 auto;
 padding:0px;
 width:995px;
}
#drop-area
{
 margin-top:20px;
 margin-left:220px;
 width:550px;
 height:200px;
 background-color:white;
 border:3px dashed grey;
}
.drop-text
{
 margin-top:70px;
 color:grey;
 font-size:25px;
 font-weight:bold;
}
#drop-area img
{
 max-width:200px;
}
</style>

 <script type="text/javascript">
  	
  	function f1(v){
  		v1=v;
  		alert(v);
  	}
  	$(document).ready(function(){
var v1;
  	var mainproductid;
  	var pcategory;
  	var pmodel;
  	var logoid1;
  		var pos=$('#main').position();
  		var xv=pos.top;
  		var lv=pos.left;
  		var rv=pos.right;
  		var bv=pos.bottom;



  $('#grab').click(function(){
var category=$('#category').val();
var brand=$('#brand').val();
var model=$('#model').val();
alert(category+" "+brand+" "+model);
$.getJSON( "loadproduct.php?category="+category+"&brand="+brand+"&model="+model, function( data ) {
  pcategory=category;
  var items = [];
  $.each( data, function( key, val ) {

mainproductid=val.id;
alert(mainproductid);
pmodel=val.model;
$('#main').attr('src',val.imagepath);
  });
});

  });

  		

$('.main').click(function j(v){
var g= $(this).attr('src');
$("#main").attr('src',g);
});


$('.logoc').click(function x(v){
	
	$('#logo').css('top',xv+20);
	$('#logo').css('left',lv+30);
logoid1=$(this).attr('id');
alert(logoid1);
var g= $(this).attr('src');
$('#logo').attr('src',g);
//alert('here');
});

/*
  $('#submit').click(function(){
var category=$('#category').val();
var brand=$('#brand').val();
var model=$('#model').val();
alert(category+" "+brand+" "+model);
$.getJSON( "createorder.php?category="+category+"&brand="+brand+"&model="+model, function( data ) {
  pcategory=category;
  var items = [];
  $.each( data, function( key, val ) {

mainproductid=val.id;
alert(mainproductid);
pmodel=val.model;
$('#main').attr('src',val.imagepath);
  });
});

  });

*/




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

 $("#drop-area").on('dragenter', function (e){
  e.preventDefault();
  $(this).css('background', '#BBD5B8');
 });

 $("#drop-area").on('dragover', function (e){
  e.preventDefault();
 });

 $("#drop-area").on('drop', function (e){
  $(this).css('background', '#D8F9D3');
  e.preventDefault();
  var image = e.originalEvent.dataTransfer.files;
  createFormData(image);
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



function createFormData(image)
{
 var formImage = new FormData();
 formImage.append('userImage', image[0]);
 uploadFormData(formImage);
}

function uploadFormData(formData) 
{
 $.ajax({
 url: "upload_image.php",
 type: "POST",
 data: formData,
 contentType:false,
 cache: false,
 processData: false,
 success: function(data){
  alert('Upload Successfully');
  $('#drop-area').html(data);

 }});
}
  </script>
</head>
<body class="container-fluid">

	<?php include 'connection.php'; ?>
<center>
	<div style=" height:auto;padding: 12px;color: white;">
		<table class="table">
			<form action="createorder.php" method="post" enctype="multipart/form-data">
			<thead><th>Create product</th></thead>
			<tbody>
				<tr>
					<td  colspan="2"><select  class="form-control" name="category" id="category">
							<option value="t-shirt" >t-shirt</option>
   							 <option value="mobile">mobile</option>

						</select>
					</td>

				</tr>
<tr>
	
	<td  colspan="2">
	<select  class="form-control" name="brand"  id="brand">
	<option>
<p>samsung</p>
</option>  
</select>
</td>
</tr>
<tr>
	<td  colspan="2">
	
<select name="model" class="form-control" id="model">
	<option  ><p>yk11</p></option>  
  <option  ><p>bz11</p></option>  
</select> 

</td>

</tr>
<tr>
	<td  colspan="2">
		<h4 style="color: blue;" id="grab">grab images</h4>
	</td>
</tr>

<tr>
	<td  colspan="2">
			
<select  class="form-control" name="size" >
	<option ><p>120x130</p></option>  
	 
</select>
		</td>
</tr>
<tr>
	<td colspan="2">
			<input type="text" class="form-control" name="quantity" placeholder="Quantity" >
		</td>
</tr>
<tr>
	<td colspan="2">
		<input type="text" class="form-control" name="sellp" placeholder="Enter your selling price " >
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

	<td >
		<?php 
$sql="select * from mobile where brand='samsung' and model='bz11'" ;
$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($result)) {
	?>
	<img src="<?php echo $row['imagepath'];?>" height="100" width="100"  class="img-rounded main"   >
	<?php
}
	?>
	</td>
</tr>
<tr>
	<td><div id="down" class="btn btn-default">down</div>
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


$sql="select * from logo where cid=4";
$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($result)) {
	?>
	<img src="<?php echo $row['imagepath'];?>" height="100" width="100"  class="img-rounded logoc"  id="<?php echo $row['id'];?>" >
	<?php
}
	?>
</td>
</tr>


<tr>
	<td><input type="submit" class="btn btn-success" value="Submit" name="upload">


	</td>
</tr>
			</tbody>
		</form>
		
<tr>
	<td><form id="upload_form" enctype="multipart/form-data" method="post">
  <input type="file" name="file1" id="file1"><br>
  <input type="button" value="Upload File" onclick="uploadFile()">
  <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
  <h3 id="status"></h3>
  <p id="loaded_n_total"></p>
  <input type="submit" name="">
</form>
<div id="wrapper">
 <input type="file">
 <div id="drop-area">
  <h3 class="drop-text">Drag and Drop Images Here</h3>

 </div>

</div>
</td>
</tr>

		</table>
	</div>
</center>

	

</body>
</html>
<?php
session_start();
$_session['id']=4;
include "connection.php";



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
$productid="<script>document.write(mainproductid)</script>";

$logoid="<script>document.write(logoid1)</script>";
echo $logoid;
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
	
$sql = "INSERT INTO `orders` (`id`, `type`, `productid`, `logoid`, `customerid`, `dateoforder`, `sellprice`, `status`) VALUES (NULL, 'mobile', '1', '$logoid', '$id',now(), $sellp, 'ordered')";

if (mysqli_query($conn,$sql)) {
	echo "<h4>order placed successfully</h4>";
}

}
}
	?>