<?php

  error_reporting(E_ALL);
  ini_set("display_errors", "1");

  require 'PHPMailerAutoload.php';

  $name = $_POST["name"];
  $lastName = $_POST["lastName"];
  $age = $_POST["age"];
  $email = $_POST["email"];
  $telephone = $_POST["telephone"];

  $mail = new PHPMailer;

  //$mail->SMTPDebug = 3;                               // Enable verbose debug output

  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'user@example.com';                 // SMTP username
  $mail->Password = 'secret';                           // SMTP password
  $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 587;                                    // TCP port to connect to

  $mail->setFrom('from@example.com', 'Mailer');
  $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
  $mail->addAddress('ellen@example.com');               // Name is optional
  $mail->addReplyTo('info@example.com', 'Information');
  $mail->addCC('cc@example.com');
  $mail->addBCC('bcc@example.com');

  //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
  //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
  $mail->isHTML(true);                                  // Set email format to HTML

  $mail->Subject = 'Here is the subject';
  $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  if(!$mail->send()) {
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
      echo 'Message has been sent';
  }

  // //Create a new PHPMailer instance
  // $mail = new PHPMailer;
  // //Set who the message is to be sent from
  // $mail->setFrom('$email', 'First Last');
  // //Set an alternative reply-to address
  // //$mail->addReplyTo('replyto@example.com', 'First Last');
  // //Set who the message is to be sent to
  // $mail->addAddress('chabblet3@gmail.com', 'John Doe');
  // //Set the subject line
  // $mail->Subject = 'PHPMailer mail() test';
  // //Read an HTML message body from an external file, convert referenced images to embedded,
  // //convert HTML into a basic plain-text alternative body
  // $mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
  // //Replace the plain text body with one created manually
  // $mail->AltBody = 'This is a plain-text message body';
  // //Attach an image file
  // //$mail->addAttachment('images/phpmailer_mini.png');
  // //send the message, check for errors
  // if (!$mail->send()) {
  //     echo "Mailer Error: " . $mail->ErrorInfo;
  // } else {
  //     echo "Message sent!";
  // }
?>
