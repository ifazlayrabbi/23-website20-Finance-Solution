<?php
    // receive posted data 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // send mail 
    $to = "ifazlayrabbi@gmail.com";
    $subject = "New Form Submission ";
    $msg = "Name = " . $name . "\r\n  Email = " . $email . "\r\n Message = " . $message;
    $from = "From: noreply@mail2.com";

    if ($email != NULL) {
      mail($to, $subject, $msg, $from);
    }
    // redirect
    header('Location: success.html');
?>