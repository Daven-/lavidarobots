<?php

$to = "davene1919@gmail.com";


if (!empty($_POST['name'])) {
    $name = $_POST['name'];
} else {
    $_POST['nameR'] = "Name needed";
}

if (!empty($_POST['subject'])) {
    $subject = $_POST['subject'];
} else {
    $_POST['subjectR'] = "Subject needed";
}

if (!empty($_POST['message'])) {
    $message = $_POST['message'];
} else {
    $_POST['messageR'] = "Message needed";
}


if (empty($_POST['email'])) {

    $_POST['emailR'] = "Email needed";
} else {
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_POST['emailR'] = "email not accepted";
        echo 'email not accepted.';
    } else {
        $subject = "Name: ".$name . " Subject:" . $subject;
        mail($to, $subject, $message);
        echo "<center><h1>Success Email Sent: Redirecting...</h1></center>";
    }
}






header("Refresh: 2; URL=../contact.html");
?>