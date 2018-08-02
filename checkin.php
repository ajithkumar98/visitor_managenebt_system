<?php 
session_start();
require 'dbconfig/config.php';
require 'head.php';
require 'query.php';
?>





<?php
$id=$_GET['passid'];
?>


<?php
 	$query2="SELECT * FROM visitor where contact=$id and date=CURRENT_DATE";
 	$query_run2=mysqli_query($con,$query2);
 	foreach ($query_run2 as $info) { ?>


 	<div class="container" style="background-color: white;box-shadow: 0 0 4px;padding: 20px">
 		<div>
 			<table width="1000" border="2" align="center" style="font-size: 20px">

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
		<tr><td>Check-in time</td> <td> : </td> <td align="center"><?php echo $info['checkin']?></td></tr>
		<tr><td>Check-out time</td> <td> : </td> <td align="center"><?php echo $info['checkout']?></td></tr>
		<tr><td>Time</td> <td> : </td> <td align="center"><?php echo $info['time']?></td></tr>
		<tr><td>Type of Visitor</td> <td> : </td> <td align="center"><?php echo $info['type']?></td></tr>
		<tr><td>Visit Status</td> <td> : </td> <td align="center"><?php echo $info['visit']?></td></tr>
		<tr><td>Status</td> <td> : </td> <td align="center"><?php echo $info['status']?></td></tr>

		<tr><td><label>Check-in time</label></td> <td>:</td> <td align="center"> <form method="get" action="checkin.php">
		
			<input type="time" name="checkin">
			<input type="hidden" name="passid" value="<?php echo $_GET['passid']; ?>">
			<input type="submit" id="button" name="submit4">
		</form></td> </tr>
		</table>
 		</div>
 	<!-- </div> -->


<?php } ?>

</div></div>
</body></html>