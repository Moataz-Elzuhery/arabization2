<?php

if (isset($_POST['submit'])) {
    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $mailFrom = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "contact@GCT-trade.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$Fname." ".$Lname.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: mailsend.html");
}

?>
