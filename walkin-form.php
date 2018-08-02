<?php 
require 'dbconfig/config.php';
require 'phpmailer/PHPMailerAutoload.php';
require 'head.php';
require 'query.php';
?>





<div class="container" style="background-color: white;text-align: center;box-shadow: 15px orange"><h1 style="font-weight: bold">FORM</h1>

	
<form action="walkin-form.php" method="post" style="text-align:center;padding-bottom: 20px"><table>
<tr> <td> <label>VISITOR'S NAME</label></td>
<td><input type="text" name="username" id="input" placeholder="Your name" required></td><!-- <br><br> -->
<td><label>PHONE NUMBER</label></td>
<td><input type="number" name="contact" id="input" placeholder="Your phone number" required><br><br></td></tr>


<tr><td><label>D.O.B</label></td>
<td><input type="date" name="dob" id="input" placeholder="Your DOB" required></td>
<td><label>VISITOR'S EMAIL ID</label></td>
<td><input type="text" name="email" id="input" placeholder="Your email ID" required><br><br></td></tr>


<tr><td><label>PURPOSE</label></td>
<td><input type="text" name="purpose" id="input" required></td>
<td><label>CONTACT PERSON</label></td>
<td><select name="person" id="input" required>
	<option>Select person</option>
	<?php
	$query="SELECT * FROM person";
	$query_run=mysqli_query($con,$query);
	foreach ($query_run as $info) {
	?>

	<option><?php echo $info['name'] ?> </option>
	<?php } ?>

</select><br><br></td></tr>


<tr>
<td><label>TRANSPORT TYPE</label></td>
<td><input type="text"  name="transport" id="input" placeholder="car/bike/anyother" required></td>
<td><label>DATE</label></td>
<td><input type="date"  name="date" id="input" placeholder="Date of visit" required><br><br></td></tr>

<tr>
<td align="center"><label>EXPECTED CHECK-IN TIME</label></td>
<td><input type="time"  name="time" id="input" placeholder="Expected check-in-time" required></td>
<td><label>DURATION OF VISIT</label></td>
<td><input type="number"  name="duration" id="input" placeholder="Duration of visit in hours" required><br><br></td></tr>

<tr>
<td><label>PLACE FROM</label></td>
<td><input type="text"  name="place" id="input" placeholder="Ex: Chennai,Madurai etc" required></td>
<td><label>IDENTITY PROOF TYPE</label></td>
<td><select id="input" name="idproof" required>
	<option>AADHAR CARD</option>
	<option>PASSPORT</option>
	<option>DRIVING LICENSE</option>
	<option>PAN CARD</option>

</select><br><br></td></tr>

<tr>
<td><label>IDENTITY NO</label></td>
<td><input type="text"  name="idno" id="input" placeholder="Aadhar or id proof number" required></td>
<td><label>VISITOR ASSET TYPE</label></td>
<td><select id="input" name="assettype">
	<option>LAPTOP</option>
	<option>I-PAD</option>
	<option>PROJECTOR</option>
</select><br><br></td></tr>

<tr>
<td><label>ASSET NUMBER</label></td>
<td><input type="text"  name="assetno" id="input"></td>
<td><label>ARRANGEMENTS</label></td>
<td><input type="text"  name="arrangements" id="input" placeholder="Arrangements to be made my admin if any"><br><br></td></tr>
<tr>
<td><label>VISITOR TYPE</label></td>
<td><select name="type" id="input">
	<option>Scheduled visitor</option>
	<option>Vendor</option>
</select><br><br></td><tr></table>
<div style="font-weight: bold">By clicking the submit button you accept Terms and Conditons of IOPEX technolgies</div><br>
<input type="submit" name="submit7" id="button">
<a href="indexvisitor.php"><input type="button" id="button" value="Back">
</a>
</table></form>




</div>	</div>

</body></html>

