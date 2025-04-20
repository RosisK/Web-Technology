<!DOCTYPE html> 
<html> 
<head> 
    <title>Button Click Example</title> 
</head> 
<body> 
<form method="post"> 
    <button type="submit" name="myButton">Click Me</button> 
</form> 
 
<?php 
if (isset($_POST['myButton'])) { 
echo "<p>Button was clicked!</p>";
echo"<p>Your name = Rosis Kharel</p>"; } 
?> 
</body> 
</html> 
