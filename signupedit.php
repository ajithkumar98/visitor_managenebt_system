<?php
require 'dbconfig/config.php';
require 'head.php';
require 'query.php';
?>


<div class="container" style="background-color: white;font-weight: bold;text-align: center;padding: 20px">
<h1>EMPLOYEE DETAILS EDIT FORM</h1>
<form action="signupeditform.php" method="post">
	<label>ENTER THE EMPLOYEE USER ID</label><br>
	<input type="text" name="userid" id="input"><br><br>
	<input type="submit" name="submit" id="button">
</form></div>

