<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		var c;
		function cc(){
			c=7;

		}
		function h(){
			alert(c);
		}
		function h55(){

		}
function h4(){
		 var x=document.getElementById("hhh").value;
		 alert(x);

	}
	</script>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php session_start(); ?>
</head>
<?php $g=0;?>
<script type="text/javascript">

	var v=0;

	$(document).ready(function(){

$('#choose').change(function(){
v=$('#choose').val();
alert(v);
 $.get("t9.php",
    {
       
        choice:v
    })
    
});

$('#y').click(function(){

var x='<?php echo "5";?>';
alert(x);
});


	});

</script>
<body>
<button onclick="cc()">add value</button>
<button onclick="h()">display value</button>
<h3 id="y">klkk</h3>
<input type="text" name="" value="h55()">
<button onclick="h4()">ok</button>
<select id="choose">
	<option value="mobile" >mobile</option>
	<option value="tshirt">tshirt</option>
</select>

</body>
</html>

<?php 

if (isset($_GET['choice'])) {

	echo $gg=$_GET['choice'];
$_SESSION['choice']=$gg;
echo "<script type='text/javascript'>alert('$gg');</script>";
}
if (isset($_SESSION['choice'])) {
	# code...

echo $_SESSION['choice'];
}
?>