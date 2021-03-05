<?php
$to = 'knowhow2021@gmail.com';
$subject = $_POST['subject'];
$message = $_POST['message']; 
$message.="  " ;
$message.=$_POST['name'];

$from = $_POST['email'];
 
// Sending email
if(mail($to, $subject, $message)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>