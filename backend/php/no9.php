<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['color'])) {
    $color = $_POST['color'];
    setcookie("fav_color", $color, time() + (7 * 24 * 60 * 60)); 
    $message = "Preference saved! Refresh to see it in action."; 
} 
$favoriteColor = isset($_COOKIE['fav_color']) ? $_COOKIE['fav_color'] : null; 
?> 
<!DOCTYPE html> 
<html> 
<head> 
    <title>User Preference with Cookies</title> 
</head> 
<body> 
<form method="post"> 
    <label>Select your favorite color:</label> 
    <select name="color"> 
        <option value="Red" <?php if ($favoriteColor == 'Red') echo 'selected'; ?>>Red</option> 
        <option value="Blue" <?php if ($favoriteColor == 'Blue') echo 'selected'; ?>>Blue</option> 
        <option value="Green" <?php if ($favoriteColor == 'Green') echo 'selected'; ?>>Green</option> 
    </select> 
    <button type="submit" name="submit">Save Preference</button> 
</form> 
<?php 
if (isset($message)) {     
    echo "<p>$message</p>"; 
} 
if ($favoriteColor) { 
    echo "<p>Your favorite color is: <strong>$favoriteColor</strong></p>"; 
} else { 
    echo "<p>No preference set yet.</p>"; 
} 
?> 
</body> 
</html>
