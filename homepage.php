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
$id=$_SESSION['username'];
$role= $_SESSION['role'];

?>



<div class="container" style="background-color: white;text-align: center;height: 500px"><h1> Welcome <?php echo $_SESSION['name'] ; ?> </h1>

<?php

$query="SELECT * FROM login where login_id='$id'";
$query_run=mysqli_query($con,$query);
foreach ($query_run as $info) {?>
<div style="font-weight: bold;font-size: 15px">
<div>NAME : <?php echo $info['user_id']; ?> </div>
<div>CONTACT : <?php echo $info['contact']; ?> </div>
<div>DESIGNATION : <?php echo $info['designation']; ?> </div>
</div>
<?php } ?>

	 <form action="form.php" method="post" style="font-weight: bold;">
            			<input type="submit" id="button2" value="Schedule a meeting" name=""><br><br>
            			<a href="scheduled-visitor.php"><input type="button" id="button2" value="View Scheduled visitors list"></a><br><br>
            			</form>

<?php 
if ($role==='102') {?>
	 <form action="form.php" method="post" style="font-weight: bold">
            			<a href="visitor.php"> <input type="button" id="button2" value="Visitors list" name=""></a><br><br>
            </form>
            	
<?php }
?>

<form action="homepage.php" method="post" style="font-weight: bold">
	<input type="submit" name="logout" value="Log-out" id="button2" style="text-align: center;">
</form>




</div>

</body></html>

