<?php 
$name = $email = $message = ''; 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $name = htmlspecialchars($_POST['name'] ?? ''); 
    $email = htmlspecialchars($_POST['email'] ?? '');     
    $message = htmlspecialchars($_POST['message'] ?? '');     
    echo "<h2>Form Data Submitted:</h2>";     
    echo "<p><strong>Name:</strong> $name</p>";     
    echo "<p><strong>Email:</strong> $email</p>";     
    echo "<p><strong>Message:</strong> $message</p>";     
    echo "</div>"; 
} 
?> 
<!DOCTYPE html> 
<html> 
<head> 
    <title>Contact Form</title> 
</head> 
<body> 
    <div class="form-container"> 
        <h2>Contact Form</h2> 
        <form method="post"> 
            <label>Name:</label><br> 
            <input type="text" name="name" value="<?= $name ?>" required><br><br> 
            <label>Email:</label><br> 
            <input type="email" name="email" value="<?= $email ?>" required><br><br> 
            <label>Message:</label><br> 
            <textarea name="message" required><?= $message ?></textarea><br><br> 
            <input type="submit" value="Submit"> 
        </form> 
    </div> 
</body> 
</html>
