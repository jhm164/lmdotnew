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

  <script type="text/javascript">
  	$(document).ready(function(){
$('#click').click(function(){
var v=$("#img1").position();
var marginl=$("#img1").css("margin-left");
var margint=$("#img1").css("margin-top");
var paddingt=$("#img1").css("padding-top");
var paddingl=$("#img1").css("padding-left");
var width=$("#img1").outerWidth();
var height=$("#img1").outerHeight();
var width1=$("#pos").outerWidth();
var height1=$("#pos").outerHeight();
alert(v.left);

alert("outer width"+width);

alert("outer height"+height);
$("#pos").css("margin-left",marginl);
$("#pos").css("margin-top",margint);
$("#pos").css("padding-left",paddingl);
$("#pos").css("padding-top",paddingt);
$("#pos").css("top",height/2-height1/2);
$("#pos").css("left",width/2-width1/2);
});

  	});
  </script>

  <style type="text/css">
  	
  	#img1 {
  width: 100px;
  height: 100px;
  position: relative;
}
#pos{

  position: absolute;
  top: 0;
  left: 0;
}

  </style>
</head>
<body>
	<div><img src="images/clk3.png" id="img1" style="margin-left:500px;position: relative;border: 1px solid;"  >
<p style="position: absolute;" id="pos">hello world</p>
	</div>
<button id="click" style="position: absolute;">click</button>
</body>
</html>