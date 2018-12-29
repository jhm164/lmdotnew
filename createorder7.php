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


<script>

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
</script>

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

input[type="range"]::-moz-range-progress {
  background-color: #43e5f7; 
}
input[type="range"]::-moz-range-track {  
  background-color: #9a905d;
}
/* IE*/
input[type="range"]::-ms-fill-lower {
  background-color: #43e5f7; 
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

.slider {
    -webkit-appearance: none;
   
  margin-left:10px;
  margin-height:10px;
    height: 1px;
    width: 300px;
    background:#000080;
    outline: none;
    opacity: 0.7;
     background-color: #aaaaaa;
     box-shadow: inset 0 0 4px rgba(24, 24, 24, 0.8),
      inset 0 0 2px rgba(0, 0, 0,0.5);
    
    
    -webkit-transition: .2s;
    transition: opacity .2s;
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
  ::-webkit-scrollbar-thumb:hover {
    background: #555; 
}
#errmsg1
{
color: red;
}
#errmsg
{
color: red;
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
    var mainproductprice=0;
    var zonep=0;
    var  paymentmode=null;
  	$(document).ready(function(){
      var quantity='';
$('.kk').hide();
  var category='';
  var brand='';
  var model='';

      $('#mycustomer').hide();


$('#customerd').show();

$('#uploadarea').hide();
$('#manual').hide();
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

$('#showmycustomer').click(function(){
$('#mycustomer').toggle(1000);

});
$('#createnew').click(function(){
$('#customerd').toggle(1000);

});

$('#slider').change(function(){
var v1=$('#slider').val();
var s=$('#logo').outerWidth();
var w=$('#logo').outerHeight();
var h=0;
var w1=0;
//alert($("#logo").outerWidth()+' '+$("#logo").outerHeight());
if(v1>0&&v1<25){

 
$('#logo').css('height',95);
$('#logo').css('width',95);
var w2=$("#logo").outerWidth();
var h2=$("#logo").outerHeight();
$("#h").val(1);
$("#w").val(2);
$("#logo").css("top",v.top+height/2-h2/2);
$("#logo").css("left",v.left+width/2-w2/2);

}else if(v1>25&&v1<50){

 
$('#logo').css('height',105);
$('#logo').css('width',105);
var w2=$("#logo").outerWidth();
var h2=$("#logo").outerHeight();
$("#h").val(2);
$("#w").val(3);
$("#logo").css("top",v.top+height/2-h2/2);
$("#logo").css("left",v.left+width/2-w2/2);

}else if(v1>50&&v1<70){

 
$('#logo').css('height',115);
$('#logo').css('width',115);
var w2=$("#logo").outerWidth();
var h2=$("#logo").outerHeight();
$("#h").val(3);
$("#w").val(4);
$("#logo").css("top",v.top+height/2-h2/2);
$("#logo").css("left",v.left+width/2-w2/2);

}else if(v1>70&&v1<=100){

 
$('#logo').css('height',125);
$('#logo').css('width',125);
var w2=$("#logo").outerWidth();
var h2=$("#logo").outerHeight();
$("#h").val(4);
$("#w").val(5);
$("#logo").css("top",v.top+height/2-h2/2);
$("#logo").css("left",v.left+width/2-w2/2);

}else if(v1>90&&v1<100){

$('#logo').css('height',135);
$('#logo').css('width',135);
var w2=$("#logo").outerWidth();
var h2=$("#logo").outerHeight();
$("#h").val(5);
$("#w").val(6);
$("#logo").css("top",v.top+height/2-h2/2);
$("#logo").css("left",v.left+width/2-w2/2);

}

$('.section2').show(500);
});


$('#accauntsett').change(function(){
  var a=$(this).val();

$(location).attr('href',a);
});
$('#menuselect').change(function(){
  var a=$(this).val();

$(location).attr('href',a);
});

$('#showupload').click(function(){

$('#uploadarea').toggle(1000);
$('#manual').toggle(1000);

});


$('.grp').click(function(){

paymentmode= $('.grp').attr('id');

});


$('#fullsize').click(function(){


$('#fullsize').css('overflow','visible');

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
//alert(v1);
});


$('#zoomin').click(function(){
var s=$('#logo').height();
$('#logo').css('height',s+3);
});

$('.getcustomer').click(function(){
selectedcustomer=$('.getcustomer').attr('id');

//alert(selectedcustomer);

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
//alert(cname+' '+cadd1+' '+cadd2+' '+landmark+' '+pincode+' '+country+' '+state+' '+city+' '+ccode+' '+mobile+' '+email);
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

 $("body").on("click",".logoc", function(){
    logoid1=$(this).attr('id');
var g= $(this).attr('src');
$('#logo').attr('src',g);
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

 category=$('#category').val();
 var name1=$('#m1').text();
  var name2=$('#m2').text();
 brand=$('#i1').val();
 model=$('#i2').val();
alert(category+" "+brand+" "+model+" "+name1);
$.getJSON( "loadproduct.php?category="+category+"&brand="+brand+"&model="+model+"&name1="+name1+"&name2="+name2, function( data ) {
  pcategory=category;
  var items = [];
  $.each( data, function( key, val ) {

mainproductid=val.id;
zone=val.zone;

//alert(mainproductid+zone);
pmodel=val.model;

mainproductprice=val.price;
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


  //called when key is pressed in textbox
  $("#quantity").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
    $("#sellp").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg1").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });


$('#sellp').change(function(){
quantity=$(this).val();
   category=$('#category').val();
   brand=$('#brand').val();
   model=$('#model').val();
  $('#finalp').show(1000);
  $('#evaluatearea').show(1000);
 $('#quantity1').text(quantity);
 $('#pname1').text(category+' '+brand+' '+model);
$('#priceperp').text(mainproductprice);
 $('#pprice1').text(quantity*mainproductprice);
 $.post("zone.php",
    {
      zone:zone
    }, function(data, status){
        $('#zonepp').text(data);
    var    zonep=data;
    }).then(function(){

      zonep=parseInt($('#zonepp').text());
var m=quantity*mainproductprice;
var x11=zonep+m;
totalp=x11;
$('#total').text(x11);
    });

});




$('#quantity').change(function(){
 quantity=$(this).val();
   category=$('#category').val();
   brand=$('#brand').val();
   model=$('#model').val();
  $('#finalp').show(1000);
  $('#evaluatearea').show(1000);
 $('#quantity1').text(quantity);
 $('#pname1').text(category+' '+brand+' '+model);
$('#priceperp').text(mainproductprice);
 $('#pprice1').text(quantity*mainproductprice);
 $.post("zone.php",
    {
      zone:zone
    }, function(data, status){
        $('#zonepp').text(data);
    var    zonep=data;
    }).then(function(){

      zonep=parseInt($('#zonepp').text());
var m=quantity*mainproductprice;
var x11=zonep+m;
totalp=x11;
$('#total').text(x11);
    });

});

$('#evaluate').click(function(){
  quantity=$('#quantity').val();
   category=$('#category').val();
   brand=$('#brand').val();
   model=$('#model').val();
  
  //alert(zone);

  $('#finalp').show(1000);
  $('#evaluatearea').show(1000);
 $('#quantity1').text(quantity);

 $('#pname1').text(category+' '+brand+' '+model);
$('#priceperp').text(mainproductprice);
 $('#pprice1').text(quantity*mainproductprice);
//var zonep;

 $.post("zone.php",
    {
      zone:zone
    }, function(data, status){
        $('#zonepp').text(data);
    var    zonep=data;
        //alert("parsed"+zonep+1000);
    }).then(function(){

    	zonep=parseInt($('#zonepp').text());
    	// alert(parseInt(zonep)+400);

    	//  var ff=zonep;

//zonep=$('#zonepp').text();
 //lert(parseInt(ff)+80);
var m=quantity*mainproductprice;
//alert('m='+m);
var x11=zonep+m;
//alert('x11'+x11);
//alert('zonep'+ff);
//alert(x11);
totalp=x11;
$('#total').text(x11);


    });



});

$('#category').change(function(){
var id=$(this).attr('id');
var cat=$(this).val();
//alert(cat);
$('#'+id).attr('onkeyup',cat);
$(location).attr('href', 'createorder7.php?category='+cat);
//$('#'+id).attr('onkeyup',cat);
$('#bb').text(cat);
});




   $("body").on("click","#searchbutton", function(){
  var id=$("#search").val();
$('#myicons').load('mylogo.php?id=+id);
});


$('#openm').click(function(){
 var id1=22;

$('#myicons').load('mylogo.php?id1='+id1);

//$.getJSON( "mylogo.php?id1="+id1, function( data ) {
 
 // $.each( data, function( key, val ) {
  //  $('#myicons').html(data);
  //  $('#myicons').append('<img src="'+val.imagepath+'" height="60" width="60" height="90" width="90" style=" margin:4px;" class="img-rounded logoc" id="'+val.id+'">');
 // });
//});
});



 $("#submit").click(function(){


  var category=$('#category').val();
  var brand=$('#brand').val();
  var model=$('#model').val();
  var size=$('#h').val();
  var quantity=$('#quantity').val();
  var sellp=$('#sellp').val();
  var category=$('#category').val();


//alert(category+' '+brand+' '+model+' '+size+' '+quantity+' '+sellp+' '+category+' '+mainproductid+' '+logoid1+' '+selectedcustomer+' '+paymentmode);

 $.post("orderp.php",
    {
       
        category:category,
        brand:brand,
        model:model,
        size:size,
        quantity:quantity,
        sellp:sellp,
        category:category,
        mainproductid:mainproductid,
        logoid:logoid1,
        selectedcustomer:selectedcustomer,
        paymentmode:paymentmode,
        total:totalp
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
    <h4 style="color:white;font-family: 'Times New Romen';font-weight: bold;"><br></h4>
    
  
    </center>
  </div>

    <div style="background-color: #357196;padding-top: 5px; padding-bottom: 5px;">
    <center>
    <div id="leftmenu" ><span class="glyphicon glyphicon-dashboard" style="float: left;font-size: 30px; width: 100%;"></span><a href="dashboard.php" style="color: white;font-size: 15px;"> Dashboard</a></div>
   <div id="leftmenu" ><span class="glyphicon glyphicon-tasks" style="float: left;font-size: 30px;width: 100%;margin-bottom: 10px;"></span> 
<select style="color: black;font-size: 15px;" class="form-control" id="menuselect">
  <option>--select--</option>
   <option value="createorder7.php">Create New order</option>
  <option value="previous.php">My Orders</option>
   <option value="trackorder.php">track Orders</option>


</select>
    </div>
    <div id="leftmenu" ><span class="glyphicon glyphicon-user" style="float: left;font-size: 30px;width: 100%;margin-bottom: 10px;"></span>
  <select style="color: black;font-size: 15px;"  class="form-control" id="accauntsett">
  <option>--select--</option>
   <option value="update_detail.php">Update Details</option>


</select>

    </div>
  


   
  <?php    
 if (isset($_SESSION['admin'])){

 
if ($_SESSION['admin']==1) {
   

    ?>
     <div id="leftmenu" ><span class="glyphicon glyphicon-asterisk" style="float: left;font-size: 30px; width: 100%;"></span><a href="adminp.php" style="color: white;font-size: 15px;"> All order</a></div>

   <div id="leftmenu" ><span class="glyphicon glyphicon-asterisk" style="float: left;font-size: 30px; width: 100%;"></span><a href="addproduct.php" style="color: white;font-size: 15px;"> Add product</a></div>
     <?php 

}
}
     ?>
    <div style="margin-top: 100%;">
    <div ><center><span class="fa fa-facebook-official " style="font-size: 50px;color:white;"></span> </center></div>
    <div><center><span class="fa fa-twitter " style="font-size: 50px;color:white;"></span> </center></div>
    </div>
  </center>
  </div>  


  </div>
   <div class="col-lg-10"   >

  <div class="container-fluid" id="d"  style="color:white;background-color: #1e3a68;box-shadow: 1px 6px 4px gray; " >

  <span class="fas fa-wallet" style="float: left;font-size: 20px;" ><?php
if(isset($_SESSION['id'])){
$id=$_SESSION['id'];
$sql="select * from customer where id=$id";

$result=mysqli_query($conn,$sql);

while ($row=mysqli_fetch_assoc($result)) {
echo 'A/C: '.$row['accaunt'];
}

}

?></span>
  <a href="main.php?logout=true" style="color: white;margin-left:  2px;" >
  <div style="margin: 2px; background-color:   #001a66;border:1px solid white;float: right;padding: 8px;text-align: center;">
   <span class="glyphicon glyphicon-log-out" style="float: right;text-align: center;font-size: 16px;color: white;margin-right: 2px;"></span>Log out
 </div></a>
   <div style="margin: 2px; background-color:   #001a66;border:1px solid white;float: right;padding: 8px;text-align: center;">
    <span class="glyphicon glyphicon-user" style="font-size: 16px;"> </span><span style="margin-left: 3px;font-weight: bold;"><?php echo $_SESSION['fname'].' '.$_SESSION['lname']; ?> </span></div>
    </div>





 <div class="row" style="margin-left:10px;margin-right:10px;box-shadow: 1px 4px 4px gray;background-color: #d9d9d9;" >
      
      <div class="col-lg-6"  >
      
<table class="table" style="border: none;">
  
      <thead>
        <th>Create product</th>
      </thead>  
            <tbody >

<div style="padding: 12px;">         

<tr> <td>
    <h5>Select Category<span style="color:red;font-size: 20px;">*</span></h5>
   <select class="form-control" name="category" id="category" >
  
<?php
 if (isset($_GET['category']))
  { 
    ?>
        <option value="<?php  echo $_GET['category']; ?>"><?php  echo $_GET['category']; ?></option>
    <?php
 
  } 
  ?>
   <option>--select--</option>

       <?php 
$sql="select * from category";
$arr=array();
  $result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($result)) {

       ?>
      <option value="<?php echo $row['category'] ;?>"><?php echo $row['category'] ;?></option>
    <?php } ?>
   
    </select>
<h5><span style="color:green;font-size: 20px;" id="bb"></span></h5>
  </td>
   

  </tr>
<?php

if (isset($_GET['category'])) {

$cat=$_GET['category'];
$sql="select * from category where category='$cat'";

  $result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($result)) {
for ($i=1; $i <3 ; $i++) { 
  if ($row['c'.$i]!='imagepath'&&$row['c'.$i]!='zone'&&$row['c'.$i]!='price') {
   $arr[$i]=$row['c'.$i];
 }
}

}
?>
      
          <?php
for($j=1;$j<3;$j++){


if($row['c'.$j]!='N/A'){
//echo $arr[$j];
?>

<?php
//if ($arr[$j]!='imagepath'&&$arr[$j]!='zone'&&$arr[$j]!='price') {
   
  // print_r($arr);
 ?>
 <tr><td>
   <h5><?php echo $arr[$j];?><span style="color:red;font-size: 20px;">*</span></h5>
   <span id="<?php echo 'm'.$j;?>" class="kk"><?php echo $arr[$j];?></span>
 <select class="form-control" id="<?php echo 'i'.$j;?>">

 <?php
 echo $arr[$j];
 $sql="SELECT DISTINCT $arr[$j] FROM $cat ";
echo $sql;
  $result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($result)) {
?>  <option>
<?php echo  $row[$arr[$j]]; ?>
</option>
<?php
}
?>

</select>
</td>
</tr>
<?php
//} 

}
}
?>
          <?php 
}
          ?>
        
        <tr>
          <td >
            <div style="color: blue;" id="grab"  class="form-control btn btn-primary"><b style="color:white;">Load</b></div>
          </td>
        </tr>
       
        <tr>
          <td >
             <h5> Quantity<span style="color:red;font-size: 20px;">*</span></h5>
            <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Quantity" ><span id="errmsg"></span>
          </td>
        </tr>
        <tr>
          <td >
             <h5>Enter total selling price<span style="color:red;font-size: 20px;">*</span></h5>
            <input type="text" class="form-control" name="sellp" id="sellp" placeholder="Enter your selling price " ><span id="errmsg1"></span>
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
                <tr><td><center><span style="margin-left: 50px; float: left;">height</span><span >width</span></center></td></tr>
                <tr><td><center><input type="text" name="" id="h"> <input type="text" id="w" name=""></center></td></tr>
                <tr><td><center><input type="range" class="form-control slider"  min="1" max="100" value="50"  id="slider" name="" ></center></td></tr>
         <tr>
          <td>
          <h5>My Designs<span style="color:red;font-size: 20px;">*</span></h5>


 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" id="openm" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">My designs</h4>
        </div>
        <div class="modal-body">
            <center style="margin-bottom: 10px;"> 

<input type="text" name="" id="search" placeholder="search by sql number"> <input type="button" value="click" name="" id="searchbutton">




<div  id="myicons"> 
</div>
</center>
        </div>
        
      </div>
      
    </div>
  </div>
  







</div>


       
<div style="float: right; font-size:25px;"><span class="glyphicon glyphicon-resize-full" id="fullsize" ></span>
</div></td></tr>


 <tr><td>
<center><button class="btn btn-primary" style="background:transparent;border:1px solid #2e6da4;color:#2e6da4;" id="showupload" >Upload new design </button></center>
  </td></tr>
  <tr></tr>
       </tbody>
          </table>
  </div>

<table class="table">
  <tbody>
  <tr>
  	<td>
  		<div id="manual">
  		<form id="upload_form" enctype="multipart/form-data" method="post">
  <input type="file" name="file1" id="file1"><br>
  <input type="button" value="Upload File" onclick="uploadFile()">
  <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
  <h3 id="status"></h3>
  <p id="loaded_n_total"></p>
</form>

    </div>
  	</td>
  </tr>
  <tr><td>

   <div class="row" id="uploadarea" style="">   

<form id="upload_form" enctype="multipart/form-data" method="post">

</form>
<div id="wrapper" class="row" >

 <div id="drop-area"  style="padding:12px; margin-left: 12px;margin-right: 12px;">
  <p style="  font-weight:bold;">drop image here</p>
  <h3 class="drop-text"><span class="glyphicon glyphicon-file"></span></h3>

 </div>
</div>
    </div>
  </td></tr>
  </tbody>
</table>
</div>
<div style="margin-top: 20px; margin-left:10px;margin-right:10px;box-shadow: 1px 4px 4px gray;background-color: #d9d9d9;">
	<h3 style="margin: 10px;">Customer details</h3>
<input type="button" class="btn btn-primary"  style="background:transparent;border:1px solid #2e6da4;color:#2e6da4; margin: 10px;" name="" id="showmycustomer" value="my customers">
<input type="button" class="btn btn-primary"  style="background:transparent;border:1px solid #2e6da4;color:#2e6da4; margin: 10px;" name="" id="createnew" value="create new">

<div id="existcustomer">
<table class="table table-hover" style="border-bottom: 1px solid gray;" id="mycustomer" >

  <thead>
  <tr></tr>
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

</div>


<div id="newtcustomer">

<table class="table" id="customerd">

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
</div>
</div>
<div style="margin-top: 20px; margin-left:10px;margin-right:10px;box-shadow: 1px 4px 4px gray;background-color: #d9d9d9;">
<table class="table">
  <thead><tr><th>Shipping mode</th></thead>
  <tbody><tr style="font-weight: bold;">
    <center><td ><input type="radio" id="cod" name="grp" class="grp" value="cod"> cod</td>
    <td><input type="radio" id="online" name="grp" class="grp" value="online"> Online Payment</td></center>
  </tr>
</tbody>
</table>
</div>
<div style="margin-top: 20px; margin-left:10px;margin-right:10px;box-shadow: 1px 4px 4px gray;background-color: #d9d9d9;">
<button id="evaluate" class="btn btn-primary"  style="margin: 10px; background:transparent;border:1px solid #2e6da4;color:#2e6da4;float:left;" >Evaluate</button>
<table class="table" style="" id="finalp" >
  
  <thead><tr ><th>
</th></tr></thead>
<tbody id="evaluatearea">
  <tr style="background-color: #204c67;color: white;"><td>Product Name</td><td>Quantity</td><td>Product Price</td><td>Printing charges</td><td>Additional charges</td><td>Product price</td></tr>
  <tr><td><b id="pname1"></b></td><td><b id="quantity1"></b></td><td id="priceperp">-</td><td>-</td><td>-</td><td><b id="pprice1"></b></td></tr>
  <tr><td><b >Shipping</b></td><td>-</td><td>-</td><td>-</td><td>-</td><td><b id="zonepp">-</b></td></tr>
 
  <tr><td><b >Current Balance</b></td><td><b >-</b></td><td><b></b></td><td>-</td><td>-</td><td>4000</td></tr>
  <tr  style="background-color:  #004d99;color: white;"><td><b>Total Payable</b></td><td>-</td><td>-</td><td>-</td><td>-</td><td id="total">-</td></tr>
</tbody>
</table>
</div>
<div style="margin: 20px;">
<center ><input type="button" class="btn btn-success" value="Confirm Oreder" id="submit" name="upload"></center>
</div>



</div>

  </body>
</html>
<?php
include 'connection.php';
if(isset($_POST['btn_upload'])){
	$id=$_SESSION['id'];
	# code...
	//$conn=mysqli_connect("localhost","root","","lmdot");

if(!$conn){
	echo die();
}


	
	$filetmp = $_FILES["file_img"]["tmp_name"];
	$filename = $_FILES["file_img"]["name"];
	$filetype = $_FILES["file_img"]["type"];
	$filepath = "images/".$filename;
  //$targetPath = "images/".$_FILES['file_img']['name'];



move_uploaded_file($filetmp,$filepath);
	
$sql = "INSERT INTO `logo` (`id`,`imagepath`, `imagename`, `type`, `cid`) VALUES (NULL, '$filepath','$filename','$filetype',$id)";
if(mysqli_query($conn,$sql)){
echo "<script type='text/javascript'>alert(<?php echo 'success'; ?>);</script>";
}else
{
echo "<script type='text/javascript'>alert(<?php echo 'please change the file name and try again'; ?>);</script>";
}
 

}
	?>