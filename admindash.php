<html>
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js">
    </script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
<?php 
session_start();
$id=$_SESSION['id'];
include 'connection.php'; 
$sql="select * from orders";
$delivered=0;
$shipped=0;
$ordered=0;
$total=0;
$totalprice=0;
$sellp=0;
$actualp=0;
$benifit=0;
$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($result)) {
    $total++;
    $status=$row['status'];
    $totalprice=$totalprice+$row['totalprice'];
$sellp=$sellp+$row['sellprice'];
   if ($status=='ordered') {
    $ordered++;

   }
   if ($status=='shipped') {
    $shipped++;
   }
    if ($status=='delivered') {
    $delivered++;
   }

}
  
$benifit=$sellp-$totalprice;
?>



 <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);


      function drawChart() {

        var data = google.visualization.arrayToDataTable([
         ['Task', 'Hours per Day'],
          ['ordered',   <?php echo $ordered;?> ],
           ['shipped',   <?php echo $shipped;?> ],
            ['delivered',   <?php echo $delivered;?> ]
         
                 ]);

        var options = {
          title: 'My Orders'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

   <script type="text/javascript">
     $(document).ready(function(){


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

    #o{
      
    
     
    }
    #d{
     
      padding-top: 10px;
       height: auto;
       width: 100%;
      color: black;
       padding: 6px;box-shadow: 6px 2px 2px gray;float: left; margin:10px; padding: 5px;
     border: 3px solid  #428ebd;
     background-color: white;
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

#d1{
    background-color:#1e3a68;
      padding-top: 10px;
       height: auto;
       width: auto;
      color: white;
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
  </head>
  <body class="container-fluid">


<div class="row" >
<div class="col-lg-2" style="background-color: #357196; box-shadow: 3px 4px 3px gray;"  >
    <div  style="background-color: #357196;padding-bottom: 5px;padding-top: 15px;">
    <center>
    <img src="images/oscar.png" style="height: 80px;width: 80px;border: 2px solid gray;padding: 2px; background-color: white;" class="img-circle">
    <h4 style="color:white;font-family: 'Times New Romen';font-weight: bold;"><?php echo $_SESSION['fname'].' ',$_SESSION['lname']; ?><br></h4>
   
  
    </center>
  </div>

     <div style="background-color: #357196;padding-top: 5px; padding-bottom: 5px;">
    <center>
   <div id="leftmenu" ><span class="glyphicon glyphicon-dashboard" style="float: left;font-size: 30px; width: 100%;"></span><a href="admindash.php" style="color: white;font-size: 15px;"> Dashboard</a></div>
    <div id="leftmenu" ><span class="glyphicon glyphicon-tasks" style="float: left;font-size: 30px;width: 100%;"></span> <a href="adminp.php" style="color: white;font-size: 15px;">All Orders</a></div>
    <div id="leftmenu" ><span class="glyphicon glyphicon-user" style="float: left;font-size: 30px;width: 100%;"></span><a href="register.php" style="color: white;font-size: 15px;">Create new accaunt</a></div>


   <div id="leftmenu" ><span class="glyphicon glyphicon-asterisk" style="float: left;font-size: 30px; width: 100%;"></span><a href="addproduct.php" style="color: white;font-size: 15px;"> Add product</a></div>
    
<div id="leftmenu" ><span class="glyphicon glyphicon-asterisk" style="float: left;font-size: 30px; width: 100%;"></span><a href="update_status.php" style="color: white;font-size: 15px;"> Update Order Status</a></div>


    <div style="margin-top: 100%;">
    <div ><center><span class="fa fa-facebook-official " style="font-size: 50px;color:white;"></span> </center></div>
    <div><center><span class="fa fa-twitter " style="font-size: 50px;color:white;"></span> </center></div>
    </div>
  </center>
  </div> 

  </div>
   <div class="col-lg-10"  >

  <div class="container-fluid" id="d"  style="color:white;background-color: #1e3a68;box-shadow: 1px 6px 4px gray; " >

  <span class="fas fa-wallet" style="float: left;font-size: 20px;" > 
<?php
if(isset($_SESSION['id'])){
$id=$_SESSION['id'];
$sql="select * from customer where id=$id";

$result=mysqli_query($conn,$sql);

while ($row=mysqli_fetch_assoc($result)) {
echo 'A/C: '.$row['accaunt'];
}

}

?>
  </span>
  <a href="main.php?logout=true" style="color: white;margin-left:  2px;" >
  <div style="margin: 2px; background-color:   #001a66;border:1px solid white;float: right;padding: 8px;text-align: center;">
   <span class="glyphicon glyphicon-log-out" style="float: right;text-align: center;font-size: 16px;color: white;margin-right: 2px;"></span>Log out
 </div></a>
   <div style="margin: 2px; background-color:   #001a66;border:1px solid white;float: right;padding: 8px;text-align: center;">
    <span class="glyphicon glyphicon-user" style="font-size: 16px;"> </span><span style="margin-left: 3px;font-weight: bold;"><?php echo $_SESSION['fname'].' '.$_SESSION['lname']; ?> </span></div>
    </div>


<table class="table">
  
<tr>
    <td>
<center><div style="box-shadow: 1px 6px 4px gray;margin:12px;">
 <div id="piechart" style="width: 500px; height: 300px;"></div>
<div style="margin-bottom: 12px;font-weight: bold;">
<div id="o" >Total Orders:<?php echo $total; ?></div>
 <div id="o" >Current Orders:<?php echo $ordered; ?></div>
<div id="o" >Delivered Orders:<?php echo $delivered; ?></div>
<div id="o" >Despatch Orders:<?php echo $shipped; ?></div>
    </div>
</div></center>

</td></tr>

</table >



</div>

</div>


   

    
  </body>
</html>