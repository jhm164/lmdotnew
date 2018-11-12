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

}
#drop-area
{
 

 background-color:white;
 
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
    var selectedcustomer=0;
    var  paymentmode=null;
  	$(document).ready(function(){
$('#evaluatearea').hide();
$('#customerd').hide();
$('#finalp').hide();
$('#uploadarea').hide();
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


$('#showupload').click(function(){

$('#uploadarea').toggle(1000);

});

$('#slider').change(function(){
var v=$('#slider').val();
var s=$('#logo').height();
var w=$('#logo').width();
var h=0;
var w1=0;
if(v>50){



h=v-50;
 w1=w-50;
$('#logo').css('height',s+h);
$('#logo').css('width',w+w1);
}

});


$('.grp').click(function(){

paymentmode= $('.grp').attr('id');

});


$('#fullsize').click(function(){

$('#myicons').css('overflow','');
});

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

$('.getcustomer').click(function(){
selectedcustomer=$('.getcustomer').attr('id');

alert(selectedcustomer);

});


$('#zoomout').click(function(){
var s=$('#logo').height();
$('#logo').css('height',s-3);
});

$('#cdetail').click(function(){
var cname=$('#cname').val();
var cadd1=$('#cadd1').val();
var cadd2=$('#cadd2').val();
var landmark=$('#landmark').val();
var pincode=$('#pincode').val();
var country=$('#country').val();
var state=$('#state').val();
var city=$('#city').val()
var ccode=$('#ccode').val();
var mobile=$('#mobile').val();
var email=$('#email').val();
alert(cname+' '+cadd1+' '+cadd2+' '+landmark+' '+pincode+' '+country+' '+state+' '+city+' '+ccode+' '+mobile+' '+email);
$.post("addcustomer.php",
    {
      cname:cname,
      cadd1:cadd1,
      cadd2:cadd2,
      landmark:landmark,
      pincode:pincode,
      country:country,
      state:state,
      city:city,
      ccode:ccode,
      mobile:mobile,
      email:email
    }, function(data, status){
        alert(data);
    }).then(function(){

      location.reload();
    });











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
$('#cod').click(function(){

  $('#customerd').show(1000);
});
$('#online').click(function(){
  $('#customerd').show(1000);
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
  $('#evaluatearea').show(1000);
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


alert(category+' '+brand+' '+model+' '+size+' '+quantity+' '+sellp+' '+category+' '+mainproductid+' '+logoid1+' '+selectedcustomer+' '+paymentmode);

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
        logoid:logoid1,
        selectedcustomer,selectedcustomer,
        paymentmode,paymentmode
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
$id=$_SESSION['id'];

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
    <div id="leftmenu" ><span class="glyphicon glyphicon-dashboard" style="float: left;font-size: 30px; width: 100%;"></span><a href="dashboard.php" style="color: white;font-size: 15px;"> Dashboard</a></div>
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




 <div class="row" style="margin-left:10px;margin-right:10px;box-shadow: 1px 4px 4px gray;background-color: #d9d9d9;" >
      
      <div class="col-lg-6" >
      
<table class="table" style="border: none;">
  <form action="createorder1.php" method="post" enctype="multipart/form-data">
      <thead>
        <th>Create product</th>
      </thead>  
            <tbody >

<div style="padding: 12px;">              <tr >
          <td >
            <h5>Select Category<span style="color:red;font-size: 20px;">*</span></h5>
            <select  class="form-control" name="category" id="category">
              <option value="t-shirt" >t-shirt</option>
                 <option value="mobile">mobile</option>
            </select>
          </td>

        </tr>

        <tr>
          <td >
            <h5>Select Product<span style="color:red;font-size: 20px;">*</span></h5>
            <select  class="form-control" name="brand"  id="brand">
                         <option>
              <p>samsung</p>
              </option>  
            </select>
          </td>
        </tr>
        <tr>
          <td>
            <h5>Select Model<span style="color:red;font-size: 20px;">*</span></h5>
            <select name="model" class="form-control" id="model">
            <option  ><p>yk11</p></option>  
            <option  ><p>bz11</p></option>  
            </select> 
          </td>
        </tr>
        <tr>
          <td >
            <div style="color: blue;" id="grab"  class="form-control btn btn-primary"><b style="color:white;">Load</b></div>
          </td>
        </tr>
        <tr>
          <td>
             <h5>Select Size of logo<span style="color:red;font-size: 20px;">*</span></h5>
          <select  class="form-control" name="size" id="size" >
                  <option ><p>120x130</p></option>  
                      </select>
                   </td>
        </tr>
        <tr>
          <td >
             <h5> Quantity<span style="color:red;font-size: 20px;">*</span></h5>
            <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Quantity" >
          </td>
        </tr>
        <tr>
          <td >
             <h5>Enter total selling price<span style="color:red;font-size: 20px;">*</span></h5>
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
  <td>


  </td>
</tr>
</div>

            </tbody>
</form>
        </table>

        <div class="row">
        <div class="col-lg-6">

</div>
<div class="col-lg-6">

</div>
</div>
</td>
</tr>













</table>

      </div>
       
      <div class="col-lg-6" >

        <table class="table">
          <tbody>
          <tr>
            <td>
         <center style="margin-top:15px; ">
            <img  id="main" style="background-color: white;"  >
                      <img id="logo" style="background:transparent;" >
                    </center>
                  </td>
                </tr>
         <tr>
          <td>
          <h5>My Designs<span style="color:red;font-size: 20px;">*</span></h5>
<div style="overflow:scroll;height: 80px;margin-top: 12px;margin-bottom: 12px;" id="myicons">         <?php 
      $sql="select * from logo where cid=4";
      $result=mysqli_query($conn,$sql);
      while ($row=mysqli_fetch_assoc($result)) {
        ?>
        <img src="<?php echo $row['imagepath'];?>" height="60" width="60" style="margin:4px;" class="img-rounded logoc"  id="<?php echo $row['id'];?>" >
        <?php
      }
        ?>
</div>

<div style="float: right; font-size:25px;"><span class="glyphicon glyphicon-resize-full" id="fullsize" ></span>
</div></td></tr>

<tr><td>
<center><button class="btn btn-primary" style="background:transparent;border:1px solid #2e6da4;color:#2e6da4;" id="showupload" >Upload new design </button></center>
  </td></tr>
  <tr><td>
   <div class="row" id="uploadarea" style="">         
<form id="upload_form" enctype="multipart/form-data" method="post">
 <center> <input type="file" class="form-control" name="file1" id="file1">

  <input type="button" class="btn btn-primary" style="margin-top:10px;" value="Upload File" onclick="uploadFile()">
  <progress id="progressBar" value="0" max="100" style="margin-top:10px;"></progress>
  </center>
</form>
<div id="wrapper" class="row" >

 <div id="drop-area" class="col-lg-12" style="padding:12px;">
  <p style="  font-weight:bold;">drop image here</p>
  <h3 class="drop-text"><span class="glyphicon glyphicon-file"></span></h3>

 </div>
</div>
    </div>
  </td></tr>
  <tr>
<td>


</td>
</tr>
       </tbody>
          </table>
  </div>


<table class="table table-hover" style="border-bottom: 1px solid gray;"  >

  <thead>
  <tr><th><h4>My Customers</h4></th></tr>
    <tr style="background-color: #204c67;color: white;"><th>Customer name</th><th>Country</th><th>City</th><th>Pincode</th><th>Landmark</th></tr></thead>
<tbody>
  
  
  <?php
$sql="select * from customerdetail where recordholder='$id'";

$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($result)) {
 ?>
 <tr class="getcustomer" id="<?php echo $row['id'];?>">
  
<td><b>
<?php echo $row['name'];?></b></td>
<td>
<?php echo $row['country'];?></td>
<td>
<?php echo $row['city'];?></td>
<td>
<?php echo $row['pincode'];?></td>
<td>
<?php echo $row['landmark'];?></td>
  </tr>  
 <?php
}


  ?>



</tbody>

</table>




<table class="table">
  <thead><tr><th>Shipping mode</th></thead>
  <tbody><tr style="border: 1px solid gray;box-shadow: 1px 2px 4px gray;font-weight: bold;">
    <center><td ><input type="radio" id="cod" name="grp" class="grp" value="cod"> cod</td>
    <td><input type="radio" id="online" name="grp" class="grp" value="online"> Online Payment</td></center>
  </tr>
</tbody>
</table>
<table class="table" id="customerd">
  <thead><tr><th>Customer details</th></thead>
  <tbody>

    <tr>

      <td ><h5>Customer name<span style="color: red;">*</span></h5><input type="text"  class="form-control" id="cname"  ></td>
    <td ><h5>Address Line1<span style="color: red;">*</span></h5><input type="text"  class="form-control" id="cadd1"  ></td>
     <td ><h5>Address Line2</h5><input type="text"  class="form-control" id="cadd2"  ></td>
      <td ><h5>Landmark<span style="color: red;">*</span></h5><input type="text"  class="form-control" id="landmark"  ></td>
  </tr>

  <tr>
    <td>Pincode<span style="color: red;">*</span><input type="text"  class="form-control" id="pincode"  ></td>
     <td>Country<span style="color: red;">*</span><input type="text"  class="form-control" id="country"  ></td>
     <td>State<span style="color: red;">*</span><input type="text"  class="form-control" id="state"  ></td>
      <td>City<span style="color: red;">*</span><input type="text"  class="form-control" id="city"  ></td>

  </tr>
  <tr>
     <td>Country code<span style="color: red;">*</span><input type="text"  class="form-control" id="ccode"  ></td>
      <td>Mobile<span style="color: red;">*</span><input type="text"  class="form-control" id="mobile"  ></td>
       <td>Customer Email<span style="color: red;">*</span><input type="text"  class="form-control" id="email"></td>
  </tr>
<tr><td>
  <input type="button" value="confirm details" class="btn btn-success" id="cdetail" name="">
</td>
</tr>
</tbody>
</table>





<table class="table" style="" id="finalp" >
  
  <thead><tr ><th><h3 id="evaluate" style="float:left;">Evaluate</h3>
</th></tr></thead>
<tbody id="evaluatearea">
  <tr style="background-color: #204c67;color: white;"><td>Product Name</td><td>Quantity</td><td>Product Price</td><td>Printing charges</td><td>Additional charges</td><td>Product price</td></tr>
  <tr><td><b id="pname1"></b></td><td><b id="quantity1"></b></td><td id="priceperp">-</td><td>-</td><td>-</td><td><b id="pprice1"></b></td></tr>
  <tr><td><b >Shipping</b></td><td>-</td><td>-</td><td>-</td><td>-</td><td><b id="zonepp">-</b></td></tr>
 
  <tr><td><b >Credit Balance</b></td><td><b >-</b></td><td><b></b></td><td>-</td><td>-</td><td>4000</td></tr>
  <tr><td><b>Total</b></td><td>-</td><td>-</td><td>-</td><td>-</td><td id="total">-</td></tr>
</tbody>
</table>
<div style="margin: 20px;">
<center ><input type="button" class="btn btn-success" value="Confirm Oreder" id="submit" name="upload"></center>
</div>
</div>

</div>

  </body>
</html>
