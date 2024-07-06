<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $mail=new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth=true;
    $mail->Username='ovsgproject@gmail.com';
    $mail->Password='vozifmqbfpbzunfu';
    $mail->SMTPSecure='ssl';
    $mail->Port=465;

    $mail->setFrom('ovsgproject@gmail.com');

    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);

    //$mail->Subject=$_POST["subject"];
    //$mail->Body=$_POST["message"];

    // Set the subject from the form or a default value
       $mail->Subject = "Recover your password";

    // Set the message body from the form or a default value
      $mail->Body ="<b>Dear User</b>
      <h3>We received a request to reset your password.</h3>
      <p>Kindly click the below link to reset your password</p>
      http://localhost/OVS_git/ovs/reset_password_cand.php
      <br><br>
      <p>With regrads,</p>
      <b>Programming with Lam</b>";

    $mail->send();
    echo
    "
    <script>
    alert('Link for reset your password is successfully sent.');
    document.location.href='home1.html';
    </script>
    ";

}

?>
