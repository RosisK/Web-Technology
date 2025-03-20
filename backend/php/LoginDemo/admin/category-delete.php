<?php
// Part A: Setup
session_start();
if(!isset($_SESSION["username"])){
    header("Location:../Login/login.php");
}
include("../Login/connection.php");        

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT); // Get and validate id

if (!$id) {                                               // If no valid id
    redirect('categories.php'); // Redirect with error
}

$sql = "SELECT name FROM category WHERE id = :id;";       // SQL to get category name
$category = pdo($pdo, $sql, [$id])->fetchColumn();        // Get category name
if (!$category) {                                         // If no category
    redirect('categories.php', ['failure' => 'Category not found']); // Redirect with error
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {               // If form was submitted
    try {                                                 // Try to delete data
        $sql = "DELETE FROM category WHERE id = :id;";    // SQL statement
        pdo($pdo, $sql, [$id]);                           // Run SQL
        redirect('categories.php', ['success' => 'Category deleted']); // Redirect
    } catch (PDOException $e) {                           // Catch exception
        if ($e->errorInfo[1] === 1451) {                  // If integrity constraint
            redirect('categories.php', ['failure' => 'Category contains articles that 
            must be moved or deleted before you can delete it']); // Redirect
        } else {                                          // Otherwise
            throw $e;                                     // Re-throw exception
        }
    }
}
?>
<?php include '../includes/admin-header.php'; ?>
  <main class="container admin" id="content">
    <form action="category-delete.php?id=<?= $id ?>" method="POST" class="narrow">
      <h1>Delete Category</h1>
      <p>Click confirm to delete the category: <em><?= html_escape($category) ?></em></p>
      <input type="submit" name="delete" value="Confirm" class="btn btn-primary">
      <a href="categories.php" class="btn btn-danger">Cancel</a>
    </form>
  </main>
<?php include '../includes/admin-footer.php'; ?>