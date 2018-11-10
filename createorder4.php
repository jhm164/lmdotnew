<html>
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php include 'connection.php'; ?>

<style type="text/css">
    #leftmenu{
      margin-top: 20px;
       background-color: #357196;
       height: auto;
       width: 100%;
       color:white;
        font-size:  20px;
        padding: 5px;
        color:white;
      font-family: "Comic Sans MS", cursive, sans-serif;
        text-align: center;

    }
    .row1{
   
  margin: 0 auto;
  padding: 0;
  overflow: auto;
    }

    #o{
      
    
     
    }
    #d{
     
      padding-top: 10px;
       height: auto;
       width: 100%;
      color: black;
       padding: 6px;box-shadow: 6px 2px 2px gray;float: left; margin:10px; padding: 5px;
     border: 3px solid  #428ebd;
     background-color: white;
    }

    #colone{
      background-color: red;
      
    }

    .navbar-inverse{
      background-color: #1d4077;

    }

#leftmenu:hover { 
  width: 100%;
    color: #17202d;
    

   
}

#d1{
    background-color:#1e3a68;
      padding-top: 10px;
       height: auto;
       width: auto;
      color: white;
}



#wrapper
{
 text-align:center;
 margin:0 auto;
 padding:0px;
 width:100%;
}
#drop-area
{
 
 width:200px;
 height:200px;
 background-color:white;
 border:3px dashed grey;
}
.drop-text
{
 margin-top:70px;
 color:grey;
 font-size:25px;
 font-weight:bold;
}
#drop-area img
{
 max-width:200px;
}
  

.dh{
  box-shadow: 3px 4px 3px gray;
 
}

.circularbutton{

  border-radius: 5px;
  border: 1px solid #98a1a4;
 padding: 10px;
  background: transparent; /* Change it to transparent */
  /* remove background-opacity */
  color: white;
  box-shadow: 2px 2px 2px white;

}
.circularbutton:hover{

box-shadow: 3px 3px 2px #255370;

}
#main{
  width: 300px;
  height: 300px;
  position: relative;
}
#logo{

  position: absolute;
  
  width: 100px;
height: 100px;
}
.table {border: 0px solid black!important;} 
.table tr, .table td, .table th {border: 0!important;}
.table tr td, 
.table tr th {border-left: 1px solid black!important;}
.table tr td:nth-child(1), 
.table tr th:nth-child(1) {border-left: 0!important;}
  </style>
  <script type="text/javascript">
function _(el){
	return document.getElementById(el);
}
function uploadFile(){
	var file = _("file1").files[0];
	// alert(file.name+" | "+file.size+" | "+file.type);
	var formdata = new FormData();
	formdata.append("file1", file);
	var ajax = new XMLHttpRequest();
	ajax.upload.addEventListener("progress", progressHandler, false);
	ajax.addEventListener("load", completeHandler, false);
	ajax.addEventListener("error", errorHandler, false);
	ajax.addEventListener("abort", abortHandler, false);
	ajax.open("POST", "file_upload_parser.php");
	ajax.send(formdata);
}
function progressHandler(event){
	_("loaded_n_total").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
	var percent = (event.loaded / event.total) * 100;
	_("progressBar").value = Math.round(percent);
	_("status").innerHTML = Math.round(percent)+"% uploaded... please wait";
}
function completeHandler(event){
	_("status").innerHTML = event.target.responseText;
	_("progressBar").value = 0;
}
function errorHandler(event){
	_("status").innerHTML = "Upload Failed";
}
function abortHandler(event){
	_("status").innerHTML = "Upload Aborted";
}

	var v1=0;
  	var mainproductid=0;
  	var pcategory=0;
  	var pmodel=0;
  	var logoid1=0;
    var zone=null;
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

$("#logo").css("margin-left",marginl);
$("#logo").css("margin-top",margint);
$("#logo").css("padding-left",paddingl);
$("#logo").css("padding-top",paddingt);
$("#logo").css("top",v.top+height/2-height1/2);
$("#logo").css("left",v.left+width/2-width1/2);



$('#down').click(function(){

var s=$('#logo').position();
$('#logo').css('top',s.top+3);
});

$('#up').click(function(){
var s=$('#logo').position();
$('#logo').css('top',s.top-3);
});

$('#demo').click(function(v){
alert(v1);
});


$('#zoomin').click(function(){
var s=$('#logo').height();
$('#logo').css('height',s+3);
});


$('#zoomout').click(function(){
var s=$('#logo').height();
$('#logo').css('height',s-3);
});


$('#left').click(function(){
var s=$('#logo').position();

$('#logo').css('left',s.left-3);
});

$('#right').click(function(){
var s=$('#logo').position();
$('#logo').css('left',s.left+3);
});


$('.logoc').click(function x(v){
	logoid1=$(this).attr('id');
var g= $(this).attr('src');
$('#logo').attr('src',g);

});


$('.main').click(function j(v){
var g= $(this).attr('src');
$("#main").attr('src',g);
});



  $('#grab').click(function(){
var category=$('#category').val();
var brand=$('#brand').val();
var model=$('#model').val();
alert(category+" "+brand+" "+model);
$.getJSON( "loadproduct.php?category="+category+"&brand="+brand+"&model="+model, function( data ) {
  pcategory=category;
  var items = [];
  $.each( data, function( key, val ) {

mainproductid=val.id;
zone=val.zone;

alert(mainproductid+zone);
pmodel=val.model;
$('#main').attr('src',val.imagepath);
  });
});

  });


$("#drop-area").on('dragenter', function (e){
  e.preventDefault();
  $(this).css('background', '#BBD5B8');
 });

 $("#drop-area").on('dragover', function (e){
  e.preventDefault();
 });

 $("#drop-area").on('drop', function (e){
  $(this).css('background', '#D8F9D3');
  e.preventDefault();
  var image = e.originalEvent.dataTransfer.files;
  createFormData(image);
 });


$('#evaluate').click(function(){
 var quantity=$('#quantity').val();
  var category=$('#category').val();
  var brand=$('#brand').val();
  var model=$('#model').val();
  var zonep=0;
 $('#quantity1').text(quantity);

 $('#pname1').text(category+' '+brand+' '+model);
$('#priceperp').text(180);
 $('#pprice1').text(quantity*180);
 $.post("zone.php",
    {
      zone:zone
    }, function(data, status){
        $('#zonepp').text(data);
        zonep=data;
    });

$('#total').text(zonep+quantity*180);



});

 $("#submit").click(function(){


  var category=$('#category').val();
  var brand=$('#brand').val();
  var model=$('#model').val();
  var size=$('#size').val();
  var quantity=$('#quantity').val();
  var sellp=$('#sellp').val();
  var category=$('#category').val();



 $.post("orderp.php",
    {
       
        category:category,
        brand:brand,
        model:model,
        size:size,
        quantity:quantity,
        sellp:sellp,
        category:category,
        mainproductid,mainproductid,
        logoid:logoid1
    }, function(data, status){
        alert(data);
    });
    
});


  	});



function createFormData(image)
{
 var formImage = new FormData();
 formImage.append('userImage', image[0]);
 uploadFormData(formImage);
}

function uploadFormData(formData) 
{
 $.ajax({
 url: "upload_image.php",
 type: "POST",
 data: formData,
 contentType:false,
 cache: false,
 processData: false,
 success: function(data){
  alert('Upload Successfully');
  $('#drop-area').html(data);

 }});
}











  </script>
  <?php
session_start();
$_session['id']=4;
include "connection.php";
?>

  </head>
  <body class="container-fluid">


<div class="row" >
<div class="col-lg-2" style="background-color: #357196; box-shadow: 3px 4px 3px gray;"  >
    <div  style="background-color: #357196;padding-bottom: 5px;padding-top: 15px;">
    <center>
    <img src="images/oscar.png" style="height: 80px;width: 80px;border: 2px solid gray;padding: 2px; background-color: white;" class="img-circle">
    <h4 style="color:white;font-family: 'Times New Romen';font-weight: bold;">Saurabh solkar <br></h4>
    <button class="circularbutton">Update Profile</button>
  
    </center>
  </div>

    <div style="background-color: #357196;padding-top: 5px; padding-bottom: 5px;">
    <center>
    <div id="leftmenu" ><span class="glyphicon glyphicon-dashboard" style="float: left;font-size: 30px; width: 100%;"></span><a href="#!dashboard" style="color: white;font-size: 15px;"> Dashboard</a></div>
    <div id="leftmenu" ><span class="glyphicon glyphicon-tasks" style="float: left;font-size: 30px;width: 100%;"></span> <a href="#!order" style="color: white;font-size: 15px;">Orders</a></div>
    <div id="leftmenu" ><span class="glyphicon glyphicon-user" style="float: left;font-size: 30px;width: 100%;"></span><a href="#!accaunt" style="color: white;font-size: 15px;">Accaunt</a></div>
    <div style="margin-top: 100%;">
    <div ><center><span class="fa fa-facebook-official " style="font-size: 50px;color:white;"></span> </center></div>
    <div><center><span class="fa fa-twitter " style="font-size: 50px;color:white;"></span> </center></div>
    </div>
  </center>
  </div>  


  </div>
   <div class="col-lg-10"   >

<table class="table" >
<tbody>
  <tr >
    <td>
  <div class="container-fluid" id="d1"  style="background-color: #1e3a68;box-shadow: 1px 6px 4px gray;" >
  <center><span class="fas fa-wallet" style="float: left;font-size: 20px;" > : 4000</span></center>
  <div> <span class="glyphicon glyphicon-user" style="float: right;font-size: 20px;"> <p>Saurabh solkar </p></span>
  </div>
</div>
</td>
</tr>
</tbody>
</table>




 <div class="row">
      
      <div class="col-lg-6">
      
<table class="table" style="border: none;">
  <form action="createorder1.php" method="post" enctype="multipart/form-data">
      <thead>
        <th>Create product</th>
      </thead>  
            <tbody >

<div style="padding: 12px;">              <tr >
          <td  colspan="2">
            <select  class="form-control" name="category" id="category">
              <option value="t-shirt" >t-shirt</option>
                 <option value="mobile">mobile</option>
            </select>
          </td>

        </tr>

        <tr>
          <td >
            <select  class="form-control" name="brand"  id="brand">
                         <option>
              <p>samsung</p>
              </option>  
            </select>
          </td>
        </tr>
        <tr>
          <td>
            <select name="model" class="form-control" id="model">
            <option  ><p>yk11</p></option>  
            <option  ><p>bz11</p></option>  
            </select> 
          </td>
        </tr>
        <tr>
          <td >
            <h4 style="color: blue;" id="grab">grab images as per selection</h4>
          </td>
        </tr>
        <tr>
          <td colspan="2">
          <select  class="form-control" name="size" id="size" >
                  <option ><p>120x130</p></option>  
                      </select>
                   </td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Quantity" >
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="text" class="form-control" name="sellp" id="sellp" placeholder="Enter your selling price " >
          </td>
        </tr>
        <tr>
          <td>
            <a href="createorder1.php">refresh</a>
          </td>
        </tr>
       
        <tr >
          <td>
           
          </td>
       
        </tr>

<tr>
  <td><input type="button" class="btn btn-success" value="Submit" id="submit" name="upload">


  </td>
</tr>
</div>

            </tbody>
</form>
        </table>

        <div class="row">
        <div class="col-lg-6">
<form id="upload_form" enctype="multipart/form-data" method="post">
  <input type="file" class="form-control" name="file1" id="file1"><br>
  <input type="button" class="form-control" value="Upload File" onclick="uploadFile()">
  <progress id="progressBar" class="form-control" value="0" max="100" style="width:300px;"></progress>
  
</form>
</div>
<div class="col-lg-6">
<div id="wrapper" >

 <div id="drop-area">
  <h3 class="drop-text">Drag and Drop Images Here</h3>

 </div>
</div>
</div>
</div>
</td>
</tr>













</table>

      </div>
       
      <div class="col-lg-6">
         <center>
            <img  id="main"  >
                      <img id="logo" >
                    </center>
          </td>
          <td >
            <div id="down" class="btn btn-default dh" >down</div>
            <div id="up" class="btn btn-default dh">up</div>
            <div id="zoomin" class="btn btn-default dh">zoomin</div>
            <div id="zoomout" class="btn btn-default dh">zoomout</div>
            <div id="left" class="btn btn-default dh">left</div>
            <div id="right" class="btn btn-default dh">right</div>
<div style="overflow:scroll;height: 80px;margin-top: 12px;">         <?php 
      $sql="select * from logo where cid=4";
      $result=mysqli_query($conn,$sql);
      while ($row=mysqli_fetch_assoc($result)) {
        ?>
        <img src="<?php echo $row['imagepath'];?>" height="60" width="60"  class="img-rounded logoc"  id="<?php echo $row['id'];?>" >
        <?php
      }
        ?>
</div>
      </div>
    </div>



<h3 id="evaluate">Evaluate</h3>
<table class="table">
  <thead><th>Product Name</th><th>Quantity</th><th>Product Price</th><th>Printing charges</th><th>Additional charges</th><th>Product price</th></thead>
<tbody>
  <tr><td><b id="pname1"></b></td><td><b id="quantity1"></b></td><td id="priceperp">-</td><td>-</td><td>-</td><td><b id="pprice1"></b></td></tr>
  <tr><td><b >Shipping</b></td><td>-</td><td>-</td><td>-</td><td>-</td><td><b id="zonepp">-</b></td></tr>
 
  <tr><td><b >Credit Balance</b></td><td><b >-</b></td><td><b></b></td><td>-</td><td>-</td><td>4000</td></tr>
  <tr><td><b>Total</b></td><td>-</td><td>-</td><td>-</td><td>-</td><td id="total">-</td></tr>
</tbody>
</table>
</div>

</div>


  </body>
</html>
