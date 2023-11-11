<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
    <h1>Contact Us</h1>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // You can add code here to save or process the form data if needed

        // Display the "Thank You" page
        echo "<h2>Thank You, $name!</h2>";
        echo "<p>Thank you for contacting us. We will get back to you shortly.</p>";
    } else {
    ?>
    
    <form method="POST" action="contact_form.php">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="message">Message:</label>
        <textarea name="message" rows="4" required></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
    
    <?php } ?>
</body>
</html>
