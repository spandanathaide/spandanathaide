<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'admin@672480.xyz';

    $email_subject = "New Form Submission on Profile Website";

    $email_body = "Name: $name.\n".
                    "Email: $visitor_email.\n".
                        "Message: $message.\n";


    $to = "orbit@loonathedorm.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");


?>