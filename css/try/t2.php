<!DOCTYPE html>
<html>
<head>
	<title></title>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
	<script type="text/javascript">
$(document).ready(function(){


$('#down').click(function(){

var s=$('#logo').position();
alert(s.top);
$('#logo').css('position','50px');

});
});
	</script>
	<style type="text/css">
		
		
	</style>
</head>
<body>
	<p id="down">click</p>
<h1 id="logo">hello</h1>

</body>
</html>