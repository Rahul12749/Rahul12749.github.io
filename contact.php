<?php

	$form_data = [];

	$name        	= $_POST['name'];
	$email        	= $_POST['email'];
	$cell        	= $_POST['cell'];
	$city        	= $_POST['city'];
	$program    	= $_POST['program'];


        $email_from = 'Email from Website';

        $email_subject = 'New Form Submission';
        $email_body = "Client Name: $name \n Email: $email, \nCell: $cell, \nCity: $city, \nProgram: $program.";

        $to = 'alpsinterior5003@gmail.com';
        $headers = "From :   $email_from \r\n";

        $headers = "Reply to :   $email \r\n";
        mail($to,$email_subject,$email_body,$headers);
        header("Location: contact.html");
	return;
?>