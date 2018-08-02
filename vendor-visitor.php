<?php 

session_start();
if ($_SESSION['role']!='102') {
	header('location:index.php');
}
require 'dbconfig/config.php';
require 'head.php';
?>




 <div class="container" style="background-color: white">

	<h1 style="text-align: center">Vendor Visitors List</h1>
</div>



<?php
$query="SELECT * FROM visitor WHERE type='Vendor'";
$query_run=mysqli_query($con,$query);
if(mysqli_num_rows($query_run)==0) {?>

	<div class="container" style="box-shadow: 0 0 3px;background-color: white;height: 200px;text-align: center;font-weight: bold"> <h4 style="margin-top: 80px;font-weight: bold">No results found</h4> </div>
<?php }

else{
foreach ($query_run as $info) {?>

<div class="container" style="box-shadow: 0 0 3px;background-color: white;height: 100%">
	<div id="details" >
	<span>ID : <?php echo $info['id'];?></span> |
	<span>NAME : <?php echo $info['name']; ?></span> |
	<span>DATE : <?php echo $info['date']; ?></span>
	<form action="info.php" method="get">
		<input type="hidden" name="idno" value="<?php echo $info['id']; ?>">
		<input type="submit" name="view" value="View details">
	</form>
	</div>
</div>


<?php }} ?>

<div class="container" style="background-color: white">
<div style="text-align: center;padding-bottom:20px">
	<a href="visitor.php"><input type="button" id="button" value="Back">
</a></div>
</div>

</body></html>