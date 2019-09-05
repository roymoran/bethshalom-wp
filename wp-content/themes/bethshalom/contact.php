<?php
 
if($_POST['submit']) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $recipient = "romoran1@outlook.com";
     
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $email . "\r\n";

    $txt = "You received an email with the following details: \nEmail:".$email."\nName: ".$name."\nWebsite".$website."\n\nMessage: ".$message;
     
    if(mail($recipient, $subject, $txt, $headers)) {
        echo "<p>Thank you for contacting us, $name. You will get a reply within 24 hours.</p>";
    } else {
        echo '<p>We are sorry but the email did not go through.</p>';
    }
     
} else {
    echo '<p>Something went wrong</p>';
}
?>
