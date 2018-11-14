
<?php


if (isset($_POST['id'])) {

	?>
	<table class="table"><tr><th>Details</th></tr>

	</table>
	<?php
	$id1=$_POST['id'];
$sql="select * from orders where customerid=$id";

$result=mysqli_query($conn,$sql);

while ($row=mysqli_fetch_assoc($result)) {

?>
<tr><td><?php echo $row['status']; ?></td></tr>
<?php
}



}
	?>