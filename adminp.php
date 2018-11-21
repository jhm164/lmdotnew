<!DOCTYPE html>
<html>
<head>
  <title>try</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.2/css/all.css' >


<style type="text/css">

#main{
  width: 300px;
  height: 300px;
  position: relative;
}
#logo{

  position: absolute;
  
  width: 100px;
height: 100px;
}
    #leftmenu{
      margin-top: 20px;
       background-color: #357196;
       height: auto;
       width: 100%;
       color:white;
        font-size:  20px;
        padding: 5px;
        color:white;
      font-family: "Comic Sans MS", cursive, sans-serif;
        text-align: center;

    }
    .row1{
   
  margin: 0 auto;
  padding: 0;
  overflow: auto;
    }
    #d{
      background-color:#1e3a68;
      padding-top: 10px;
       height: auto;
       width: auto;
      color: white;
    }

    #colone{
      background-color: red;
      
    }

    .navbar-inverse{
      background-color: #1d4077;

    }

#leftmenu:hover { 
  width: 100%;
    color: #17202d;
    

   
}

  
.circularbutton{

  border-radius: 5px;
  border: 1px solid #98a1a4;
 padding: 10px;
  background: transparent; /* Change it to transparent */
  /* remove background-opacity */
  color: white;
  box-shadow: 2px 2px 2px white;

}
.h :hover{
  box-shadow: 1px 6px 8px white;
  border-radius: 20px;
}

.circularbutton:hover{

box-shadow: 3px 3px 2px white;

}



.bb
{
  border-radius: 20px;
}


  </style>


<style>
#spinner{
	position: fixed;
	top:50%;
left: 50%;
}
</style>
<script>

  function getUrlVars() {
        var vars = {};
        var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi,
            function (m, key, value) {
                vars[key] = value;
            });
        return vars;
    }

  $(document).ready(function(){

var tech=null;


 tech = getUrlVars().productid;
alert(tech);
if (tech!=null) {

/*
$('#evaluatearea').hide();
$('#spinner').hide();
$('#customerd').hide();
$('#finalp').hide();
$('#uploadarea').hide();
*/
var v=$("#main").position();
var marginl=$("#main").css("margin-left");
var margint=$("#main").css("margin-top");
var paddingt=$("#main").css("padding-top");
var paddingl=$("#main").css("padding-left");
var width=$("#main").outerWidth();
var height=$("#main").outerHeight();
var width1=$("#logo").outerWidth();
var height1=$("#logo").outerHeight();

$("#logo").css("margin-left",marginl);
$("#logo").css("margin-top",margint);
$("#logo").css("padding-left",paddingl);
$("#logo").css("padding-top",paddingt);
$("#logo").css("top",v.top+height/2-height1/2);
$("#logo").css("left",v.left+width/2-width1/2);


}
$('.here').click(function(){
  var d=$(this).attr('id');
alert(d);
 $(location).attr('href', 'adminp.php?productid='+d);
});
$('#find').click(function(){
  var d=$("#enterid").val();
alert(d);
 $(location).attr('href', 'adminp.php?productid='+d);
});

});
</script>

</head>
<body class="container-fluid" style="background-color: #AFC2D5;" id="load_screen" >

<div id="spinner" style="display: none;">
	<img src="css/spinner.gif" alt="loading" id="img-spinner">
	
</div>
<?php
session_start();
include 'connection.php';

if (isset($_POST['username'])&&isset($_POST['username'])) {
	
$username=$_POST['username'];
$password=$_POST['password'];


	$sql="select * from customer where username='$username' and password='$password'";

	$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($result)) {
	$_SESSION['fname']=$row['fname'];
	$_SESSION['lname']=$row['lname'];
	$_SESSION['id']=$row['id'];

}

}

if (isset($_SESSION['id'])) {
	# code...

?>
<div class="row" >
<div class="col-lg-2" style="background-color: #357196; box-shadow: 3px 4px 3px gray;"  >
    <div  style="background-color: #357196;padding-bottom: 5px;padding-top: 15px;">
    <center>
    <img src="images/oscar.png" style="height: 80px;width: 80px;border: 2px solid gray;padding: 2px; background-color: white;" class="img-circle">
    <h4 style="color:white;font-family: 'Times New Romen';font-weight: bold;"> <?php echo $_SESSION['fname'].' '.$_SESSION['lname']; ?> </h4>
    <a href="update_detail.php" style="color: white;">Update Profile</a></center>

  </div>

    <div style="background-color: #357196;padding-top: 5px; padding-bottom: 5px;">
    <center>
    <div id="leftmenu" ><span class="glyphicon glyphicon-dashboard" style="float: left;font-size: 30px; width: 100%;"></span><a href="dashboard.php" style="color: white;font-size: 15px;"> Dashboard</a></div>
    <div id="leftmenu" ><span class="glyphicon glyphicon-tasks" style="float: left;font-size: 30px;width: 100%;"></span> <a href="previous.php" style="color: white;font-size: 15px;">Orders</a></div>
    <div id="leftmenu" ><span class="glyphicon glyphicon-user" style="float: left;font-size: 30px;width: 100%;"></span><a href="update_detail.php" style="color: white;font-size: 15px;">Accaunt</a></div>
    <div style="margin-top: 100%;">
    <div ><center><span class="fa fa-facebook-official " style="font-size: 50px;color:white;"></span> </center></div>
    <div><center><span class="fa fa-twitter " style="font-size: 50px;color:white;"></span> </center></div>
    </div>
  </center>
  </div>  


  </div>
   <div class="col-lg-10"  >
    <div class="container-fluid" id="d"  style="background-color: #1e3a68;box-shadow: 1px 6px 4px gray; " >

  <span class="fas fa-wallet" style="float: left;font-size: 20px;" > : 4000</span>
  <a href="main.php?logout=true" style="color: white;margin-left:  2px;" >
  <div style="margin: 2px; background-color:   #001a66;border:1px solid white;float: right;padding: 8px;text-align: center;">
   <span class="glyphicon glyphicon-log-out" style="float: right;text-align: center;font-size: 16px;color: white;margin-right: 2px;"></span>Log out
 </div></a>
   <div style="margin: 2px; background-color:   #001a66;border:1px solid white;float: right;padding: 8px;text-align: center;">
    <span class="glyphicon glyphicon-user" style="font-size: 16px;"> </span><span style="margin-left: 3px;font-weight: bold;"><?php echo $_SESSION['fname'].' '.$_SESSION['lname']; ?> </span></div>
    </div>
<a href="addproduct.php"><div style="margin-top: 10px;background-color:  #001a66; height: 50px; text-align: center;width: 100%;color: white;padding-top: 24px; "><span style="padding-top: 24px;">Add new product</span></div></a>

<table style="margin-top:10px; ">
  <tr><td>
<input type="text " class="form-control" name="" placeholder="Enter order Id" id="enterid"> </td><td><input type="button" class="btn btn-primary" name="" id="find" value="Find Order">
</td>
</tr>
</table>
<?php
if (isset($_GET['productid'])) {
$logoid1;
$pid1;
$category1=null;
$type=null;
$customerid1=null;
$subcustomerid=null;
 $pid=$_GET['productid'];
 
$sql1 ="select * from orders where id=$pid";
$result1=mysqli_query($conn,$sql1);

?>
<center>
<table class="table table-dark">
  <thead><th>product</th></thead>
  <tbody>
  
<?php

while ($row=mysqli_fetch_assoc($result1)) {


  $veri=$row['id'];
?>
<tr>
  <td>Order Id</td>
   <td><?php echo $row['id']; ?></td>
</tr>
 <tr>
<td>Date of order</td>
<td><?php echo $row['dateoforder']; ?></td>
</tr>
  <tr>
<td>product ID</td>
<td><?php echo $row['productid']; ?></td>
</tr>
<tr>
  <td>Current Status</td>
 <td><?php echo $row['status']; ?></td>
</tr>

<tr  ><td colspan="2"  >
     <center style="margin-top:15px; ">   
<?php

$logoid1=$row['logoid'];
$pid1=$row['productid'];
$type=$row['type'];
$customerid1=$row['customerid'];
$subcustomerid=$row['subcustomerid'];
}

$sql2="select * from category where category='$type'" ;

$result2=mysqli_query($conn,$sql2);

while ($row=mysqli_fetch_assoc($result2)) {
$category1=$row['category'];
}

$sql2="select * from $category1 where id=$pid1" ;
$result3=mysqli_query($conn,$sql2);

while ($row=mysqli_fetch_assoc($result3)) {

?>
<img src="<?php echo $row['imagepath'];?>" id="main" style="background-color: white;">
<?php
}
$sql2="select * from logo where id=$logoid1" ;

$result2=mysqli_query($conn,$sql2);

while ($row=mysqli_fetch_assoc($result2)) {
  ?>
            
<img src="<?php echo $row['imagepath'];?>" id="logo" style="background:transparent;">
  <?php



  
?></center>
</td></tr>
<?php }

$sql2="select * from customer where id=$customerid1" ;

$result2=mysqli_query($conn,$sql2);

while ($row=mysqli_fetch_assoc($result2)) {

 ?>
 <tr style="background-color: black;color:white;"><td colspan="2"><center><h3>Marchant Detail</h3></center></td></tr>
 <tr><td>Marchant Name</td><td><?php echo $row['fname'].'  ',$row['mname'].'  '.$row['lname']; ?></td></tr>
 <tr><td> Marchant Address</td><td><?php echo $row['address'];?></td></tr>
 <tr><td>Pin Code</td><td><?php echo $row['pin'];?></td></tr>
  <tr><td>Contact</td><td><?php echo $row['contact'];?></td></tr>
<?php }

$sql2="select * from customerdetail where id=$subcustomerid" ;

$result2=mysqli_query($conn,$sql2);

while ($row=mysqli_fetch_assoc($result2)) {

?>
<tr style="background-color: black;color:white;"><td colspan="2"><center><h3>Customer Detail</h3></center></td></tr>
<tr><td>Customer Name</td><td><?php echo $row['name'];?></td></tr>
<tr><td>Address</td><td><?php echo $row['add1'];?></td></tr>
<tr><td>Landmark</td><td><?php echo $row['landmark'];?></td></tr>
<tr><td>State</td><td><?php echo $row['state'];?></td></tr>
<tr><td>City</td><td><?php echo $row['city'];?></td></tr>
<tr><td>Pin</td><td><?php echo $row['pincode'];?></td></tr>
<tr><td>Landmark</td><td><?php echo $row['landmark'];?></td></tr>
<tr><td>E-mail</td><td><?php echo $row['email'];?></td></tr>
<tr><td>Mobile</td><td><?php echo $row['mobile'];?></td></tr>
<?php
}
?>
</tbody>
</table>
</center>
<?php
 } ?>
 <center style="background-color: black;color: white;"><h3>All Current orders</h3></center>

    <table class="table table-dark">
      <thead>
      <tr class=""><th>Order id</th><th>Type</th><th>Date</th><th>Status</th></tr>
</thead>
<tbody>
<?php
$sql ="select * from orders where status='ordered'";
$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($result)) {


?>


<tr>
  <td><?php echo $row['id']; ?></td> <td><?php echo $row['type']; ?></td> <td><?php echo $row['dateoforder']; ?></td> <td><?php echo $row['status']; ?></td><td><p id="<?php echo $row['id']; ?>" class="here" style="color: blue;">More info</p></td>
</tr>
<?php
}
?>
  
</tbody>
    </table>
</div>


</div>

<?php
}else{
	
	echo "<h1 class='alert alert-danger'>Please login</h1>";
	
}
 if (isset($_GET['logout'])){
if($_GET['logout']=='true'){
	session_destroy();
header('Location:login.php');
}

} ?>

</body>
</html>

	
