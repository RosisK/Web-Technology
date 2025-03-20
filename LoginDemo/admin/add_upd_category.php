<?php
// Part A: Setup
session_start();
if(!isset($_SESSION["username"])){
    header("Location:../Login/login.php");
}
include("../Login/connection.php");                            // Page title
// Initialize variables

$id = $_POST['id']; ; // Get id and validate
$name = $_POST['name'];            // Get name
$description = $_POST['description'];     // Get description

if(!$id){
    $sql = "INSERT INTO category (name, description) VALUES ('$name', '$description')";
    $con->query($sql);                              // Execute SQL  
    header("Location: categories.php");
}
    else{
    $sql = "UPDATE category SET name = '$name', description = '$description' WHERE id = $id";
    $con->query($sql);                              // Execute SQL      
    header("Location: categories.php");
 }
?>


