<!DOCTYPE html>
<html>
<head>
	<title>Order</title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>

  <style type="text/css">
  	#d{
  		padding-top: 9px;
  		padding-bottom:  9px;
  		background-color: #0d1126;
  		font-size: 18px;
  		color:white;
  		border-left: 1px solid white;
  	}
  	span:hover {
color:white;
font-weight: bold;
  	}
    .activate{
      color:#e8eef7;
font-weight: bold;
 text-decoration: underline;
}
    }
  </style>

</head>
<body class="container-fluid" ng-app="myApp">
  <?php include "connection.php";

 ?>
<div class="row">
	<span class="col-lg-3" id="d"><a href="#!createorder"> Preview Order</a></span>
	<span class="col-lg-3" id="d"><a href="#!ongoing"> On Going Order</a></span> 
	<span class="col-lg-3" id="d"><a href="#!retrive" >Retrive Order</a></span></</div>

</body>
</html>