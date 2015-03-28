<?php

$to = "jhammy@lavidarobots.org";


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
        header("Refresh: 2; URL=../contact.html");

        echo '<center><h1>email not accepted.</h1></center>';
        
    } else {
        $message = $name . "   " . $message;
        mail($to, $subject, $message);
        header("Refresh: 2; URL=../contact.html");

        echo "<center><h1>Success Email Sent: Redirecting...</h1></center>";
    }
}
?>