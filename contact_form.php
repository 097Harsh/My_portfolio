<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['w3lName']);
    $email = htmlspecialchars($_POST['w3lSender']);
    $subject = htmlspecialchars($_POST['w3lSubject']);
    $website = htmlspecialchars($_POST['w3lWebsite']);
    $message = htmlspecialchars($_POST['w3lMessage']);

    // Recipient email
    $to = "harshshah6966@gmail.com";

    // Email subject
    $email_subject = "contact Form Submission: ".$subject;

    // Email content
    $email_body = "You have received a new message from your website contact form.\n\n".
                  "Here are the details:\n".
                  "Name: $name\n".
                  "Email: $email\n".
                  "Website: $website\n".
                  "Message:\n$message";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "<script>alert('Thank you for contacting us. We will get back to you shortly.');</script>";
    } else {
        echo "<script>alert('Sorry, there was an error sending your message. Please try again later.');</script>";
    }
}
?>
