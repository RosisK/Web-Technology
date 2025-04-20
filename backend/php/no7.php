<?php 
$name = $email = $phone = $message = ''; 
$errors = []; 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $name = trim($_POST['name'] ?? '');     
    if (empty($name)) { 
        $errors['name'] = "Name is required"; 
    } 
    $email = trim($_POST['email'] ?? '');     
    if (empty($email)) { 
        $errors['email'] = "Email is required"; 
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
        $errors['email'] = "Invalid email format"; 
    } 
    $phone = trim($_POST['phone'] ?? ''); 
    if (!empty($phone) && !preg_match('/^(98|97)\d{8}$/', $phone)) { 
        $errors['phone'] = "Phone must start with 98 or 97 and be 10 digits"; 
    } 
    $message = trim($_POST['message'] ?? '');     
    if (empty($message)) { 
        $errors['message'] = "Message is required"; 
    } 
    if (empty($errors)) { 
        echo "<div style='color:green; margin-bottom:20px;'>";         
        echo "<h3>Form Submitted Successfully!</h3>";         
        echo "<p>Name: $name</p>";         
        echo "<p>Email: $email</p>"; 
        if (!empty($phone)) echo "<p>Phone: $phone</p>";         
        echo "<p>Message: $message</p>";         
        echo "</div>"; 
    } 
} 
?> 
<!DOCTYPE html> 
<html> 
<head> 
    <title>Contact Form</title> 
    <style> 
        .error { color: red; font-size: 0.9em; } 
        .form-group { margin-bottom: 15px; } 
    </style> 
</head> 
<body> 
    <h2>Contact Form</h2> 
    <form method="post"> 
        <div class="form-group"> 
            <label>Name:*</label><br> 
            <input type="text" name="name" value="<?= htmlspecialchars($name) ?>" required> 
            <?php if (isset($errors['name'])): ?> 
                <div class="error"><?= $errors['name'] ?></div> 
            <?php endif; ?> 
        </div> 
        <div class="form-group"> 
            <label>Email:*</label><br> 
            <input type="email" name="email" value="<?= htmlspecialchars($email) ?>" required> 
            <?php if (isset($errors['email'])): ?> 
                <div class="error"><?= $errors['email'] ?></div> 
            <?php endif; ?> 
        </div> 
        <div class="form-group"> 
            <label>Phone Number:</label><br> 
            <input type="tel" name="phone" value="<?= htmlspecialchars($phone) ?>" placeholder="98xxxxxxxx”  
            <?php if (isset($errors['phone'])): ?> 
                <div class="error"><?= $errors['phone'] ?></div> 
            <?php endif; ?> 
        </div> 
        <div class="form-group"> 
            <label>Message:*</label><br> 
            <textarea name="message" required><?= htmlspecialchars($message) ?></textarea> 
            <?php if (isset($errors['message'])): ?> 
                <div class="error"><?= $errors['message'] ?></div> 
            <?php endif; ?> 
        </div> 
        <input type="submit" value="Submit"> 
    </form> 
</body> 
</html>
