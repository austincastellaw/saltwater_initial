<?php 
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $message = $_POST['message'];
    $mailFrom = $_POST['email'];

    $mailTo = "acinindo@hushmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "you have recieved an email from" .$name.".\n\n" .$message; 

    mail($mailTo, $txt, $headers);
    header("Location: index.html?mailsend")
}
?>
