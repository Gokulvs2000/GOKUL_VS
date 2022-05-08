<?php
if(isset($_POST['submiter']))
{
  $RECEIVING_MAIL = "vsgoku2000@gmail.com";
  $message = $_POST['message'];
  $name = $_POST['nameofperson'];
  $subject = $_POST['subject'];
  $email = $_POST['email'];
  $message = $message + "\r\n \r\n" + $name;
  mail($RECEIVING_MAIL,$subject,nl2br($message));
}
?>