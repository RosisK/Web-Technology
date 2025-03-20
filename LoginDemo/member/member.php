<?php 
session_start();
if(!isset($_SESSION["username"])){
  header("Location:../Login/login.php");
}
include("../login/connection.php");

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);  // Validate id
if (!$id) {                                                // If no valid id
    include 'page-not-found.php';                          // Page not found
}

$sql = "SELECT forename, surname, joined, picture FROM member WHERE id = $id;"; // SQL
$result = mysqli_query($con, $sql);
$member = mysqli_fetch_assoc($result);
if (!$member) {                                            // If array is empty
    include 'page-not-found.php';                          // Page not found
}

$sql1 = "SELECT a.id, a.title, a.summary, a.category_id, a.member_id, 
               c.name     AS category,
               CONCAT(m.forename, ' ', m.surname) AS author,
               i.file     AS image_file,
               i.alt      AS image_alt 
          FROM article    AS a
          JOIN category   AS c   ON a.category_id = c.id
          JOIN member     AS m   ON a.member_id   = m.id
          LEFT JOIN image AS i   ON a.image_id    = i.id
         WHERE a.member_id = $id AND a.published  = 1
         ORDER BY a.id DESC;";                                 // SQL
$result1 = mysqli_query($con, $sql1);                       // Member's articles

$sql2 = "SELECT id, name FROM category WHERE navigation = 1;";  // SQL to get categories
$result2 = mysqli_query($con, $sql2); 
$navigation = mysqli_fetch_all($result2, MYSQLI_ASSOC);        // Get categories
$section     = '';                                             // Current category
$title       = $member['forename'] . ' ' . $member['surname']; // HTML <title> content
$description = $title . ' on Creative Folk';                   // Meta description
?>
<?php include '../includes/header.php'; ?>
  <main class="container" id="content">
    <section class="header">
      <h1><?= ($member['forename'] . ' ' . $member['surname']) ?></h1>
      <p class="member"><b>Member since:</b> <?= ($member['joined']) ?></p>
      <img src="../uploads/<?= ($member['picture'] ?? 'member.png') ?>"
           alt="<?= ($member['forename']) ?>" class="profile"><br>
    </section>
    <section class="grid">
    <?php while($article = mysqli_fetch_assoc($result1)) { ?>
      <article class="summary">
        <a href="article.php?id=<?= $article['id'] ?>">
          <img src="../uploads/<?= ($article['image_file'] ?? 'blank.png') ?>"
               alt="<?= ($article['image_alt']) ?>">
          <h2><?= ($article['title']) ?></h2>
          <p><?= ($article['summary']) ?></p>
        </a>
        <p class="credit">
          Posted in <a href="category.php?id=<?= $article['category_id'] ?>">
          <?= ($article['category']) ?></a>
          by <a href="member.php?id=<?= $article['member_id'] ?>">
          <?= ($article['author']) ?></a>
        </p>
      </article>
    <?php } ?>
    </section>
  </main>
<?php include '../includes/footer.php'; ?>