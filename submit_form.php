<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $orderType = htmlspecialchars($_POST['orderType']);
    $message = htmlspecialchars($_POST['message']);

    // Prepare the email
    $to = "your_email@example.com"; // Replace with your email address
    $subject = "New Order Received";
    $body = "You have received a new order:\n\n" .
            "Name: $name\n" .
            "Email: $email\n" .
            "Phone: $phone\n" .
            "Order Type: $orderType\n" .
            "Additional Notes: $message\n";

    // Send the email
    if (mail($to, $subject, $body)) {
        echo "Order submitted successfully!";
    } else {
        echo "There was an error submitting your order. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
?>
