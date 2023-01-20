<?php
	$name        	= $_POST['name'];
	$email        	= $_POST['email'];
	$phone        	= $_POST['phone'];
	$city        	= $_POST['city'];
	$message    	= $_POST['message'];


        $email_from = 'Email from Website';

        $email_subject = 'New Form Submission';
        $email_body = "Client Name: $name \n"."
         Email: $email, \n"."
         Cell: $phone, \n"."
         City: $city, \n"."
         message: $message.\n";

        $to = 'alpsinterior5003@gmail.com';
        $headers = "From :   $email_from \r\n";
        $headers = "Reply to :   $email \r\n";
        mail($to,$email_subject,$email_body,$headers);
        header("Location: contact.html");
	return;
?>