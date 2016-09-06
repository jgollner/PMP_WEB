<?php
	session_start();

	$p_email = "info@pittmeadows.net";  //ACTIVATE FOR LIVE SERVER
	//$p_email = "an_mew@yahoo.ca"; //TEST FOR LIVE SERVER
	
	$sitename = "www.pittmeadows.net";
	$date = date("m/d/Y H:i:s");
	
	$subject = "Pitt Meadows Plumbing Sub-trade Partnership Form";
	
	$body .= "A visitor at $sitename has filled in the Sub-trade Partnership Form.\n\n";
	$body .= "CONTACT INFORMATTION\n";
	$body .= "......................................\n\n";
	$body .= "Company Name: ".$_POST['company_name']."\n";
	$body .= "Company Phone ".$_POST['company_phone']."\n";
	$body .= "Company Email: ".$_POST['company_email']."\n\n";
	$body .= "Contact First Name: ".$_POST['first_name']."\n";
	$body .= "Contact Last Name: ".$_POST['last_name']."\n";
	$body .= "Contact Phone: ".$_POST['phone']."\n";
	$body .= "Contact Email: ".$_POST['email']."\n\n";
	$body .= "SUBTRADE CHEKCKLIST\n";
	$body .= "......................................\n\n";
	$body .= "Which sub-trades does your company identify with?\n ".implode(", ",$_POST['subtrade'])."\n\n";
	$body .= "What fixture brands do you supply?\n ".$_POST['fixture_brands']."\n\n";
	$body .= "What specific equipment do you supply?\n ".$_POST['equipment']."\n\n";
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
