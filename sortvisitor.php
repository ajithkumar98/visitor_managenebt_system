<?php
session_start();
if ($_SESSION['username']!='admin') {
	header('location:index.php');
}

require 'dbconfig/config.php';
require 'head.php';
?>


<?php
$from=$_POST['from'];
$to=$_POST['to'];
?>

<?php
	$query= "SELECT * FROM visitor WHERE date between '$from' and '$to'";
	$query_run= mysqli_query($con,$query);
foreach ($query_run as $value) {
?>

<div class="container" style="box-shadow: 0 0 3px;background-color: white;height: 100%">

	<div id="details" >
	<span>ID : <?php echo $value['id'];?></span> |
	<span>NAME : <?php echo $value['name']; ?></span> |
	<span>DATE : <?php echo $value['date']; ?></span> |
	<span>STATUS : <?php echo $value['status']; ?></span>
	<form action="info.php" method="get">
		<input type="hidden" name="idno" value="<?php echo $value['id']; ?>">
		<input type="submit" name="view" value="View details">
	</form>


	</div></div>
<?php } ?>
<div class="container" style="box-shadow: 0 0 3px;background-color: white;height: 100%;text-align: center">
<a href="visitor.php"><input type="button" value="Back" id="button"></a>
<form action="form.php" method="post">
            		<a href="vendor-visitor.php"><input type="button" id="button2" value="Vendors" name=""></a>
            		<a href="walkin-visitors.php"><input type="button" id="button2" value="Walk-in Visitors" name=""></a>
            		<a href="scheduled-visitor.php"><input type="button" id="button2" value="Scheduled Visitors" name=""></a>
            		</form></div>
</body></html>