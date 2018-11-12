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
include 'connection.php'; 
$sql="select * from orders where customerid=4";
$delivered=0;
$dispatch=0;
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
   if ($status=='dispatch') {
    $dispatch++;
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
           ['dispatch',   <?php echo $dispatch;?> ],
            ['delivered',   <?php echo $delivered;?> ]
         
                 ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
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
    <h4 style="color:white;font-family: 'Times New Romen';font-weight: bold;">Saurabh solkar <br></h4>
    <button class="circularbutton">Update Profile</button>
  
    </center>
  </div>

    <div style="background-color: #357196;padding-top: 5px; padding-bottom: 5px;">
    <center>
    <div id="leftmenu" ><span class="glyphicon glyphicon-dashboard" style="float: left;font-size: 30px; width: 100%;"></span><a href="dashboard.php" style="color: white;font-size: 15px;"> Dashboard</a></div>
    <div id="createorder4.php" ><span class="glyphicon glyphicon-tasks" style="float: left;font-size: 30px;width: 100%;"></span> <a href="#!order" style="color: white;font-size: 15px;">Orders</a></div>
    <div id="leftmenu" ><span class="glyphicon glyphicon-user" style="float: left;font-size: 30px;width: 100%;"></span><a href="#!accaunt" style="color: white;font-size: 15px;">Accaunt</a></div>
    <div style="margin-top: 100%;">
    <div ><center><span class="fa fa-facebook-official " style="font-size: 50px;color:white;"></span> </center></div>
    <div><center><span class="fa fa-twitter " style="font-size: 50px;color:white;"></span> </center></div>
    </div>
  </center>
  </div>  


  </div>
   <div class="col-lg-10"  >
<table class="table">
  <tr >
    <td>
  <div class="container-fluid" id="d1"  style="background-color: #1e3a68;box-shadow: 1px 6px 4px gray;" >
  <center><span class="fas fa-wallet" style="float: left;font-size: 20px;" > : 4000</span></center>
  <div> <span class="glyphicon glyphicon-user" style="float: right;font-size: 20px;"> <p>Saurabh solkar </p></span>
  </div>
</div>
<td>
</tr>
<tr>
    <td>
<center><div style="box-shadow: 1px 6px 4px gray;margin:12px;">
 <div id="piechart" style="width: 500px; height: 300px;"></div>
<div style="margin-bottom: 12px;font-weight: bold;">
<div id="o" >Total Orders:<?php echo $total; ?></div>
 <div id="o" >Current Orders:<?php echo $ordered; ?></div>
<div id="o" >Delivered Orders:<?php echo $delivered; ?></div>
<div id="o" >Despatch Orders:<?php echo $dispatch; ?></div>
    </div>
</div></center>

</td></tr>

</table >

<table class="table">
  <thead></thead>
  <tbody>
  <tr>
    <td>
       <div id="d"  ><center>Number of Orders<center><h3><?php echo $total; ?></h3></center></center></div>
    </td>

  
    <td>
      <div id="d" ><center>Total Revenu <center><h3>Rs.<?php echo $sellp; ?>.00</h3></center></center></div>
    </td>
 
    <td>
      <div id="d" ><center>Amount Spent <center><h3>Rs.<?php echo $totalprice; ?>.00</h3></center></center></div>
    </td>
    <td>
            <div id="d" ><center>Benifit<h3>Rs.<?php echo $benifit; ?>.00</h3></center></div>
    </td>
  </tr>
</tbody>
</table>

</div>

</div>


   

    
  </body>
</html>