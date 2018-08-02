<?php
session_start();
if ($_SESSION['role']!='102') {
	header('location:homepage.php');
	

}

require 'dbconfig/config.php';
require 'head.php';
?>

<div class="container" style="background-color: white;font-weight: bold;text-align: center;margin-bottom: 15px;box-shadow: 0 0 3px">
<h2>Complete visitor details</h2>
<form action="form.php" method="post" style="padding: 20px;font-weight: bold;">
            		<a href="vendor-visitor.php"><input type="button" id="button" value="Vendors" name=""></a>
            		<a href="walkin-visitors.php"><input type="button" id="button" value="Walk-in Visitors" name=""></a>
            		<a href="scheduled-visitor.php"><input type="button" id="button" value="Scheduled Visitors" name=""></a>
            		</form>
<!-- 	<h1 style="text-align: center">Todays Visitors List</h1>
 --></div>

<div class="container" style="background-color: white;padding:20px;text-align: center">
	<form method="post" action="sortvisitor.php">
		<h4><label>Enter a date to go to sorted visitor list : </label></h4><br>
		<input type="date" name="from" id="input" style="width: 250px">
		<label>to</label>
		<input type="date" name="to" id="input" style="width: 250px"><br><br>
		<input type="submit" name="check" id="button">

	</form><br>

	
</div>

<div class="container" style="background-color: white;height: 100%;box-shadow: 0 0 3px;text-align: center;padding: 15px;margin-top: 15px">
<h4 style="font-weight: bold;">Today's appoinment</h4></div>

<?php
$id=$_SESSION['username'];
$query= "SELECT * FROM visitor WHERE date=CURRENT_DATE and scheduledby='$id'";
$query_run= mysqli_query($con,$query);
if (mysqli_num_rows($query_run)==0) { ?>
<div class="container" style="background-color: white;height: 100%;text-align: center;padding: 15px">No appoinments found today</div>

	
<?php }

else {
foreach ($query_run as $value) {
?>

<div class="container" style="background-color: white;height: 100%;box-shadow: 0 0 3px;text-align: center;padding: 15px">

	<div id="details" >
	<span>ID : <?php echo $value['id'];?></span> |
	<span>NAME : <?php echo $value['name']; ?></span> |
	<span>DATE : <?php echo $value['date']; ?></span> |
	<span>STATUS : <?php echo $value['status']; ?></span>
	<form action="info.php" method="get">
		<input type="hidden" name="idno" value="<?php echo $value['id']; ?>">
		<input type="submit" name="view" value="View details" id="button2" style="float: left;left: 538px;width: 200px"><br><br>
	</form>

	<form action="edit.php" method="get">
		<input type="hidden" id="input" name="id2" value="<?php echo $value['id']; ?>" >
		<input type="hidden" id="input" name="date" value="<?php echo $value['date']; ?>" >
		<input type="submit" id="button2" value="Edit visitor details" style="float: right;top: -10px;width: 200px">
		<a href="cancel.php"><input type="button" id="button2" value="Cancel a scheduled meeting" style="float: right;top: -10px;width: 200px"></a>
	</form>


	</div>
</div>

<?php }} ?>

<div class="container" style="background-color: white">
<div style="text-align: center;padding:20px">
	<a href="homepage.php"><input style="font-weight: bold;" type="button" id="button" value="Back">
</a></div>
</div>


</body></html>