<?php
session_start();
require 'dbconfig/config.php';
require 'head.php';
require 'query.php';
?>

<div class="container" style="background-color: white;font-weight: bold;text-align: center;padding: 20px">
<h1>EMPLOYEE ENROLLING FORM</h1>
<form action="signup.php" method="post">
	<label>USER ID</label><br>
	<input type="text" name="userid" id="input"><br><br>
	<label>LOGIN ID</label><br>
	<input type="text" name="loginid" id="input"><br><br>
	<label>PASSWORD</label><br>
	<input type="password" name="password" id="input"><br><br>
	<label>DESIGNATION</label><br>
	<input type="text" name="designation" id="input"><br><br>
	<label>CONTACT</label><br>
	<input type="number" name="contact" id="input"><br><br>
	<label>SELECT ROLE ID</label><br>
	<select name="role" id="input">
		<option>100</option>
		<option>101</option>
		<option>102</option>
		<option>103</option>
		<option>104</option>
	</select><br><br>
	<input type="submit" name="submit8" id="button">
</form></div>

