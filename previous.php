<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="container-fluid">
<?php include "connection.php"; ?>
<table class="table">
	<thead><th>Date</th><th>Order ID</th><th>Customer Name</th><th>Status</th></thead>
	<tbody>
	<?php 
$sql="select * from orders where customerid=4";

$result=mysqli_query($conn,$sql);

while ($row=mysqli_fetch_assoc($result)) {
?>
<tr>
	<td><?php echo $row['dateoforder'];  ?></td>
	<td><?php echo $row['id'];  ?></td>
	<td>saurabh solkar</td>
	<td><?php echo $row['status'];  ?></td>
</tr>
<?php
}


	?></tbody>
</table>
</body>
</html>