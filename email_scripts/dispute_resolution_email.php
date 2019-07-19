<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$mail = new PHPMailer(true);
$mail->IsSMTP();
$mail->SMTPDebug = 2;
$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = "ssl";
$mail->Port = 465;
$mail->CharSet = "UTF-8";

// optional
// used only when SMTP requires authentication  
$mail->SMTPAuth = true;
$mail->Username = 'vasu@gsholdingsllc.com';
$mail->Password = 'colts101';

/* Add a recipient. */

try {
  //$mail->setFrom("vasunep0306@gmail.com", 'Test');
  $mail->addAddress('vasu@gsholdingsllc.com', 'Emperor');
  /* Set the subject. */
  $mail->Subject = 'Force';

  /* Set the mail message body. */
  $mail->Body = 'There is a great disturbance in the Force.';

  /* Finally send the mail. */
  $mail->send();
} catch (Exception $e) {
   /* PHPMailer exception. */
   echo $e->errorMessage();
}
catch (\Exception $e) {
   /* PHP exception (note the backslash to select the global namespace Exception class). */
   echo $e->getMessage();
}


?>