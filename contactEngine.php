<?php
/*
Template Name: Contact_Engine
*/
?>

<?php get_header( 'general' ); ?>

    <style>
        <?php include 'contact.css'; ?>
    </style>
<?php
$nameClient = $_POST['nameClient'];
$emailClient = $_POST['emailClient'];
$phoneClient = $_POST['phoneClient'];
$topicClient = $_POST['topicClient'];
$messageClient = $_POST['messageClient'];

$to = 'giorgio.mazzei@outlook.com';
$subject = 'Message from a potential client';
$msg = "Name: $nameClient\n" .
    "Email: $emailClient\n" .
    "Phone: $phoneClient\n" .
    "Subject: $topicClient\n" .
    "Message: $messageClient";





// Define that we are sending with SMTP
// $phpmailer->isSMTP();

// The hostname of the mail server
// $phpmailer->Host = "secure157.inmotionhosting.com";

// Use SMTP authentication (true|false)
//  $phpmailer->SMTPAuth = true;

// SMTP port number - likely to be 25, 465 or 587
//  $phpmailer->Port = "465";

// Username to use for SMTP authentication
// $phpmailer->Username = "info@ruiyun.uk";

// Password to use for SMTP authentication
//  $phpmailer->Password = "RuiGiorgio140627";

// Encryption system to use - ssl or tls
//$phpmailer->SMTPSecure = "tls";

//$phpmailer->From = "info@ruiyun.uk";
//$phpmailer->FromName = "RuiYun";









wp_mail( $to, $subject, $msg);

echo 'Thanks for submitting the form.<br />';
echo 'Your name is: ' . $nameClient . '<br />';
echo 'Your email is: ' . $emailClient . '<br />';
echo 'Your phone is: ' . $phoneClient . '<br />';
echo 'The subject of the message is: ' . $topicClient . '<br />';
echo 'The content of the message is: ' . $messageClient;
?>
<?php get_footer(); ?>