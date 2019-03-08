<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = "allthatshinesats@gmail.com";
    $email_subject = "New form Submission";

    $to = "rasharasheedr99@gmail.com";
    $headers = "From: $email_from";

    mail($to,$email_subject,$message,$headers);



?>