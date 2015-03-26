<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$send = "daven1919@gmail.com";
mail($send,$subject,$message);

?>