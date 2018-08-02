<?php 
session_start();
require 'dbconfig/config.php';
require 'head.php';
?>






<div class="container" style="text-align: center;background-color: white;height: 500px">
<h1 style="text-align: center;font-weight: bold">WELCOME TO IOPEX</h1>
		<form method="get" action="checkin.php" style="padding-top: 80px">
		<label>Enter your phone number to get your pass</label><br>
			<input type="text" name="passid" placeholder="Enter your phone number" id="input"><br><br>
			<input  type="submit" name="button" value="Get your visitor pass"  id="button">
		</form><br>

		<form method="get" action="checkout.php">
			<label>Enter your pass ID to check out</label><br>
			<input type="text" name="checkout"  id="input" placeholder="Enter your pass id"><br><br>
			<input type="submit" id="button" value="Check out" id="button1" name="button1">
		</form>


</div>
</body></html>
