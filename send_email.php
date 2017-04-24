<?php

$to="lucratechsolutions@gmail.com";  	
//email address the form data will be sent to

$re="web site message";
//subject to be sent in email

$fname=strip_tags($_POST['fname']);

$lname=strip_tags($_POST['lname']);

$email=strip_tags($_POST['email']);
//extract user email address from form
//strip out any html tags


$subject=strip_tags($_POST['subject']);
//extract comments from form
//strip out any html tags


$fullmessage="$fname,$lname,$email, $subject";

if(@mail('lucratechsolutions@gmail.com', 'website message', $fullmessage)){
//if email is successful, send success message:
		header("location:success.html");
		
}else{

//if email is unsuccessful, send failure message:	
	
		header("location:failure.php");
		
		
}





?>