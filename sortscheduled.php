<?php
session_start();
if (!$_SESSION['username']) {
	header('location:index.php');
}

require 'dbconfig/config.php';
require 'head.php';
require 'query.php';
?>
<?php
$from=$_POST['from'];
$to=$_POST['to'];
$scheduledby=$_SESSION['username'];
?>

<div class="container" style="background-color: white;padding:20px;box-shadow: 0 0 3px;text-align: center;">
	<h2>Appoinments between <?php echo $from; ?> and <?php echo $to; ?></h2>
</div>

<?php
	$query= "SELECT * FROM visitor WHERE date between '$from' and '$to' and type='Scheduled visitor' and scheduledby='$scheduledby'";
	$query_run= mysqli_query($con,$query);
	if (mysqli_num_rows($query_run)==0) {?>
	<div class="container" style="background-color: white;padding:20px;box-shadow: 0 0 3px;text-align: center;">
		<h4>No appoinments found</h4>
	</div>
		
	<?php }
	else{
foreach ($query_run as $value) {
?>

<div class="container" style="box-shadow: 0 0 3px;background-color: white;height: 100%;padding: 20px;text-align: center">
	<div id="details" >
	<span>ID : <?php echo $value['id'];?></span> |
	<span>NAME : <?php echo $value['name']; ?></span> |
	<span>DATE : <?php echo $value['date']; ?></span> |
	<span>STATUS : <?php echo $value['status']; ?></span>
	<form action="info.php" method="get">
		<input type="hidden" name="idno" value="<?php echo $value['id']; ?>">
		<input type="submit" name="view" value="View details" id="button">
	</form>


	</div></div>
<?php }} ?>
<div class="container" style="background-color: white;height: 100%;text-align: center;padding: 15px">
<a href="scheduled-visitor.php"><input type="button" value="Back" id="button"></a></div>
</body></html>