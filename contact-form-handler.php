<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'pelleranocv@gmail.com';
    $email_subject = "New Form Submission - Pellerano CV";
    $email_body = "Username: $name.\n".
                    "Email: $visitor_email.\n".
                        "Message: $message.\n";

    $to = "hpelleranodelgiudice@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body, $headers);

    header("Location: index.html");

?>