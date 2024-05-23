<?php

if (isset($_POST['email']) && $_POST['email'] != '') {

	
	$to  = 'mreddy.cm@gmail.com';
	
	// subject
	$subject = 'Online Enquiry';
	
	// message
	$message = '
	<p>Hi,</p>
	<p>You got an enquiry from www.magnarus.com website. Here is the details:</p>
	  <p><b>Name:</b> '.$_POST['name'].'</p>
	  <p><b>Email:</b> '.$_POST['email'].'</p>
	  <p><b>Phone:</b> '.$_POST['phone'].'</p>
	  <p><b>Message:</b> '.$_POST['message'].'</p>
	<p>Thankyou <br/> www.magnarus.com</p>
	';
	
	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	
	// Additional headers
	//$headers .= 'To: Vijay <rainbowalways@gmail.com>' . "\r\n";
	$headers .= 'From: www.magnarus.com <support@magnarus.com>' . "\r\n";
	$headers .= 'Cc: mreddy.cm@gmail.com' . "\r\n";
	
	// Mail it
	mail($to, $subject, $message, $headers);
	
	//echo json_encode(array("success" => true));
	header('Location:http://www.magnarus.com/');
}else{
	echo json_encode(array("success" => false));
}
?>