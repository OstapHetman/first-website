
<?php
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $from = 'From: OSTAP HETMAN WEBSITE'; 
    $to = 'ostapukrainian@ukr.netn.com'; 
   
			
   $body = "From: $name\n E-Mail: $email\n Subject: $subject\n Message:\n $message";
  ?>
