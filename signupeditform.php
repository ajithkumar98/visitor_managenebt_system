<?php
require 'head.php';
require 'dbconfig/config.php';
require 'query.php';
?>


<?php
$id=$_POST['userid'];

$query ="SELECT * FROM login where user_id='$id'";
$query_run=mysqli_query($con,$query);
if (mysqli_num_rows($query_run)==0) {?>
	<div class="container" style="background-color: white;text-align: center;font-weight: bold;padding: 20px">
	<h1>EMPLOYEE DETAILS UPDATE FORM</h1>
<div>No results found</div><br>
<a href="#" onclick="history.back(1);"><input type="button" id="button" value="Back"></a></div>
<?php }
else

foreach ($query_run as $info) {?>

<div class="container" style="background-color: white;text-align: center;font-weight: bold;padding: 20px">
<h1>EMPLOYEE DETAILS UPDATE FORM</h1>
<form action="signupeditform.php" method="post">
	<label>USER ID</label><br>
	<input type="text" name="userid" value="<?php echo $info['user_id']?>" id="input"><br><br>
	<label>LOGIN ID</label><br>
	<input type="text" name="loginid" value="<?php echo $info['login_id'] ?>" id="input"><br><br>
	<label>DESIGNATION</label><br>
	<input type="text" name="designation" value="<?php echo $info['designation'] ?>" id="input"><br><br>
	<label>CONTACT</label><br>
	<input type="number" name="contact" value="<?php echo $info['contact'] ?>" id="input"><br><br>
	<label>SELECT ROLE ID</label><br>
	<select name="role" id="input" value="<?php echo $info['role']?>">
		<option>100</option>
		<option>101</option>
		<option>102</option>
		<option>103</option>
		<option>104</option>
	</select><br><br>
	<input type="submit" name="submit9" id="button">
	<a href="#" onclick="history.back(1);"><input type="button" id="button" value="Back"></a>
</form></div>
<?php }?>


<?php
if (isset($_POST['submit9'])) {
	$userid=$_POST['userid'];
	$loginid=$_POST['loginid'];
	$password=md5($_POST['password']);
	$designation=$_POST['designation'];
	$contact=$_POST['contact'];
	$role=$_POST['role'];
	$query1="UPDATE login SET user_id='$userid',login_id='$loginid',designation='$designation',contact='$contact',active='1',role='$role',updatedon=CURRENT_DATE where user_id='$userid'";
	$query_run1=mysqli_query($con,$query1);
	if ($query_run1) {
		echo '<script type="text/javascript">alert("sucess")</script>';
		header('location:signupedit.php');
		
	}
}

?>