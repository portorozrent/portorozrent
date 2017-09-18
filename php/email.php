<?php

    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $message = $_POST['message'];

    $to      = "adriaplast@adriaplast.si";
    $subject = "$name has write:";
    $message = "$message";
    $headers = "From: $email";

    if( mail($to,$subject,$message,$headers) )
    {
        echo "<h6>Thank you for your comment</h6>";
    }
    else
    {
        echo "<h6>Sorry, there has been an error</h6>";
    }

?>
