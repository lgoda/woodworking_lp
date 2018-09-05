<?php
$to = "luca.godano@gmail.com";
$subject = "Inquiry From User";
$txt = $_POST["message"];
$headers = "From: ".$_POST["email"];

mail($to,$subject,$txt,$headers);

header("Location: /contact.php?key=success");
?>
