<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'toughroots.co.nz/vendor/autoload.php';

// Only allow POST requests
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit("Method Not Allowed");
}

// Get and sanitize input
$name     = htmlspecialchars(trim($_POST["name"] ?? ""));
$phone    = htmlspecialchars(trim($_POST["phone"] ?? ""));
$email    = filter_var(trim($_POST["email"] ?? ""), FILTER_SANITIZE_EMAIL);
$location = htmlspecialchars(trim($_POST["location"] ?? ""));
$service  = htmlspecialchars(trim($_POST["service"] ?? ""));
$message  = htmlspecialchars(trim($_POST["message"] ?? ""));

// Basic validation
if (!$name || !$phone || !$email || !$service || !$message) {
    exit("Please fill in all required fields.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit("Invalid email address.");
}

// Email body
$body = "
New enquiry received:

Name: $name
Phone: $phone
Email: $email
Location: $location
Service Needed: $service

Message:
$message
";

$mail = new PHPMailer(true);

try {

    // SMTP settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;

    // YOUR GMAIL
    $mail->Username   = 'toughroots1@gmail.com';

    // YOUR GOOGLE APP PASSWORD
    $mail->Password   = 'siyf kkqb lszn rfvz';

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Sender
    $mail->setFrom('toughroots1@gmail.com', 'Tough Roots Website Enquiry');
    $mail->addReplyTo($email, $name);

    // Where the email gets sent
    $mail->addAddress('toughroots1@gmail.com');

    // Reply to customer
    $mail->addReplyTo($email, $name);

    // Email content
    $mail->isHTML(false);
    $mail->Subject = "New Contact Form Submission from $name";
    $mail->Body    = $body;

    // Send email
    $mail->send();

    // Redirect on success
    header("Location: toughroots.co.nz/inc/contact-form.php?sent=true");
    exit();

} catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
}

?>
