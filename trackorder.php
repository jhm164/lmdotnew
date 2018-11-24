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
      padding-bottom:  10px;
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

<style type="text/css">
  

ol.progtrckr {
    margin: 0;
    padding: 0;
    list-style-type none;
}

ol.progtrckr li {
    display: inline-block;
    text-align: center;
    line-height: 3.5em;
}

ol.progtrckr[data-progtrckr-steps="2"] li { width: 49%; }
ol.progtrckr[data-progtrckr-steps="3"] li { width: 33%; }
ol.progtrckr[data-progtrckr-steps="4"] li { width: 24%; }
ol.progtrckr[data-progtrckr-steps="5"] li { width: 19%; }
ol.progtrckr[data-progtrckr-steps="6"] li { width: 16%; }
ol.progtrckr[data-progtrckr-steps="7"] li { width: 14%; }
ol.progtrckr[data-progtrckr-steps="8"] li { width: 12%; }
ol.progtrckr[data-progtrckr-steps="9"] li { width: 11%; }

ol.progtrckr li.progtrckr-done {
    color: black;
    border-bottom: 4px solid yellowgreen;
}
ol.progtrckr li.progtrckr-todo {
    color: black; 
    border-bottom: 4px solid black;
}

ol.progtrckr li:after {
    content: "\00a0\00a0";
}
ol.progtrckr li:before {
  background-color: #afc2d5;
    position: relative;
    bottom: -2.5em;
    float: left;
    left: 50%;
    line-height: 1em;
}
ol.progtrckr li.progtrckr-done:before {
    content: "\2713";
    color: white;
    background-color: yellowgreen;
    height: 2.2em;
    width: 2.2em;
    line-height: 2.2em;
    border: none;
    border-radius: 2.2em;
}
ol.progtrckr li.progtrckr-todo:before {
    content: "\039F";
     display: inline-block;
    color: black;
    background-color: #afc2d5;
    font-size: 2.2em;
    bottom: -1.2em;
}


  
</style>


<script type="text/javascript">
  
$(document).ready(function(){
 $('#ordered').removeClass('progtrckr-todo');
$('#shipped').removeClass('progtrckr-todo');
$('#delivered').removeClass('progtrckr-todo');

 
$('.oo').click(function(){
var status=$(this).attr('id');
//alert(status);
if (status=='ordered') {
  $('#ordered').removeClass('progtrckr-todo');
$('#shipped').removeClass('progtrckr-todo');
$('#delivered').removeClass('progtrckr-todo');
$('#ordered').addClass('progtrckr-done');
$('#shipped').addClass('progtrckr-todo');
$('#delivered').addClass('progtrckr-todo');
}else if (status=='shipped') {
   $('#ordered').removeClass('progtrckr-todo');
$('#shipped').removeClass('progtrckr-todo');
$('#delivered').removeClass('progtrckr-todo');
$('#ordered').addClass('progtrckr-done');
$('#shipped').addClass('progtrckr-done');
$('#delivered').addClass('progtrckr-todo');

//alert($('#ordered').attr('class'));
}else if (status=='delivered') {
 
$('#shipped').removeClass('progtrckr-todo');
$('#delivered').removeClass('progtrckr-todo');
$('#ordered').addClass('progtrckr-done');
$('#shipped').addClass('progtrckr-done');
$('#delivered').addClass('progtrckr-done');
}

});


$('#accauntsett').change(function(){
  var a=$(this).val();

$(location).attr('href',a);
});
$('#menuselect').change(function(){
  var a=$(this).val();

$(location).attr('href',a);
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
	$admin=0;
$username=$_POST['username'];
$password=$_POST['password'];


	$sql="select * from customer where username='$username' and password='$password'";

	$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($result)) {
  if ($row['admin']==1) {
 
 $_SESSION['admin']=$row['admin'];
header('Location:adminp.php');

  }
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
   </center>
  
 
  </div>

    <div style="background-color: #357196;padding-top: 5px; padding-bottom: 5px;">
    <center>
    <div id="leftmenu" ><span class="glyphicon glyphicon-dashboard" style="float: left;font-size: 30px; width: 100%;"></span><a href="dashboard.php" style="color: white;font-size: 15px;"> Dashboard</a></div>
    <div id="leftmenu" ><span class="glyphicon glyphicon-tasks" style="float: left;font-size: 30px;width: 100%;margin-bottom: 10px;"></span> 
<select style="color: black;font-size: 15px;" class="form-control" id="menuselect">
  <option>--select--</option>
   <option value="createorder5.php">Create New order</option>
  <option value="previous.php">My Orders</option>
   <option value="trackorder.php">track Orders</option>


</select>
    </div>
    <div id="leftmenu" ><span class="glyphicon glyphicon-user" style="float: left;font-size: 30px;width: 100%;margin-bottom: 10px;"></span>
  <select style="color: black;font-size: 15px;"  class="form-control" id="accauntsett">
  <option>--select--</option>
   <option value="update_detail.php">Update Details</option>


</select>

    </div>
  



   
  <?php    
 if (isset($_SESSION['admin'])){

 
if ($_SESSION['admin']==1) {
   

    ?>
     <div id="leftmenu" ><span class="glyphicon glyphicon-asterisk" style="float: left;font-size: 30px; width: 100%;"></span><a href="adminp.php" style="color: white;font-size: 15px;"> All order</a></div>

   <div id="leftmenu" ><span class="glyphicon glyphicon-asterisk" style="float: left;font-size: 30px; width: 100%;"></span><a href="addproduct.php" style="color: white;font-size: 15px;"> Add product</a></div>
     <?php 

}
}
     ?>

    <div style="margin-top: 100%;">
    <div ><center><span class="fa fa-facebook-official " style="font-size: 50px;color:white;"></span> </center></div>
    <div><center><span class="fa fa-twitter " style="font-size: 50px;color:white;"></span> </center></div>
    </div>
  
  </center>
  </div>  


  </div>
   <div class="col-lg-10"  >
<center>

<div class="row" style=" margin: 10px;margin-top:10%; ">


<?php
include 'connection.php';


?>
<ol class="progtrckr" data-progtrckr-steps="5" style="margin-top:10px;margin-bottom: 10px; ">
    <li id="ordered" >Ordered</li><!--
 --><li id="shipped" >Shipped</li><!--
 --><li id="delivered" >Delivered</li>
</ol>
<table class="table table-striped" style="box-shadow: 1px 6px 6px gray;">
  <thead><th>Date</th><th>Order ID</th><th>Customer Name</th><th>Status</th></thead>
  <tbody>
  <?php 

$id=$_SESSION['id'];

$sql = "SELECT * FROM `orders`WHERE customerid =$id Order by 'dateoforder' ASC";
    
$result=mysqli_query($conn,$sql);

while ($row=mysqli_fetch_assoc($result)) {
?>
<tr>
  <td><?php echo $row['dateoforder'];  ?></td>
  <td><?php echo $row['id'];  ?></td>
  <td>saurabh solkar</td>
  <td><?php
if($row['status']=='shipped'){
   echo '<p style="color:red;">'.$row['status'].'</p>';
}else if($row['status']=='ordered'){
   echo '<p style="color:blue;">'.$row['status'].'</p>';
}else if($row['status']=='delivered'){
   echo '<p style="color:green;">'.$row['status'].'</p>';
}
    ?></td>
  <td ><span class=" oo" id="<?php echo $row['status'];  ?>" style="color:green;" >show status</span></td>
  
</tr>

<?php
}


  ?>

</div>
</center>

</div>

<?php
}else{
	
	echo "<h1 class='alert alert-danger'>Please login</h1>";
	header('Location:login.php');
}
 if (isset($_GET['logout'])){
if($_GET['logout']=='true'){
	session_destroy();
header('Location:login.php');
}

} ?>

</body>
</html>

	
