<?php
  $email = $_REQUEST['email'] ;
  $message = $_REQUEST['message'] ;

  mail( "layjchan@gmail.com", "Feedback Form Results",
    $message, "From: $email" );
  echo "Thank you for using our mail form";
  header( "Location: http://www.example.com/thankyou.html" );
?>
