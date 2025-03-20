<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location:../Login/login.php");
}
include("../login/connection.php");                            // Use strict types

//require 'includes/functions.php';                         // Include functions

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT); // Validate id
if (!$id) {                                               // If no valid id
    include 'page-not-found.php';                         // Page not found
}

$sql = "SELECT a.title, a.summary, a.content, a.created, a.category_id, a.member_id, 
               c.name      AS category,
               CONCAT(m.forename, ' ', m.surname) AS author,
               i.file AS image_file,
               i.alt  AS image_alt 
          FROM article     AS a
          JOIN category    AS c  ON a.category_id = c.id
          JOIN member      AS m  ON a.member_id   = m.id
          LEFT JOIN image  AS i  ON a.image_id    = i.id
         WHERE a.id = $id  AND a.published = 1;";         // SQL statement

$result = mysqli_query($con, $sql);    // Get article data
$article = mysqli_fetch_assoc($result);
if (!$article) {                                          // If article not found
    include 'page-not-found.php';                         // Page not found
            }

$sql1 = "SELECT id, name FROM category WHERE navigation = 1;"; // SQL to get categories
$result1 = mysqli_query($con, $sql1); 
$navigation = mysqli_fetch_all($result1, MYSQLI_ASSOC);   // Get navigation categories
$section     = $article['category_id'];                   // Current category
$title       = $article['title'];                         // HTML <title> content
$description = $article['summary'];                       // Meta description content
?>

<?php include '../includes/header.php'; ?>
  <main class="article container" id="content">
    <section class="image">
      <img src="../uploads/<?= ($article['image_file'] ?? 'blank.png') ?>" 
           alt="<?= ($article['image_alt']) ?>">
    </section>
    <section class="text">
      <h1><?= ($article['title']) ?></h1>
      <div class="date"><?= $article['created']?></div>
      <div class="content"><?= ($article['content']) ?></div>
      <p class="credit">
        Posted in <a href="category.php?id=<?= $article['category_id'] ?>"><?= ($article['category']) ?></a> by <a href="member.php?id=<?= $article['member_id'] ?>">
          <?= ($article['author']) ?></a>
      </p>
    </section>
  </main>
<?php include '../includes/footer.php'; ?>