<?php
// Part A: Setup
session_start();
if(!isset($_SESSION["username"])){
    header("Location:../Login/login.php");
}
include("../Login/connection.php");                            // Page title

// Initialize variables

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT); // Get id and validate

if(!$id){
    $name = "";
    $description = "";
    $title="Add Category";
    $button = "Add Category";

}else{
    $sql = "SELECT * FROM category WHERE id = $id";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $description = $row['description'];
    $title="Update Category";
    $button = "Update Category";
    
}
?>

<?php include '../includes/admin-header.php'; ?>
  
<main class="container admin" id="content">
    <form name="catForm" class="narrow">
<h2><?= $title; ?></h2>
      <input type="hidden" name="id" value="<?= $id; ?>">
    <div class="form-group">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name"
               value="<?= $name; ?>" class="form-control">
      </div>

      <div class="form-group">
        <label for="description">Description: </label>
        <textarea name="description" id="description"  class="form-control">
            <?= $description; ?></textarea>
      </div>

      <input type="button" value="<?= $button ?>" class="btn btn-primary btn-save" onclick="subCatForm()">
    </form>
  </main>
<?php include '../includes/admin-footer.php'; ?>

<script>
    function subCatForm(){
        document.catForm.method = "post";
        document.catForm.action = "add_upd_category.php?id=<?= $id; ?>";
        document.catForm.submit();
    }
</script>

