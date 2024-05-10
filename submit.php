<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "bashirmubarak08@gmail.com";
    $subject = "New Order Details";
    $message = "First Name: " . $_POST['fname'] . "\n"
             . "Last Name: " . $_POST['lname'] . "\n"
             . "Address: " . $_POST['address'] . "\n"
             . "City: " . $_POST['city'] . "\n"
             . "Quantity: " . $_POST['quantity'];
    $headers = "From: webmaster@example.com" . "\r\n" .
               "Reply-To: webmaster@example.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    mail($to, $subject, $message, $headers);
    echo "Thank you! Your order has been submitted.";
} else {
    echo "Error: Method not allowed.";
}
?>
