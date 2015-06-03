<?php 
$email = $_POST["email"];
$text = "Thank you for your intrest in La`Zooz we will invite you into our slack channel and ask you to intreduce yourself"; 
echo "Email". $email;
echo "Message:" . $text;

#Email a notice of the transaction to yourself

$to = $email;

$subject = 'Thank you for your interest in joining La`Zooz';

$message = $text;

$headers = 'From: La`Zooz <info@lazooz.org>' . "\r\n";

mail($to, $subject, $message, $headers);
$toinfo = 'info@lazooz.org';

$subjectinfo = 'I would like to join La`Zooz';

$messageinfo = 'I would like to join La`Zooz';

$headersinfo = 'From: ' .$email. "\r\n";

mail($toinfo, $subjectinfo, $messageinfo, $headersinfo);

?>