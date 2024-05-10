<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the post data from the form
    $firstName = htmlspecialchars($_POST['fname']);
    $lastName = htmlspecialchars($_POST['lname']);
    $address = htmlspecialchars($_POST['address']);
    $address2 = htmlspecialchars($_POST['address2']);
    $city = htmlspecialchars($_POST['city']);
    $state = htmlspecialchars($_POST['state']);
    $postcode = htmlspecialchars($_POST['postcode']);
    $country = htmlspecialchars($_POST['country']);

    // Create the email content
    $email_content = "First Name: $firstName\n";
    $email_content .= "Last Name: $lastName\n";
    $email_content .= "Address: $address\n";
    $email_content .= "Address 2: $address2\n";
    $email_content .= "City: $city\n";
    $email_content .= "State: $state\n";
    $email_content .= "Postcode: $postcode\n";
    $email_content .= "Country: $country\n";

    // Specify where to send the email
    $to = 'bashirmubarak08@gmail.com';
    $subject = 'New Order Details';
    $headers = "From: webmaster@example.com\r\n";
    $headers .= "Reply-To: webmaster@example.com\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Send the email
    mail($to, $subject, $email_content, $headers);

    // Redirect to a new page or back to the form page with a query string
    header('Location: thank_you.html');
    exit;
}
?>
