<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/animate.css">
  <style type="text/css">
  	tr{
  		padding: 30px;
  		border: none;
  	}
  	td{
  		border: none;
  	}


.btn-submit{
	float: right;
}



  	#whole{
  		background-color: black;margin-top: 50px;height: auto;width: 400px;
  		padding-left:15px; 
  		padding-right:15px; 
  		padding-bottom:15px; 
box-shadow:  12px 12px 3px #222323;

  	}
  	.container{
  		background-color:#4f5456;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='48' height='48' viewBox='0 0 48 48'%3E%3Cg fill='%239C92AC' fill-opacity='0.3'%3E%3Cpath d='M12 0h18v6h6v6h6v18h-6v6h-6v6H12v-6H6v-6H0V12h6V6h6V0zm12 6h-6v6h-6v6H6v6h6v6h6v6h6v-6h6v-6h6v-6h-6v-6h-6V6zm-6 12h6v6h-6v-6zm24 24h6v6h-6v-6z'%3E%3C/path%3E%3C/g%3E%3C/svg%3E");
  	}
  	.table {border: 1px solid black!important;} 
.table tr, .table td, .table th {border: 0!important;}
.table tr td, 
.table tr th {border-left: 1px solid black!important;}
.table tr td:nth-child(1), 
.table tr th:nth-child(1) {border-left: 0!important;}

#r{
	margin-top: 5px;
}


#i{
	margin-top: 5px;
}

  </style>
</head>
<body class="container">

<center >
	<div  id="whole"  id="r" class="animated bounceInUp delay-0s">
	<table class="table animated bounceInDown delay-0.7s">
	<thead>
		<th>
		<h3 style="font-family: 'Roboto'; color: white;" class="animated fadeInLeft delay-1s" ><center>Login admin panel</center></h3>
		</th>
	</thead>
	<form action="internship.php" method="POST">
	<tbody>
		<tr class="form-group">
						<td>
				<input type="text" class="form-control animated fadeInRight delay-1s " id="r" name="username" placeholder="Username"></td>
			
		</tr>
			<tr class="form-group">
			
			<td>
				<input type="text" class="form-control animated fadeInRight delay-1s " name="password" id="r" placeholder="Password"></td>
			
		</tr>
		<tr class="form-group">
			
			<td>
				<input type="Reset" id="i" class="btn btn-primary form-control animated fadeInRight delay-1s" id="r" value="Reset"></td>
			
		</tr>
		<tr class="form-group">
			
			<td>
				<input type="submit" id="i" class="btn btn-success form-control animated fadeInRight delay-1s" id="r" value="Login"></td>
			
		</tr>
		<tr class="form-group">
			
			<td>
				<a href=""  >Forgot password ?</a>
			
		</tr>
	</tbody>

</form>
</table>
</div>
</center>
</body>
</html>