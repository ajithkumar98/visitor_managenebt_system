<?php 
session_start();
require 'dbconfig/config.php';
require 'head.php';
require 'query.php';
if (!$_SESSION['username']) {
	header('location:index.php');
}


?>
<div class="container" style="background-color: white">	
<h2 style="text-align: center">Cancellation</h2>
	
		<form method="post" style="text-align: center;padding-bottom: 20px;font-weight: bold">
			<label>Reason</label><br>
			<input type="text" name="reason" id="input" placeholder="Enter a valid reason"><br><br>
			<input type="submit" id="button" name="submit3" value="Confirm Cancellation">
			<a href="#" onclick="history.back(1);"><input type="button" id="button" value="Back"></a>
		</form>


</div>

</body></html>