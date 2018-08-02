<?php 
session_start();
require 'dbconfig/config.php';
require 'head.php';
?>







<?php

$id=$_POST['passid'];
$query="SELECT * FROM visitor where contact=$id";
$query_run= mysqli_query($con,$query);
foreach ($query_run as $info) { ?>

<div class="container"  style="box-shadow: 0 0 10px;background-color: white">


        <div class="col-md-6" style="padding-top: 20px">
           <div style="font-weight: bold;">Visitor photo</div>
        <div id="camera_info"></div>
    <div id="camera"> </div>
 
      </div>
        
        <style>
#camera {

  width: 40%;
  height: 150px;
}

</style>


<div id="info" class="col-md-6" >
<table >

	<tr><td>ID</td> <td>:</td> <td align="center"><?php echo $info['id']?></td></tr>
		<tr><td>Name</td> <td>:</td> <td align="center"><?php echo $info['name']?></td></tr>
		<tr><td>Phone number</td><td> : </td>  <td align="center"><?php echo $info['contact']?></td></tr>
		<tr><td>Date of Birth</td><td> : </td>  <td align="center"><?php echo $info['dob']?></td></tr>
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
		<tr><td>Type of Visitor</td> <td> : </td> <td align="center"><?php echo $info['type']?></td></tr></table>
		<!-- <form method="get" action="passprint2.php">
			<input type="time" name="checkin">
			<input type="hidden" name="passid" value="<?php echo $id; ?>">
			<input type="submit" name="check">
		</form> -->

		<!-- <?php
		if (isset($_POST['check'])) {
			
		
		$checkin=$_POST['checkin'];
		$query="UPDATE visitor SET checkin='$checkin' where contact=9381828207";
			$query_run=mysqli_query($con,$query);
			if ($query_run) {
				echo '<script type="text/javascript">alert("sucess")</script>';
			}
			else{
								echo '<script type="text/javascript">alert("fail")</script>';

			}}

		?> -->

		

		<a title="print screen" alt="print screent" onclick="window.print();"target="_blank" id="button">print</a>
		</div>
		
	

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


</div>

<?php } ?>



</body></html>