<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $from = 'From: TangledDemo';
  $to = 'kari.giberson@gmail.com';
  $subject = 'Hello from website';

  $body = "From: $name\n E-Mail: $email\n Message:\n $message";

  if ($_POST['submit'] && $human == '4') {
      if (mail ($to, $subject, $body, $from)) {
          echo '<p>Your message has been sent!</p>';
      } else {
          echo '<p>Something went wrong, check it over and try again!</p>';
      }
  } else if ($_POST['submit'] && $human != '4') {
        echo '<p>Your answered the anti-spam question incorrectly!</p>';
  }
?>