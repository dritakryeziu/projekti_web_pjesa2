<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

   $mailheader = "From:" .$name. "<" .$email .">\r\n";

   $recipient = "dritakrz1@gmail.com";

   mail($recipient. $subject. $message. $mailheader)
   or die ("Error!");

   echo"message send";
?>