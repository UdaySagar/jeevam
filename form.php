<?php 


if ($_POST["email"]<>'') { 
$ToEmail = 'gujjaribhaskar11@gmail.com';
    $EmailSubject = 'Site contact form'; 
    $mailheader = "From: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    
    $MESSAGE_BODY = "*****from".$form_header."*****"."<br />";
    $MESSAGE_BODY .= "Hi, <br><br>I am : ".$_POST["name"]."(".$_POST["email"].")<br />";;
    $MESSAGE_BODY .= "My Comments/Questions : ".$_POST["comment"]."<br /><br />";
    $MESSAGE_BODY .= "Phone : ".$_POST["telephone"]."<br />";
    
    
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
header("Location: http://jeevam.co.in/contacts.html");
}
?>