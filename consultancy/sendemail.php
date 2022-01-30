<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once '../phpmailer/Exception.php';
require_once '../phpmailer/PHPMailer.php';
require_once '../phpmailer/SMTP.php';

$mail = new PHPMailer(true);
$alert = '';

if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

try{
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'riteshpokarne123@gmail.com';
$mail->Password = 'sgnypkyqhqcdvaqq';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = '587';

$mail->setfrom('riteshpokarne123@gmail.com');
$mail->addAddress('riteshpokarne123@gmail.com');
$mail->isHTML(true);
$mail->Subject = 'Message Received (Contact Page)';
$mail->Body = "<h3>Name: $name <br>Email: $email <br>Phone: $phone <br>Message: $message</h3>";

$mail->send();
$alert = '<div class="alert-success">
             <span>Message Sent! Thank you for contacting us.</span>
           </div>';
} catch (Exception $e){
$alert = '<div class="alert-error">
              <span>'.$e->getMessage().'</span>
          </div>';
}
}

?>