<?php
session_start();
if (!$_SESSION['username']) {
	header('location:index.php');
}

require 'dbconfig/config.php';
require 'head.php';
?>




<?php
$id=$_GET['idno'];


$query="SELECT * FROM visitor where id='$id'";
$query_run= mysqli_query($con,$query);
foreach ($query_run as $info) {?>

<div class="container" style="box-shadow: 0 0 10px;background-color: white">
<h1 style="text-align: center;">Visitor details</h1>
<div id="info">

		<table width="1000" border="4" align="center" >

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
		<tr><td>Status</td> <td> : </td> <td align="center"><?php echo $info['status']?></td></tr></table><br>
		
		
	<a href="#" onclick="history.back(1);"><input type="button" id="button" value="Back"></a></div>
</div>


<?php } ?>



</body>
</html>