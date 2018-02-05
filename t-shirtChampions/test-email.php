<?php 
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "brandon@gochampion.net";
    $to = "brandon@gochampion.net";
    $subject = "Stay Out of Mike's Office Today";
    $message = "Yes, this is you and don't ask how I'm sending this. The less you know about the next 12 hours, the better. Just stay away from Mike's office from 4 p.m. to 8 p.m. and everything should be fine.";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "Test email sent";
?>