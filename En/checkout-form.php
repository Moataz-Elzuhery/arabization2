<?php

if (isset($_POST['send'])) {
    $Fname = $_POST['first-N'];
    $Lname = $_POST['last-N'];
    $mailFrom = $_POST['E-mail'];
    $phone = $_POST['Phone'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $ZIP = $_POST['ZIP'];
    $message = $_POST['message'];

    $mailTo = "contact@GCT-trade.com";
    $subject = "Client Want To Trade";
    $headers = "Client e-mail: ".$mailFrom;
    $addressC = "Client Phone Number: ".$phone." From: ".$country." / ".$city." / ".$address." / ".$ZIP;
    $txt = "Client Name: ".$Fname." ".$Lname.".\n\n".$addressC.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: trade-send.html");
}

?>
