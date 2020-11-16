<?php 
if(!isset($_POST['submit']))
{
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

if(empty($name)||empty($visitor_email)) {
	echo "Name und Email sind Pflichtfelder!";
	exit;
}

$email_from = "pperoni@stud.macromedia.de";
$email_subject = "Nachricht von fightforfuture";
$email_body = "Neue Nachricht von $name. von $visitor_email. \n".
				"$name schreibt folgendes: \n $message".
$to = "pperoni@stud.macromedia.de";
$headers = "From: $email_from \r\n";

mail($to,$email_subject,$email_body,$headers);
exit;

 ?>
