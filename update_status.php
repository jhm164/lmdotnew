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

<script>


$(document).ready(function(){
$('#spinner').hide();



$('#accauntsett').change(function(){
  var a=$(this).val();

$(location).attr('href',a);
});
$('#menuselect').change(function(){
  var a=$(this).val();

$(location).attr('href',a);
});

$('.update').click(function(){
var s = $('#sel').val();
var id=$('#id1').val();
//alert(s+id);
$.post("update_s.php",
    {
   id:id,
   status:s
    }, function(data, status){
      alert(data);
       // $('#status').text(data);
   
    });
});


});
</script>

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
//alert(tech);
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
  $(location).attr('href','update_status.php?productid='+d);
 //alert(d);
 
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
   <div id="leftmenu" ><span class="glyphicon glyphicon-dashboard" style="float: left;font-size: 30px; width: 100%;"></span><a href="admindash.php" style="color: white;font-size: 15px;"> Dashboard</a></div>
    <div id="leftmenu" ><span class="glyphicon glyphicon-tasks" style="float: left;font-size: 30px;width: 100%;"></span> <a href="adminp.php" style="color: white;font-size: 15px;">All Orders</a></div>
    <div id="leftmenu" ><span class="glyphicon glyphicon-user" style="float: left;font-size: 30px;width: 100%;"></span><a href="register.php" style="color: white;font-size: 15px;">Create new accaunt</a></div>


   <div id="leftmenu" ><span class="glyphicon glyphicon-asterisk" style="float: left;font-size: 30px; width: 100%;"></span><a href="addproduct.php" style="color: white;font-size: 15px;"> Add product</a></div>
    
<div id="leftmenu" ><span class="glyphicon glyphicon-asterisk" style="float: left;font-size: 30px; width: 100%;"></span><a href="update_status.php" style="color: white;font-size: 15px;"> Update Order Status</a></div>

  </center>
  </div>  


  </div>
   <div class="col-lg-10"  >
<?php
    if(isset($_GET['productid'])){
       $pid=$_GET['productid'];
 
$sql1 ="select * from orders where id=$pid";
$result1=mysqli_query($conn,$sql1);
while ($row=mysqli_fetch_assoc($result1)) {

      ?>
      <center>
      <table class="table">
        <tbody>
<tr>
  <td>Order Id</td>
   <td><input type="text" name="" id="id1"  value="<?php echo $row['id']; ?>" readonly>
    </td>
</tr>
<tr>
  <td>Order Type</td>
 <td><input type="text" name="" id="id1"  value="<?php echo $row['type']; ?>" readonly></td>
</tr>
 <tr>
<td>Date of order</td>
<td><input type="text" name="" id="id1"  value="<?php echo $row['dateoforder']; ?>" readonly></td>
</tr>

<tr>
  <td>Current Status</td>
 <td><input type="text" name="" id="id1"  value="<?php echo $row['status']; ?>" readonly="readonly" ></td>
</tr>
<tr>
  <td>Update new Status <span></span></td>
 <td>
  <select id="sel">
    <option value="ordered">Ordered</option>
     <option value="shipped">Shipped</option>

 <option value="delivered">delivered</option>

  </select>
   

 </td>
</tr>
<tr>
  <td colspan="2">
 <center> <input type="button" class="btn btn-success update" id=" " value="Update" name="">
  </center>  </td>
</tr>
</tbody></table>
</center>
<?php } ?>
   
   <?php } ?>
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
  <td><?php echo $row['id']; ?></td> <td><?php echo $row['type']; ?></td> <td><?php echo $row['dateoforder']; ?></td> <td><?php echo $row['status']; ?></td><td><p id="<?php echo $row['id']; ?>" class="here" style="color: blue;" name="<?php echo $row['status'] ?>">More info</p></td>
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

  
