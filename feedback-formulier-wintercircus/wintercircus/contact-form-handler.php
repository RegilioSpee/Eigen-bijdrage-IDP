<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'info@kevin-geurts.nl';

    $email_subject = "Feedback formulier | Wintercircus";

    $email_body = "Naam van verzender: $name.\n".
    "Email van verzender: $visitor_email\n".
    "Bericht van verzender: $message.\n";

    $to ="info@renewstudios.nl";

    $headers = "Van: $email_from \r\n";

    $headers .= "Antwoord naar: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);
    
    header("Location: index.html");

?>