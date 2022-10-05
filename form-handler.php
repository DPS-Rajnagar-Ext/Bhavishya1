<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$query = $_POST['query'];

$email_from = 'dpsrnext@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name : $name.\n".
              "User Email : $visitor_email.\n".
              "Subject : $subject.\n".
              "Query : $query.\n";

$to = 'hackathan.dpsrne@gmail.com';

$headers = "From: $email_from \r\n";

$headers . = "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact us.html");
?>