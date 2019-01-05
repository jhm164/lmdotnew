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

#main{
  width: 300px;
  height: 300px;
  position: relative;
  overflow:hidden;
}
#logo{

  position: absolute;
  
  width: 100px;
height: 100px;
overflow: hidden;
}
#container {
 
   display: inline-block;
  //margin: 20px;
  border: 1px solid black;
  overflow: hidden;         /*  clip the excess when child gets bigger than parent  */
}
#container img {
  
  display: block;
}
#container:hover img {
  transform: scale(3);
  transform-origin: 50% 50%;
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
var totalp;

$("#logo").css("margin-left",marginl);
$("#logo").css("margin-top",margint);
$("#logo").css("padding-left",paddingl);
$("#logo").css("padding-top",paddingt);
$("#logo").css("top",v.top+height/2-height1/2);
$("#logo").css("left",v.left+width/2-width1/2); 

$('#slider').mousemove(function(){
var x=$(this).val();
//alert(x);
//$('#imagezoom').css('transform':'scale('+x+')');
$('#logo').css('transform', 'scale(' + x + ')');
console.log(x);
});
});
</script>

</head>
<body >
<center>
        
            <img  id="main" style="background-color:#c7c7c7;"  >
           
            <div id="container"> <img id="logo" src="images/cl.jpg" ></div>
          
                    </center>
                    <center><input type="range" class="form-control slider"  min="1" max="5" step="0.03" id="slider" name="" style="width: 300px;" ></center>
       <!--            
    <img id="imagezoom" src="images/cl.jpg" height="100" width="100" >
</div>
-->
</body>
</html>