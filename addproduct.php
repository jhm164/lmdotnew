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
var data=new Array() ;
var heading=new Array();
var senddata;
var category;
$("#type").change(function(){
  data.push($(this).attr('id'));
var x=$(this).val();
alert(x);
 $(location).attr('href', 'addproduct.php?category='+x);
});

$('#add').click(function(){
category=getUrlVars().category;
data[0]=6;
heading[0]='range';
var i;
for( i=1;i<=5;i++){
data[i]=$('.c'+i).val();
heading[i]=$('.c'+i).attr('id');

//var c+i=  $('.c'+i).val();
//alert($('.c'+i).val());
//alert(data[i]);

}
//for( i=1;i<=5;i++){
senddata='?category='+category+'&c1='+data[1]+'&c2='+data[2]+'&c3='+data[3]+'&c4='+data[4]+'&c5='+data[5];
  //}
/*

$.ajax({
   type: "GET",
   data: {heading:data},
   url: "addnewproduct.php",
   success: function(msg){
    alert(msg);
   }
});
*/
  $.ajax({url: "addnewproduct.php"+senddata, success: function(result){
       alert('success');
    }});
/*
$.ajax({
    type: "GET",
    url: "addnewproduct.php",
    dataType: "json",
    data: senddata,
    success: function(msg){
    alert(msg);
    }
});
*/
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
<table class="table table-striped">
  <thread></thread>
<tbody>
  <tr>
    <td>Enter category</td>
    <td><select id="type">
      <option>--select--</option>
       <?php 
$sql="select * from category";

  $result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($result)) {

       ?>
      <option value="<?php echo $row['category'] ;?>"><?php echo $row['category'] ;?></option>
    <?php } ?>
    <option value="gg">kk</option>
    </select></td>
   

  </tr>
  <?php 
$content=array();
$i=1;
if (isset($_GET['category'])) {
  $cat=$_GET['category'];
$sql="select * from category where category='$cat'";

  $result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($result)) {
//echo $row['c'.$i];
  /*
$content[1]=$row['c1'];
$content[2]=$row['c2'];
$content[3]=$row['c3'];
$content[4]=$row['c4'];
$content[5]=$row['c5'];
*/
//$i++;
for($j=1;$j<=5;$j++){




if($row['c'.$j]!='N/A'){
?>
 <tr><td>Enter <?php echo $row['c'.$j];?></td><td><input type="text" name="" class="form-control <?php echo 'c'.$j;?> " id="<?php echo $row['c'.$j];?>"></td></tr>
  
<?php
}
}
}

?>
<tr><td colspan="2"><input type="button" class="btn btn-primary" id="add" value="Add product" name=""></td></tr>
<?php
//echo $content[1];
//print_r($content);

/*
$sql="select * from $cat";

  $result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($result)) {
 
}
*/
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

	
