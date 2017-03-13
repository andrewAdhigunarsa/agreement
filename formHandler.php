<?php
if( empty($errors))

{
$myemail = 'humblebloom@gmail.com';

$to = $myemail;

$email_subject = "Contact form submission: $name";

$email_body = "You have received a new message. ".

" Here are the details:\n Name: $groomName \n ".

"Email: $groomEmail\n wedding date \n $weddingDate ceremonyLocation \n $ceremonyLocation";

$headers = "From: $myemail\n";

$headers .= "Reply-To: $groomEmail";

mail($to,$email_subject,$email_body,$headers);

//redirect to the 'thank you' page

header('Location: thankyou.php');

}


 ?>
