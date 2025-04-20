<?php
include "1_connection.php";

$sql = "DELETE FROM user";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>