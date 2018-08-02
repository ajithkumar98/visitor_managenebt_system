<?php 
session_start();
require 'dbconfig/config.php'
?>



<!DOCTYPE html>
<html>
<head>
<script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
	document.location.href = "indexvisitor.php";

}
</script>
	<title>Visitor pass IOPEX</title>
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
</head>
<body style="background-color:lightgrey">


<header>
	<nav id="header-nav" class="navbar navbar-default">
		
		<div class="navbar-header">
			<a href="indexvisitor.php" class="pull-left">
				<div id="logo"></div>
			</a>
		
		</div>
		<div id="collapsable-nav" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right" id="nav-tiles">
            	<li>
            		<form action="indexvisitor.php" method="post">
            			<!-- <input type="submit" id="button2" value="Back" name=""> -->
            			<input type="submit" onclick="printContent('table')" id="button2" value="Print form" name="print">
            		</form>
            		
            	</li>
            </ul>
            </div>
	</nav>
</header>

        <style>
#camera {

  width: 100%;
  height: 350px;
}

</style>

<?php

$id=$_GET['passid'];
$query="SELECT * FROM visitor where contact=$id and visit='NOT VISITED'";
$query_run= mysqli_query($con,$query);
foreach ($query_run as $info) { ?>
<div class="container">
<div class="container" class="col-xs-6"  style="background-color: white;padding-bottom: 20px;width: 500px;padding-top: 20px" id="table">

		<table border="3" width="400" height="600" style="font-weight: bold;font-size: 20px"  align="center">
		
         <tr><td colspan="3" align="center"><div style="font-weight: bold;font-size: 20px">Visitor pass</div></td></tr>
   <tr><td colspan="3" align="center"><div id="camera"> </div></td></tr>
 
      
        
      	
	<tr><td align="center">ID</td> <td align="center">:</td> <td align="center"><?php echo $info['id']?></td></tr>
		 <tr><td align="center">Name</td> <td align="center">:</td> <td align="center"><?php echo $info['name']?></td></tr>
		 <tr><td align="center">Date</td> <td align="center">:</td> <td align="center"><?php echo $info['date']?></td></tr>

		<!-- <tr><td>Phone number</td><td> : </td>  <td align="center"><?php echo $info['contact']?></td> </tr> -->
		<!-- <tr><td>Date of Birth</td><td> : </td>  <td align="center"><?php echo $info['dob']?></td></tr>
		<tr><td>Email</td>  <td> : </td><td align="center"><?php echo $info['email']?></td></tr>
		<tr><td>Purpose</td><td> : </td>  <td align="center"><?php echo $info['purpose']?></td></tr>
		<tr><td>Contact Person</td> <td> : </td> <td align="center"><?php echo $info['person']?></td></tr>
		<tr><td>Type of transport</td><td> : </td>  <td align="center"><?php echo $info['transport']?></td></tr>
		<tr><td>From place</td> <td> : </td> <td align="center"><?php echo $info['place']?></td></tr>
		<tr><td>Type of ID proof</td> <td> : </td> <td align="center"><?php echo $info['idproof']?></td></tr>
		<tr><td>ID number</td> <td> : </td> <td align="center"><?php echo $info['idno']?></td></tr>
		<tr><td>Asset type</td> <td> : </td> <td align="center"><?php echo $info['assettype']?></td></tr>
		<tr><td>Asset No</td> <td> : </td> <td align="center"><?php echo $info['assetno']?></td></tr>
		<tr><td>Asset No</td> <td> : </td> <td align="center"><?php echo $info['checkin']?></td></tr>
		<tr><td>Time</td> <td> : </td> <td align="center"><?php echo $info['time']?></td></tr>
		<tr><td>Type of Visitor</td> <td> : </td> <td align="center"><?php echo $info['type']?></td></tr> --></table><br>
		<div style="text-align: center;padding-top:30px;font-weight: bold;padding-bottom: 5px;font-size: 20px">Visitor signature</div></div>

		
		
		
		
		
		
	

<!--         <div class="col-md-6">
            <div class="text-center">
        <div id="camera_info"></div>
    <div id="camera"></div><br>
    <button id="take_snapshots" class="btn btn-success btn-sm">Take Snapshots</button>
      </div>
        </div>
        <style>
#camera {
	text-align: center;
  width: 60%;
  height: 250px;
}

</style> -->
        
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="jpeg_camera/jpeg_camera_with_dependencies.min.js" type="text/javascript"></script>
<script>
    var options = {
      shutter_ogg_url: "jpeg_camera/shutter.ogg",
      shutter_mp3_url: "jpeg_camera/shutter.mp3",
      swf_url: "jpeg_camera/jpeg_camera.swf",
    };
    var camera = new JpegCamera("#camera", options);
  
  $('#take_snapshots').click(function(){
    var snapshot = camera.capture();
    snapshot.show();
    
})


</script>

<?php } ?>



</body></html>