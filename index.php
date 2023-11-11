<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate the data (you can add more validation as needed)
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all the fields.";
    } else {
        // You can customize the email message as per your needs
        $to = "your@example.com"; // Replace with your email address
        $subject = "New contact form submission from $name";
        $headers = "From: $email";

        mail($to, $subject, $message, $headers);

        // Display a "Thank You" message
        echo "Thank you for your message. We will get back to you shortly.";
    }
}
?>

<h1>Contact Us</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required><br><br>
    
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br><br>
    
    <label for="message">Message:</label>
    <textarea name="message" id="message" required></textarea><br><br>
    
    <input type="submit" value="Submit">
</form>

</body>
</html>
