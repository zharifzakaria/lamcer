<?php

## CONFIG ##

# LIST EMAIL ADDRESS
$recipient = "lamancerdik@yahoo.com";

# SUBJECT (Subscribe/Remove)
$subject = "Inquiry from lamancerdik.my";

# RESULT PAGE
$location = "../thank-you.html";

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
# SEE ALSO: How to protect a php Email Form using php mail or mb_send_mail against Mail Header Injection
$sender = "info@lamancerdik.my";

# MAIL BODY
$body .= "Name: ".$_REQUEST['Name']." \n";
$body .= "Email: ".$_REQUEST['Email']." \n";
$body .= "Inquiry: ".$_REQUEST['Inquiry']." \n";
# add more fields here if required

## SEND MESSGAE ##

mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");

## SHOW RESULT PAGE ##

header( "Location: $location" );
?>