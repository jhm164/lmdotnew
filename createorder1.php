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
 width:995px;
}
#drop-area
{
 margin-top:20px;
 margin-left:220px;
 width:550px;
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
  	$(document).ready(function(){

var v1;
  	var mainproductid;
  	var pcategory;
  	var pmodel;
  	var logoid1;

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
alert(mainproductid);
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


  	});
  </script>
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
   <div class="col-lg-10"  >
<table class="table">
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




<table class="table">
	<form action="createorder.php" method="post" enctype="multipart/form-data">
			<thead>
				<th>Create product</th>
			</thead>	
            <tbody>


            	<tr>
					<td  colspan="2">
						<select  class="form-control" name="category" id="category">
							<option value="t-shirt" >t-shirt</option>
   							 <option value="mobile">mobile</option>
						</select>
					</td>

				</tr>

				<tr>
					<td colspan="2">
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
 					<td colspan="2">
 						<h4 style="color: blue;" id="grab">grab images as per selection</h4>
 					</td>
 				</tr>
 				<tr>
 					<td colspan="2">
 					<select  class="form-control" name="size" >
	                <option ><p>120x130</p></option>  
	                    </select>
                   </td>
 				</tr>
 				<tr>
 					<td colspan="2">
 						<input type="text" class="form-control" name="quantity" placeholder="Quantity" >
					</td>
 				</tr>
 				<tr>
 					<td colspan="2">
 						<input type="text" class="form-control" name="sellp" placeholder="Enter your selling price " >
 					</td>
 				</tr>
 				<tr>
 					<td>
 						<a href="createorder1.php">refresh</a>
 					</td>
 				</tr>
 				<tr>
 					<td>
 						<img src="imgmain/tshirt.jpg" id="main"  >
                      <img src="images/oscar.png" id="logo" >
 					</td>
 					<td>
 						<div id="down" class="btn btn-default">down</div>
						<div id="up" class="btn btn-default">up</div>
						<div id="zoomin" class="btn btn-default">zoomin</div>
						<div id="zoomout" class="btn btn-default">zoomout</div>
						<div id="left" class="btn btn-default">left</div>
						<div id="right" class="btn btn-default">right</div>

 					</td>
 					
 				</tr>
 				<tr>
 					<td>
 						<?php 
			$sql="select * from logo where cid=4";
			$result=mysqli_query($conn,$sql);
			while ($row=mysqli_fetch_assoc($result)) {
				?>
				<img src="<?php echo $row['imagepath'];?>" height="100" width="100"  class="img-rounded logoc"  id="<?php echo $row['id'];?>" >
				<?php
			}
				?>
 					</td>
 					<td>
 						<?php 

							$sql="select * from mobile where brand='samsung' and model='bz11'" ;
							$result=mysqli_query($conn,$sql);
							while ($row=mysqli_fetch_assoc($result)) {
						?>
					<img src="<?php echo $row['imagepath'];?>" height="100" width="100"  class="img-rounded main"   >
					<?php
						}
						?>
 					</td>
 				</tr>

<tr>
	<td><input type="submit" class="btn btn-success" value="Submit" name="upload">


	</td>
</tr>


            </tbody>
</form>
        </table>
<table class="table">

<tr>
	<td><form id="upload_form" enctype="multipart/form-data" method="post">
  <input type="file" name="file1" id="file1"><br>
  <input type="button" value="Upload File" onclick="uploadFile()">
  <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
  <h3 id="status"></h3>
  <p id="loaded_n_total"></p>
  <input type="submit" name="">
</form>
<div id="wrapper">
 <input type="file">
 <div id="drop-area">
  <h3 class="drop-text">Drag and Drop Images Here</h3>

 </div>

</div>
</td>
</tr>













</table>


</div>

</div>


   

    
  </body>
</html>
