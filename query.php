<!-- <a href="#" onclick="history.back(1);"><input type="button" id="button" value="Back"></a> -->


<!-- Action button for index.php -->
<?php

if (isset($_POST['submit1'])) {
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	$query="SELECT * FROM login WHERE login_id='$username' AND password='$password'";
	$query_run=mysqli_query($con,$query);
	if(mysqli_num_rows($query_run)>0){

		
		$query1="SELECT * FROM login where login_id='$username'";
        $query_run1=mysqli_query($con,$query1);
		$row=mysqli_fetch_row($query_run1);
		$_SESSION['username']=$username;
		$_SESSION['role']= $row[6];
		$_SESSION['name']=$row[0];
		header('location:homepage.php');
	}
}

?>

<!-- ******************************************* -->


<!-- Action button for homepage.php -->
<?php
	if (isset($_POST['logout'])) {
		session_destroy();
		header('location:index.php');
	}

?>

<!-- ******************************************* -->

<!-- Action button for form.php -->

<?php

if (isset($_POST['submit2'])) {
	
	$username=$_POST['username'];
	$contact=$_POST['contact'];
	 $dob=$_POST['dob'];
	 $email=$_POST['email'];
	 $purpose=$_POST['purpose'];
	 $person=$_POST['person'];
	 $transport=$_POST['transport'];
	 $date=$_POST['date'];
	 $place=$_POST['place'];
	 $idproof=$_POST['idproof'];
	 $idno=$_POST['idno'];
	 $assettype=$_POST['assettype'];
	 $assetno=$_POST['assetno'];
	 $time=$_POST['time'];
	 $type=$_POST['type'];
	 $duration=$_POST['duration'];
	 $arrangements=$_POST['arrangements'];
	 $scheduledby=$_SESSION['username'];

// to retrieve the emai-id of contact person

	  // $query2= "SELECT email FROM person WHERE name='$person' ";
	  // $toemail=mysqli_query($con,$query2);


// **************************************************

// mail trigger


// 	 function sendemail($to, $from, $fromName, $body) {
// 			$mail = new PHPMailer();
// 			$mail->setFrom($from, $fromName);
// 			$mail->addAddress($to);
// 			$mail->Subject = 'Visitor Details - Email';
// 			$mail->Body = $body;
// 			$mail->isHTML(false);

// 			return $mail->send();
// 		}

// $body=" Hi ".$person.",\n I am willing to visit you on" .$date. "So please do grant me permission \n Thanking You.";

	
		
// 		    if(sendemail('$toemail',$email,$username,$body)) {
				
// 				sendemail('securityemail@gmail.com',$email, $name, $body);
// 				sendemail('adminemail@gmail.com',$email, $name, $body);
// 			} else{
// 				echo "fail";
// 			}

// *********************************


	 $query="INSERT INTO visitor set name='$username',contact='$contact',dob='$dob',email='$email',purpose='$purpose',person='$person',transport='$transport',date='$date',place='$place',idproof='$idproof',idno='$idno',assettype='$assettype',assetno='$assetno',time='$time',type='$type',duration='$duration',arrangements='$arrangements',status='CONFIRMED',visit='NOT VISITED',scheduledby='$scheduledby',createdon=CURRENT_DATE,updatedon=CURRENT_DATE";
	$query_run=mysqli_query($con,$query);
	if ($query_run) {
		echo '<script type="text/javascript">alert("sucess")</script>';
		header( "refresh:1.5;url=form.php" );
	}
	else{
		echo '<script type="text/javascript">alert("fail")</script>';
	}

}

?>


<!-- ****************************************************** -->


<!-- Action queries for cancel.php -->
<?php
	if (isset($_POST['submit3'])) {
		$id=$_GET['id'];
		$reason=$_POST['reason'];		
		$query="UPDATE visitor SET status='CANCELED',reason='$reason' where id='$id'";
		$query_run=mysqli_query($con,$query);
		if($query_run){
			echo '<script type="text/javascript">alert("sucess")</script>';
			
		}
		else{
			echo '<script type="text/javascript">alert("fail")</script>';
		}
	}

?>

<!-- ********************************************** -->

<!-- Query action for checkin.php -->
<?php
		if(isset($_GET['submit4'])) {
			$id=$_GET['passid'];
			$checkin=$_GET['checkin'];
			$query="UPDATE visitor SET checkin='$checkin' where contact='$id' and date=CURRENT_DATE";
			$query_run=mysqli_query($con,$query);
			if ($query_run) {
				echo '<script type="text/javascript">alert("sucess")</script>';
				header('location:passprint.php?passid='.$id);
			}
			else{
								echo '<script type="text/javascript">alert("fail")</script>';

			}
		}

		?>

		<!-- ********************************* -->

<!-- Query for checkout.php -->

		<?php
		if(isset($_GET['submit5'])) {
			$checkout=$_GET['checkouts'];
			$id=$_GET['checkout'];
			$query="UPDATE visitor SET checkout='$checkout',visit='VISITED' where id='$id' AND date=CURRENT_DATE";
			$query_run=mysqli_query($con,$query);
			if ($query_run) {
				echo '<script type="text/javascript">alert("sucess")</script>';
				header('location:visitorpass.php');
			}
			else{
				echo '<script type="text/javascript">alert("fail")</script>';

			}
		}


		?>

<!-- 		************************* -->

<!-- Query action for edit.php -->


<?php
if (isset($_POST['submit6'])) {
	 $pass=$_POST['id2'];
	 $username=$_POST['username'];
	 $contact=$_POST['contact'];
	 $dob=$_POST['dob'];
	 $email=$_POST['email'];
	 $purpose=$_POST['purpose'];
	 $transport=$_POST['transport'];
	 $date=$_POST['date'];
	 $place=$_POST['place'];
	 $idproof=$_POST['idproof'];
	 $idno=$_POST['idno'];
	 $assettype=$_POST['assettype'];
	 $assetno=$_POST['assetno'];
	 $time=$_POST['time'];
	 $duration=$_POST['duration'];
	 $arrangements=$_POST['arrangements'];

	$query="UPDATE visitor SET name='$username',contact='$contact',dob='$dob',email='$email',purpose='$purpose',transport='$transport',date='$date',place='$place',idproof='$idproof',idno='$idno',assettype='$assettype',assetno='$assetno',time='$time',duration='$duration',arrangements='$arrangements' WHERE id='$pass'";
	$query_run=mysqli_query($con,$query);
	if ($query_run) {
		echo '<script type="text/javascript">alert("sucess")</script>';
		header( "refresh:1.5;url=scheduled-visitor.php" );
	}
	else{
		echo '<script type="text/javascript">alert("fail")</script>';
		
	}
}

?>


<!-- ****************************************** -->



<!-- Action queries for walkin-form.php -->
<?php

if (isset($_POST['submit7'])) {
	
	$username=$_POST['username'];
	$contact=$_POST['contact'];
	 $dob=$_POST['dob'];
	 $email=$_POST['email'];
	 $purpose=$_POST['purpose'];
	 $person=$_POST['person'];
	 $transport=$_POST['transport'];
	 $date=$_POST['date'];
	 $place=$_POST['place'];
	 $idproof=$_POST['idproof'];
	 $idno=$_POST['idno'];
	 $assettype=$_POST['assettype'];
	 $assetno=$_POST['assetno'];
	 $time=$_POST['time'];
	 $type=$_POST['type'];
	 $duration=$_POST['duration'];
	 $arrangements=$_POST['arrangements'];


	// to retrieve the emai-id of contact person

	  // $query2="SELECT email FROM person WHERE name='$person'";
	  // $toemail=mysqli_query($con,$query2);


// **************************************************

// mail trigger


// 	 function sendemail($to, $from, $fromName, $body) {
// 			$mail = new PHPMailer();
// 			$mail->setFrom($from, $fromName);
// 			$mail->addAddress($to);
// 			$mail->Subject = 'Visitor Details - Email';
// 			$mail->Body = $body;
// 			$mail->isHTML(false);

// 			return $mail->send();
// 		}

// $body=" Hi ".$person.",\n I am willing to visit you on ".$date.".So please do grant me permission \n Thanking You.";

	
		
// 		    if (sendemail('$toemail', $email, $username, $body)) {
				
// 				sendemail('securityemail@gmail.com',$email, $name, $body);
// 				sendemail('adminemail@gmail.com',$email, $name, $body);
// 			} else{
// 				echo "fail";
// 			}

// *********************************
	 

	 //date placefrom identityproof  visitorasset assettype assetnumber 


	// $query= "INSERT INTO fake VALUES (`$username`,'$contact')";
	 $query="INSERT INTO visitor set name='$username',contact='$contact',dob='$dob',email='$email',purpose='$purpose',person='$person',transport='$transport',date='$date',place='$place',idproof='$idproof',idno='$idno',assettype='$assettype',assetno='$assetno',time='$time',type='$type',duration='$duration',arrangements='$arrangements',status='CONFIRMED',visit='NOT VISITED',scheduledby='$scheduledby',createdon=CURRENT_DATE,updatedon=CURRENT_DATE";
	$query_run=mysqli_query($con,$query);
	if ($query_run) {
		echo '<script type="text/javascript">alert("sucess.You can use your id to get the visitor pass ")</script>';
		echo("<script>location.href = '".passprint.".php?passid=$contact';</script>");
		// echo("<script>location.href = '/passprint.php?passid='".$contact."';</script>");
		// header('location:passprint.php?passid='.$contact);
		
	}
	else{
		echo '<script type="text/javascript">alert("fail")</script>';
	}

}

?>

<!-- ***************************************** -->

<!-- action quer for signup.php -->
<?php
if (isset($_POST['submit8'])) {
	$userid=$_POST['userid'];
	$loginid=$_POST['loginid'];
	$password=md5($_POST['password']);
	$designation=$_POST['designation'];
	$contact=$_POST['contact'];
	$role=$_POST['role'];
	$query="INSERT INTO login SET user_id='$userid',login_id='$loginid',password='$password',designation='$designation',contact='$contact',active='1',role='$role',createdon=CURRENT_DATE,updatedon=CURRENT_DATE";
	$query_run=mysqli_query($con,$query);
	if ($query_run) {
		echo '<script type="text/javascript">alert("sucess")</script>';
	}
}

?>

<!-- ************************************ -->