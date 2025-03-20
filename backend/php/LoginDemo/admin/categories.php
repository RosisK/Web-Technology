<?php 
  session_start();
  if(!isset($_SESSION["username"])){
      header("Location:../Login/login.php");
  }
	include("../Login/connection.php");

  $sql = "SELECT id, name,description FROM category;";               // SQL to get all categories
  $result = mysqli_query($con, $sql);
?>
<?php include '../includes/admin-header.php'; ?>

<main class="container" id="content">
  <section class="header">
    <h1>Categories</h1>
    
    <p><a href="category.php" class="btn btn-primary">Add new category</a></p>
  </section>

  <table class="categories">
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Description</th>
      <th class="edit">Edit</th>
      <th class="del">Delete</th>
    </tr>

    <?php while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
      <tr>
        <td><strong><?= $row['id'] ?></strong></td>
        <td><strong><?= $row['name'] ?></strong></td>
        <td><strong><?= $row['description'] ?></strong></td>
        <td><a href="category.php?id=<?= $row['id'] ?>"
               class="btn btn-primary">Edit</a></td>
        <td><a href="category-delete.php?id=<?= $row['id'] ?>"
               class="btn btn-danger">Delete</a></td>
      </tr>
    <?php } ?>
  </table>
</main>
