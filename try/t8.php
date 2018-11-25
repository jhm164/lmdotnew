<!DOCTYPE html>
<html>
<head>
  <title>Track</title>
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
    color: silver; 
    border-bottom: 4px solid silver;
}

ol.progtrckr li:after {
    content: "\00a0\00a0";
}
ol.progtrckr li:before {
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
    color: silver;
    background-color: white;
    font-size: 2.2em;
    bottom: -1.2em;
}


  
</style>

<script type="text/javascript">
  
$(document).ready(function(){
$('.oo').click(function(){
var status=$(this).attr('id');
alert(status);
if (status='ordered') {
$('#ordered').addClass('progtrckr-done');
$('#shipped').addClass('progtrckr-todo');
$('#delivered').addClass('progtrckr-todo');
}else if (status=='shipped') {
$('#ordered').addClass('progtrckr-done');
$('#shipped').addClass('progtrckr-done');
$('#delivered').addClass('progtrckr-todo');
}else if (status=='delivered') {
$('#ordered').addClass('progtrckr-done');
$('#shipped').addClass('progtrckr-done');
$('#delivered').addClass('progtrckr-done');
}

});

});

</script>
</head>


<body class="container">

<?php
include 'connection.php';
session_start();

?>
<ol class="progtrckr" data-progtrckr-steps="5">
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
}
    ?></td>
  <td ><span class="glyphicon glyphicon-info-sign oo" id="<?php echo $row['status'];  ?>" ></span></td>
  
</tr>

<?php
}


  ?>

<div id="show"></div>
</tbody>
</table>


</body>
</html>