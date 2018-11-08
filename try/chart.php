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

   
<?php 
$conn=mysqli_connect("localhost","root","","lmdot");

if(!$conn){
    echo die();
}

$sql="select * from orders where customerid=4";
$delivered=0;
$dispatch=0;
$ordered=0;
$total=0;
$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($result)) {
    $total++;
    $status=$row['status'];
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
      #d{
      height: 100px; width: 300px;  padding: 6px;box-shadow: 6px 6px 5px gray;float: left; margin:10px; padding: 5px;
      }
    </style>
  </head>
  <body class="container-fluid">
    <div id="piechart" style="width: 900px; height: 500px;"></div>

     <div id="d" style="background-color:#e6e600 "><h3>Current Orders : <?php echo $ordered; ?></h3></div>
<div id="d" style="background-color: #99cc00"><h3>Delivered Orders : <?php echo $delivered; ?></h3></div>
<div id="d" style="background-color: #e600ac"><h3>Despatch Orders : <?php echo $dispatch; ?></h3></div>
    <div id="d" style="background-color:#ff9999 "><h3>Total Orders : <?php echo $total; ?></h3></div>
  </body>
</html>