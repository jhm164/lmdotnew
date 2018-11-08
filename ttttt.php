<!DOCTYPE html>
<html>
<head>
	<title>Create Order</title>
		
</head>
<body class="container-fluid">


<center>
	<div style=" height:auto;padding: 12px;color: white;">
		<table class="table">
		
			<tbody>
			


<tr>
	<td><button id="down" class="btn btn-default">down</button>
<button id="up" class="btn btn-default">up</button>
<button id="zoomin" class="btn btn-default">zoomin</button>
<button id="zoomout" class="btn btn-default">zoomout</button>
<button id="left" class="btn btn-default">left</button>
<button id="right" class="btn btn-default">right</button>
</td>
</tr>
<tr>
	<td>
	<?php 


$sql="select * from logo where cid=4";
$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($result)) {
	?>
	<img src="<?php echo $row['imagepath'];?>" height="100" width="100"  class="img-rounded logoc"  id="<?php echo $row['id'];?>" >
	<?php
}
	?>
</td>
</tr>


<tr>
	<td><input type="submit" class="btn btn-success" value="Submit" name="upload">


	</td>
</tr>
			</tbody>
		</form>
		
<tr>
	<td><form id="upload_form" enctype="multipart/form-data" method="post">
  <input type="file" name="file1" id="file1"><br>
  <input type="button" value="Upload File" onclick="uploadFile()">
  <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
  <h3 id="status"></h3>
  <p id="loaded_n_total"></p>
  <input type="submit" name="">
</form>
<div id="wrapper">
 <input type="file">
 <div id="drop-area">
  <h3 class="drop-text">Drag and Drop Images Here</h3>

 </div>

</div>
</td>
</tr>

		</table>
	</div>
</center>
</body>
</html>
