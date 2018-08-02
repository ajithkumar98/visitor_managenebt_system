<?php 

session_start();
if (!$_SESSION['username']) {
	header('location:index.php');
}
require 'dbconfig/config.php';
require 'head.php';
require 'query.php';
?>


 <div class="container" style="background-color: white">

	<h1 style="text-align: center">Scheduled Visitors List</h1>
</div>


<div class="container" style="background-color: white;padding:20px;box-shadow: 0 0 3px;text-align: center;">
	<form method="post" action="sortscheduled.php">
		<label>Enter a date to go to that days visitor list : </label><br>
		<input type="date" name="from" id="input" style="width: 250px">
		<label>to</label>
		<input type="date" name="to" id="input" style="width: 250px">
		<input type="submit" name="check" id="button">

	</form></div>




<?php
$scheduledby=$_SESSION['username'];
$query="SELECT * FROM visitor WHERE type='Scheduled visitor' and date=CURRENT_DATE and scheduledby='$scheduledby'";
$query_run=mysqli_query($con,$query);
if (mysqli_num_rows($query_run)==0){?>
<div class="container" style="background-color: white;padding:20px;box-shadow: 0 0 3px;text-align: center;margin-top: 20px;margin-bottom: 20px">
<h3 style="font-weight: bold">Today's appointment</h3>
No appoinments today

<?php } 
else {

	

foreach ($query_run as $info) {?>

<div class="container" style="background-color: white;height: 100%;text-align: center;margin-top: 20px">
<h3 style="font-weight: bold">Today's appointment</h3>
	<div id="details" >
	<span>ID : <?php echo $info['id'];?></span> |
	<span>NAME : <?php echo $info['name']; ?></span> |
	<span>DATE : <?php echo $info['date']; ?></span> |
	<span>STATUS : <?php echo $info['status']; ?></span>
	<span>
	<form action="info.php" method="get">
		<input type="hidden" name="idno" value="<?php echo $info['id']; ?>">
		<input type="submit" name="view" value="View details" id="button2" style="float: left;left: 540px;width: 200px"><br><br>
	</form>

	<form action="edit.php" method="get">
		<input type="hidden" id="input" name="id2" value="<?php echo $info['id']; ?>">
		<input type="submit" id="button2" value="Edit visitor details" style="float: right;top: -10px;width: 200px"></form>
		<form action="cancel.php" method="get">
		<input type="hidden" name="id" value="<?php echo $info['id']; ?>">
		<input type="submit" id="button2" value="Cancel meeting" style="float: right;top: -10px;width: 200px"><br><br><br>
	</form></span>


	
</div>

<?php }} ?>


<div style="text-align: center;padding:20px;font-weight: bold;">
	<a href="homepage.php"><input type="button" id="button" value="Back">
</a></div></div>


</body></html>