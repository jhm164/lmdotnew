<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   
<?php 
include 'connection.php'; 
$sql="select * from orders where customerid=4";
$delivered=0;
$dispatch=0;
$ordered=0;
$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($result)) {
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
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>