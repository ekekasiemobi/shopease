<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $receiver ="kasiemobijanfrancis@gmail.com";
    $subject = "Internship letter";
    $message = "<b>this is your employment letter</b>\r\n";
    $message .= "<h1>this is your employment letter</h1>";
    $header = "From: gatewaycomputers@gmail.com\r\n";
    $header .= "MIME-Version:1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    

   $test =  mail($receiver, $subject, $message, $header);
   if($test== true){
       echo 'message sent';
   }else{
       echo 'message not sent';
   };
    
    ?>
</body>
</html>