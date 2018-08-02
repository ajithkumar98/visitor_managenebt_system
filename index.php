<?php 
session_start();
require 'dbconfig/config.php';
require 'head.php';
require 'query.php';
?>




<div class="container" style="background-color: white;padding-bottom: 30px;width: 500px;box-shadow: 0 0 10px">
	<h2 style="text-align: center;font-weight: bold">USER LOGIN</h2>
	<div class="container" style="text-align: center;">
		<form action="index.php" method="post" style="text-align: left">
			<label style="padding-top: 15px">USERNAME</label><br>
			<input id="input" type="text" name="username"  placeholder="username"><br>
			<label style="padding-top: 15px">PASSWORD</label ><br>
			<input id="input" type="password" name="password" placeholder="password"><br><div style="padding-top: 20px">
			<input type="submit" name="submit1" id="button" value="Log In"></div>
		</form>
	</div>
</div>




</body>
</html>