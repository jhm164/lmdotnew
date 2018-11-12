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
.circularbutton:hover{

box-shadow: 3px 3px 2px #255370;

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

    $(window).load(function () {
        // run code
       $('#spinner').show();
    });
$(document).ready(function(){
$('#spinner').hide();
});
</script>

</head>
<body class="container-fluid" style="background-color: #AFC2D5;" id="load_screen" ng-app="myApp">

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
    <button class="circularbutton">Update Profile</button>
  
    </center>
  </div>

    <div style="background-color: #357196;padding-top: 5px; padding-bottom: 5px;">
    <center>
    <div id="leftmenu" ><span class="glyphicon glyphicon-dashboard" style="float: left;font-size: 30px; width: 100%;"></span><a href="dashboard.php" style="color: white;font-size: 15px;"> Dashboard</a></div>
    <div id="leftmenu" ><span class="glyphicon glyphicon-tasks" style="float: left;font-size: 30px;width: 100%;"></span> <a href="createorder4.php" style="color: white;font-size: 15px;">Orders</a></div>
    <div id="leftmenu" ><span class="glyphicon glyphicon-user" style="float: left;font-size: 30px;width: 100%;"></span><a href="#!accaunt" style="color: white;font-size: 15px;">Accaunt</a></div>
    <div style="margin-top: 100%;">
    <div ><center><span class="fa fa-facebook-official " style="font-size: 50px;color:white;"></span> </center></div>
    <div><center><span class="fa fa-twitter " style="font-size: 50px;color:white;"></span> </center></div>
    </div>
  </center>
  </div>  


  </div>
   <div class="col-lg-10"  >

  <div class="container-fluid" id="d"  style="background-color: #1e3a68;box-shadow: 1px 6px 4px gray;" >

  <span class="fas fa-wallet" style="float: left;font-size: 20px;" > : 4000</span>

   <span class="glyphicon glyphicon-log-out" style="float: right;"><a href="main.php?logout=true" >Log out</a></span>
    <span class="glyphicon glyphicon-user" style="float: right;font-size: 20px;"> <p><?php echo $_SESSION['fname'].' '.$_SESSION['lname']; ?> </p></span>
    </div>

<table>
<tbody>
<tr><td>
<div class="panel panel-default " style="margin: 5px;padding: 14px; box-shadow:  5px 6px 4px gray;width: 300px;" >
  <div class="panel-body">
    <h5>Total transaction</h5>
  </div>
</div>

	</td><td>
<div class="panel panel-default " style="margin: 5px;padding: 14px; box-shadow:  5px 6px 4px gray;width: 300px;" >
  <div class="panel-body">
    <h5>Total transaction</h5>
  </div>
</div>

	</td></tr>	

</tbody>
</table>





<div class="row1">


<div class="panel panel-default " style="margin-top: 10px;padding: 14px;width: 300px;box-shadow:  5px 6px 4px gray; float: left;" >
  <div class="panel-body">
    <h5>Total transaction</h5>
  </div>
</div>
</div>

<div ng-view></div>
</div>
</div>
?>
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

	
