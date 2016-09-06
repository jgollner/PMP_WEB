<?php
	session_start();
	
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_POST['first_name'].'-'.$_POST['last_name']);
	$uid = time();

	if (isset($_FILES['upload_resume'])){
		$type = pathinfo($_FILES["upload_resume"]["name"],PATHINFO_EXTENSION);
		move_uploaded_file($_FILES["upload_resume"]["tmp_name"], $target_file.'-resume-'.$uid.'.'.$type);
		$resume = $target_file.'-resume-'.$uid.'.'.$type;
	}

	if (isset($_FILES['upload_cover'])){
		$type = pathinfo($_FILES["upload_cover"]["name"],PATHINFO_EXTENSION);
		move_uploaded_file($_FILES["upload_cover"]["tmp_name"], $target_file.'-cover-'.$uid.'.'.$type);
		$cover = $target_file.'-cover-'.$uid.'.'.$type;
	}

	$p_email = "reception@pittmeadows.net, nicole@pittmeadows.net";  //ACTIVATE FOR LIVE SERVER
	//$p_email = "an_mew@yahoo.ca"; //TEST FOR LIVE SERVER
	
	$sitename = "www.pittmeadows.net";
	$date = date("m/d/Y H:i:s");
	
	$subject = "Pitt Meadows Plumbing Online Employment Application Form";
	
	$body = "A visitor at $sitename has filled in the Online Employment Application Form.\n\n";
	$body .= "CONTACT INFORMATION\n";
	$body .= "......................................\n\n";
	$body .= "First Name: ".$_POST['first_name']."\n";
	$body .= "Last Name: ".$_POST['last_name']."\n";
	$body .= "Phone: ".$_POST['phone']."\n";
	$body .= "Email: ".$_POST['email']."\n\n";
	$body .= "Do you own a reliable vehicle? ".$_POST['vehicle']."\n";
	$body .= "Do you own plumbing and/or construction tools? ".$_POST['tools']."\n\n";
	$body .= "Resume: http://pittmeadows.net/pmp/".$resume."\n";
	$body .= "Cover Letter: http://pittmeadows.net/pmp/".$cover."\n\n";
	$body .= "EDUCATION\n";
	$body .= "......................................\n\n";
	$body .= "Secondary School Attended: ".$_POST['secondary_school']."\n";
	$body .= "Last Grade Completed: ".$_POST['grade_completed']."\n";
	$body .= "Graduation Date: ".$_POST['graduation_date']."\n\n";
	$body .= "Post Secondary Education:\n ".$_POST['postsecondary_education']."\n\n";
	$body .= "Construction Experience:\n ".$_POST['construction_experience']."\n\n";
	$body .= "Why would you make an ideal employee of Pitt Meadows Plumbing?\n ".$_POST['ideal_employee']."\n\n";
	$body .= "What activities are important to you outside of work?\n ".$_POST['activities']."\n\n";
	$body .= "Anything else you’d like us to know?\n ".$_POST['anything_else']."\n\n";
	$body .= "\n......................................\n\n";
	$body .= "Date/Time: $date";
	
	$body = sanitize ($body);

	$from = 'From: info@pittmeadows.net' . "\r\n".
	'Reply-To: ' .$_POST['Email'] . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
	$from = sanitize ($from);
	
	mail($p_email, $subject, $body, $from, '-finfo@pittmeadows.net');  //SEND MAIL

	header('Location: http://pittmeadows.net/pmp/thankyou');

	function sanitize($input) {
		$search = array(
			"#<script[^>]*?>.*?</script>#si",   // Strip out javascript
			"#<[\/\!]*?[^<>]*?>#si",            // Strip out HTML tags
			"#<style[^>]*?>.*?</style>#siU"    // Strip style tags
		);

		$output = preg_replace($search, '', $input);
		return $output;
	}	
?>
