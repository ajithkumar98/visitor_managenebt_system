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
$pass=$_GET['id2'];
echo $pass;
?> 

<?php
$query="SELECT * FROM visitor WHERE id='$pass'";
$query_run=mysqli_query($con,$query);
foreach($query_run as $info){
?>

<div class="container" style="background-color: white;text-align: center;width: 1400px"><h1 style="font-weight: bold">FORM</h1>



<form action="edit.php" method="post" style="text-align:center;padding:20px">
<table width="1220" align="center">
<tr> <td> <label>VISITOR'S NAME</label></td>
<td><input type="text" name="username" id="input" value="<?php echo $info['name']; ?>" placeholder="Your name" required></td><!-- <br><br> -->
<td><label>PHONE NUMBER</label></td>
<td><input type="number" name="contact" value="<?php echo $info['contact']; ?>" id="input" placeholder="Your phone number" required><br><br></td></tr>


<tr><td><label>D.O.B</label></td>
<td><input value="<?php echo $info['dob']; ?>" type="date" name="dob" id="input" placeholder="Your DOB" required></td>
<td><label>VISITOR'S EMAIL ID</label></td>
<td><input value="<?php echo $info['email']; ?>" type="text" name="email" id="input" placeholder="Your email ID" required><br><br></td></tr>

<input type="hidden" name="id2" value="<?php echo $pass; ?>">

<tr>
<td><label>TRANSPORT TYPE</label></td>
<td><input name="transport" type="text" id="input" value="<?php echo $info['transport']; ?>"  required></td>
<td><label>DATE</label></td>
<td><input value="<?php echo $info['date']; ?>" type="date"  name="date" id="input" placeholder="Date of visit" required><br><br></td></tr>

<tr>
<td align="center"><label>EXPECTED CHECK-IN TIME</label></td>
<td><input type="time" name="time" id="input" placeholder="Expected check-in-time" value="<?php echo $info['time']; ?>" required></td>
<td><label>DURATION OF VISIT</label></td>
<td><input type="text" value="<?php echo $info['duration']; ?>" name="duration" id="input" placeholder="Duration of visit in hours" required><br><br></td></tr>

<tr>
<td><label>PLACE FROM</label></td>
<td><input type="text" value="<?php echo $info['place']; ?>"  name="place" id="input" placeholder="Ex: Chennai,Madurai etc" required></td>
<td><label>IDENTITY PROOF TYPE</label></td>
<td><select id="input" name="idproof" required>
	<option>AADHAR CARD</option>
	<option>PASSPORT</option>
	<option>DRIVING LICENSE</option>
	<option>PAN CARD</option>

</select><br><br></td></tr>

<tr>
<td><label>IDENTITY NO</label></td>
<td><input type="text" value="<?php echo $info['idno']; ?>"  name="idno" id="input" placeholder="Aadhar or id proof number" required></td>
<td><label>VISITOR ASSET TYPE</label></td>
<td><select id="input" name="assettype">
	<option>LAPTOP</option>
	<option>I-PAD</option>
	<option>PROJECTOR</option>
</select><br><br></td></tr>

<tr>
<td><label>ASSET NUMBER</label></td>
<td><input type="text"  name="assetno" id="input" value="<?php echo $info['assetno']; ?>"></td>
<td><label>ARRANGEMENTS</label></td>
<td><input type="text"  name="arrangements" value="<?php echo $info['arrangements']; ?>" id="input" placeholder="Arrangements to be made my admin if any"><br><br></td></tr>

<tr><td><label>PURPOSE</label></td>
<td><input value="<?php echo $info['purpose']; ?>" type="text" name="purpose" id="input" required></td>

</tr>


</table><br>
<div style="font-weight: bold">By clicking the submit button you accept Terms and Conditons of IOPEX technolgies</div><br>
<input type="submit" name="submit6" value="Edit details" id="button">
<a href="homepage.php"><input type="button" id="button" value="Back">
</a>

</form>

<?php } ?>





</body>
</html>