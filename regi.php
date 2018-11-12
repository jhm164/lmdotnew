<!DOCTYPE html>
<html>
<head>
	<title>My Details</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="container">
<?php 
include 'connection.php';
session_start();
if(isset($_SESSION['id'])){
$id=$_SESSION['id'];


$sql="select * from customer where id=$id";

$result=mysqli_query($conn,$sql);


?>
<table class="table table-striped">
	<?php
while ($row=mysqli_fetch_assoc($result)) {
	
	?>
<tbody>
	<tr>
		<td>Name</td><td><?php echo $row['fname'].' '.$row['lname']; ?></td>
	</tr>
	<tr>
		<td>Address</td><td><?php echo $row['address']?></td>
	</tr>
	<tr>
		<td>Landmark</td><td><?php echo $row['landmark']?></td>
	</tr>
	<tr>
		<td>Pin Code</td><td><?php echo $row['pin']?></td>
	</tr>
	<tr>
		<td>Contact</td><td><?php echo $row['contact']?></td>
	</tr>
</tbody>

<?php
}

?>
</table>

<?php  }else{

header('Location:login.php');
} 
?>


</body>
</html>