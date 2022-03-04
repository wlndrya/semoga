<?php

   $to = 'pinkmylovely@gmail.com';
   $subject = 'Hello from XAMPP!';
   $message = 'This is a PapercutSMTP test';
   $headers = "From: Internship Management System Politeknik Negeri Batam\r\n";

   if (mail($to, $subject, $message, $headers)) {
      echo "SUCCESS";
   } else {
      echo "ERROR";
}