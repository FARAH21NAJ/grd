<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoloader
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Replace these values with your actual email subject and message
    $subject = "Pure Health";
    $message = "The appointment has been confirmed";

    // Retrieve user's email from the form
    $userEmail = $_POST["user_email"];

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = 0;  // Set to 2 for debugging
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'abfr.project.2002@gmail.com';
        $mail->Password = 'jizi rhpo prnx yelf';
        $mail->SMTPSecure = 'tls';  // Enable TLS encryption
        $mail->Port = 587;  // Adjust as needed

        // Recipient
        $mail->setFrom('abfr.project.2002@gmail.com', 'Confirmation');
        $mail->addAddress($userEmail);

        // Content
        $mail->isHTML(false);  // Set to true if using HTML content
        $mail->Subject = $subject;
        $mail->Body = $message;

        // Send email
        $mail->send();
        echo
        "
        <script>
        alert('Message Sent Successfully!');
        document.location.href='email-form.php';
        </script>
        ";
        
      //  echo "Email sent successfully!";
    } catch (Exception $e) {
        echo "Error sending email. Please try again later. Error: {$mail->ErrorInfo}";
    }
}
?>

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Form</title>
</head>
<body>
    <form method="post" action="send-email.php">
        <label for="user_email">Email:</label>
        <input type="email" id="user_email" name="user_email" required>

        <button type="submit">Send Email</button>
    </form>
</body>
</html>
-->


