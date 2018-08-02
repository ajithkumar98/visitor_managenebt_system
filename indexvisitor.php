<?php 
session_start();
require 'dbconfig/config.php';
require 'head.php'
?>


<div class="container" style="background-color: white;text-align: center;padding: 10px;font-weight: bold;">
<h1>Welcome to IOPEX technologies</h1></div>
<div class="container" style="background-color: white;box-shadow: 0 0 3px;text-align: center;padding: 50px;font-weight: bold;">

	<form action="visitorpass.php" >
            			<input type="submit" id="button3" value="Visitors click here" style="background-color: white;font-size: 25px"><br><br>
            		
            		</form>
            		<form action="walkin-form.php" >
            			<input type="submit" id="button3" value="Walk-in Visitors click here" style="background-color: white;font-size: 25px">
            		
            		</form>
</div>

</body></html>