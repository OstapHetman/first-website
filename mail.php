<?php

$recepient = "ostapukrainian@ukr.net";
$sitename = "MESSAGE FRO OSTAP HETMAN WEBSITE";

$name = trim($_POST["name"]);
$mail = trim($_POST["mail"]);
$subject = trim($_POST["subject"]);
$message = "Name: $name \nEmail: $mail \nSubject: $subject";

$pagetitle = "New feedback \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");