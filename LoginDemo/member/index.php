<?php 
session_start();
if(!isset($_SESSION["username"])){
  header("Location:../Login/login.php");
}
include("../login/connection.php");

$sql = "SELECT a.id, a.title, a.summary, a.category_id, a.member_id, 
               c.name AS category,
               CONCAT(m.forename, ' ', m.surname) AS author,
               i.file     AS image_file,
               i.alt      AS image_alt 
          FROM article    AS a
          JOIN category   AS c ON a.category_id = c.id
          JOIN member     AS m ON a.member_id   = m.id
          LEFT JOIN image AS i ON a.image_id    = i.id
          WHERE a.published = 1
          ORDER BY a.id DESC
       "; // SQL statement
    
          
          $sql1 = "SELECT id, name FROM category WHERE navigation = 1;"; // SQL to get categories
          $result1 = mysqli_query($con, $sql1);             // Get navigation categories
          $navigation = mysqli_fetch_all($result1, MYSQLI_ASSOC); // Fetch as associative array
          $section     = '';                                       // Current category
          $title       = 'Creative Folk';                          // HTML <title> content
          $description = 'A collective of creatives for hire';     // Meta description content
         
         $result = mysqli_query($con, $sql);
         if(mysqli_num_rows($result) > 0)
           {
?>
<?php include '../includes/header.php'; ?>
  <main class="container grid" id="content">
    <?php
              while($article = mysqli_fetch_assoc($result))
             {
    ?>
      <article class="summary">
        
        <a href="article.php?id=<?= $article['id'] ?>">
          <img src="../uploads/<?= $article['image_file'] ?>" alt="<?= $article['image_alt'] ?> >
        </a>
        <h2><a href="article.php?id=<?= $article['id'] ?>"><?= $article['title'] ?></a></h2>
        <p><?= $article['summary'] ?></p>
         <p class="credit">
          Posted in <a href="category.php?id=<?= $article['category_id'] ?>">
          <?= ($article['category']) ?></a>
          by <a href="member.php?id=<?= $article['member_id'] ?>">
          <?= ($article['author']) ?></a>
        </p>
      </article>
      <?php          
              }
            }
 ?>

    <?php include '../includes/footer.php'; ?>



