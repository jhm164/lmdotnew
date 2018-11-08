<!DOCTYPE html>
<html>
<head>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title></title>
	<style type="text/css">
		
	#main{
  width: 300px;
  height: 300px;
  position: relative;
}
#logo{
width: 100px;
height: 100px;
  position: absolute;
  top: 0;
  left: 0;
}

	</style>
	<script type="text/javascript">
  	$(document).ready(function(){

var v=$("#main").position();
var marginl=$("#main").css("margin-left");
var margint=$("#main").css("margin-top");
var paddingt=$("#main").css("padding-top");
var paddingl=$("#main").css("padding-left");
var width=$("#main").outerWidth();
var height=$("#main").outerHeight();
var width1=$("#logo").outerWidth();
var height1=$("#logo").outerHeight();
alert(v.left);

alert("outer width"+width);

alert("outer height"+height);
$("#logo").css("margin-left",marginl);
$("#logo").css("margin-top",margint);
$("#logo").css("padding-left",paddingl);
$("#logo").css("padding-top",paddingt);
$("#logo").css("top",height/2-height1/2);
$("#logo").css("left",width/2-width1/2);


  	});
  </script>









</head>
<body>
<img src="images/micromax.jpg" id="main"  >
                      <img src="images/hd6.jpg" id="logo" >
</body>
</html>