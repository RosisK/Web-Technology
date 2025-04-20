<?php
include "1_connection.php";
$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input data
    $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);

    // Check if data is valid
    if ($name && $email) {
        $sql = "UPDATE user SET name='$name', email='$email'";
        if (mysqli_query($conn, $sql)) {
            echo "Record updated successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Invalid data provided.";
    }

    mysqli_close($conn);
}
?>

<html>

<head>
    <title>Data edit</title>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="name" value="<?php echo $row["name"]; ?>">
        <input type="text" name="email" value="<?php echo $row["email"]; ?>">
        <input type="submit" value="Submit">
    </form>
</body>

</html>