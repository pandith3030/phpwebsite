






<?php include 'head.php'; ?>
<?php include 'header.php'; ?>

<?php include 'config.php'; ?>



<?php

$servername = "localhost";
$username = "root";
$password = "";
$database="technosmarter";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


?>

<main id="main">

    <section class="single-post-content">
      <div class="container">
        <div class="row">
          <div class="col-md-9 post-content" data-aos="fade-up">

            <!-- ======= Single Post Content ======= -->
            <div class="single-post">
			
			<?php 
$query="SELECT articleTitle, articleSlug, articleDescrip, articleDate, categoryName, categorySlug FROM techno_blog b INNER JOIN techno_cat_links pc on pc.articleId=b.articleId INNER JOIN 
techno_category c on  c.categoryId=pc.categoryId";
$stmt=$db->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll();
foreach($result as $row){
	
echo '<div class="post-entry-1 border-bottom">';
echo '<span class="author mb-3 d-block">'.$row['categoryName'].'</span>';
echo '<h1 style="font-size:18px;"><a href="http://localhost/blog/'.$row['categorySlug'].'/'.$row['articleSlug'].'">'.$row['articleTitle'].'</a></h1>';
echo '<span class="author mb-3 d-block">'.$row['articleDate'].'</span>';
echo '</div>';


}
?>
			
            </div><!-- End Single Post Content -->

           <?php include 'comments.php'; ?>
		   <?php include 'sidebar1.php'; ?>

          

          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->
  

<?php include 'footer1.php';?>

</body>
</html>