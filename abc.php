<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
#main {
    background-size: cover;
    background-image: url("images/clk4.png");

  width:300px;
  height:300px;
  border: 1px solid black;
        /*  clip the excess when child gets bigger than parent  */
}

#displayarea{
    
  width:100px;
  height:100px;
  background-size: cover;
  overflow:hidden;
  border:1px solid red;
}
#displayarea img {
  display:block;
 
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
var width3=$("#displayarea").outerWidth();
var height3=$("#displayarea").outerHeight();
/*
$("#logo").css("margin-left",marginl);
$("#logo").css("margin-top",height/2-height1/2);
*/
$("#displayarea").css("margin-top",height/2-height1/2);

$("#displayarea").css("transform-origin","50% 50%");
/*
$("#logo").css("padding-left",paddingl);
$("#logo").css("padding-top",paddingt);
$("#logo").css("top",v.top+height3/2-height1/2);
$("#logo").css("left",v.left+width3/2-width1/2); 
*/
$('#slider').mousemove(function(){
var x=$(this).val();
//alert(x);
//$('#logo').css('transform':'scale('+x+')');
$('#logo').css('transform', 'scale(' + x + ')');
console.log(x);
});
});
</script>
</head>
<body>
<center>

<div id="main"> 
<div id="displayarea" >
<img id="logo" src="images/oscar.png" style="  width:100px;
  height:100px;" >
<div>
</div>
</center>
<center><input type="range" class="form-control slider"  min="1" max="5" step="0.03" id="slider" name="" style="width: 300px;" ></center>
</body>
</html>