<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
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
	.table{
		padding-left:10%;
padding-right:10%; 
box-shadow: 6px 6px 3px #595959;
 border: none;
width: 60%;

			}

.form-control{
	border:0.4 solid black;
	
	background-color: #d9d9d9;
}


table{
	background-color: white;
	margin-top: 30px; padding: 10px;

}
h5{
	color: #001a33;
	font-weight: bold;
}

</style>

<script type="text/javascript">
	
$(document).ready(function(){
$('#fname').prop("readonly", true);
$('#mname').prop("readonly", true);
$('#lname').prop("readonly", true);
$('#addr').prop("readonly", true);
$('#landmark').prop("readonly", true);
$('#pin').prop("readonly", true);
$('#username').prop("readonly", true);
$('#password').prop("readonly", true);

$('.edit').click(function(){

var d=$(this).attr('id');
$('#'+d).prop("readonly",false);
});


});




</script>

</head>
<body class="container-fluid"style="background-color:  #357196;">
<?php 
include "connection.php";
session_start();

if (isset($_SESSION['id'])) {
echo "inside";
	$id=$_SESSION['id'];
$sql="select * from customer where id=$id";
$result=mysqli_query($conn,$sql);
	while ($row=mysqli_fetch_assoc($result)) {

	


 ?>
<center>
	<h3 ><a href="login.php" style="color: pink;">Back to Login</a></h3>
<table class="table table-condensed animated bounceInDown delay-0.7s">
	
		<thead style="background-color: #004d99;color: white;"><tr  ><th colspan="3"><center><h2>Register</h2></center></th></tr></thead>
		<tbody >
			<tr  class="form-group" colspan="3" >
				<td><h5>First Name</h5>
				  <input type="text" class="form-control" value="<?php echo $row['fname']; ?>" placeholder="First Name" id="fname" required="" ><p style="color: blue" id="<?php echo $row['fname']; ?>" class="edit">edit</p></td>
				  <td><h5>Middle Name</h5>
				  <input type="text" class="form-control" placeholder="Middle Name" value="<?php echo $row['mname']; ?>"  id="mname" required=""><p style="color: blue" id="<?php echo $row['mname']; ?>" class="edit">edit</p></td>
				  <td><h5>Last Name</h5>
				  <input type="text" value="<?php echo $row['lname']; ?>" class="form-control" placeholder="Last Name"  id="lname" required=""><p style="color: blue" id="<?php echo $row['lname']; ?>" class="edit">edit</p></td>
			</tr>
			<tr >
				<td colspan="3"><h5>Address</h5>
				  <input type="text" class="form-control" value="<?php echo $row['address']; ?>" placeholder="Address"  id="addr"  required=""></td>
			</tr>
			<tr>
				<td colspan="3"><h5>Landmark</h5>
				  <input type="text" value="<?php echo $row['landmark']; ?>" class="form-control" placeholder="Landmark"  id="landmark"  required=""></td>
			</tr>
			<tr>
				<td colspan="3"><h5>Pin Code</h5>
				  <input type="text" class="form-control" value="<?php echo $row['pin']; ?>" placeholder="Pin Code"  id="pin"  required=""></td>
			</tr>
			<tr>
				<td colspan="3"><h5>Contact Number</h5>
				  <input type="text" class="form-control" placeholder="Contact" value="<?php echo $row['contact']; ?>"  id="contact"  required=""></td>
			</tr>
			<tr>
				<td colspan="3"><h5>Username</h5>
				  <input type="text" class="form-control" id="username" placeholder="username"  required=""></td>
			</tr>
			<tr>
				<td colspan="3"><h5>Password</h5>
				  <input type="text" class="form-control" id="password" placeholder="password"  required=""></td>
			</tr>
			<tr>
				<td ><center>
				  <input type="button" class=" btn btn-success" id="submit" value="Update profile" ></center></td>
			</tr>

		</tbody>
	</form>
</table>

</center>
<?php
}
	}
?>
</body>
</html>