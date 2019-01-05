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
  ...
  <link rel="stylesheet" type="text/css" href="css/imgareaselect-default.css" />
  <script type="text/javascript" src="scripts/jquery.min.js"></script>
  <script type="text/javascript" src="scripts/jquery.imgareaselect.pack.js"></script>
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
    var c;
    $('#main').imgAreaSelect({
        handles: true,
        onSelectEnd: function (img, selection) {
        alert('width: ' + selection.width + '; height: ' + selection.height+ 'x1: ' + selection.x1+'y1: ' + selection.y1);
    }
    });
    
});
</script>
</head>
<body>
<center>

<div id="main"> 

</div>
</center>
<center><input type="range" class="form-control slider"  min="1" max="5" step="0.03" id="slider" name="" style="width: 300px;" ></center>
</body>
</html>