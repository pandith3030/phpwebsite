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

<?php include 'includes/config.php'; ?>




<?php

if(isset($_GET['categorySlug']) && isset($_GET['articleSlug'])){ 


$categorySlug=$_GET['categorySlug'];
$articleSlug=$_GET['articleSlug'];

}

?>




<?php include 'head.php' ?>
<?php

            $sql= "SELECT articleTitle, articleImage, articleContent, articleSlug  FROM techno_blog, techno_category WHERE techno_category.categorySlug='$categorySlug' AND techno_blog.articleSlug='$articleSlug'";
            $result=mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0) {
            while($row=mysqli_fetch_assoc($result)) {
				?>
      

<title><?php echo $row['articleTitle'];?></title>
<meta name="description" content='<?php echo $row['articleDescrip']; ?>' >

<?php
			}}
?>

<?php include 'header.php'; ?>

  <br/>
  
<main id="main">

    <section class="single-post-content">
      <div class="container">
        <div class="row">
          <div class="col-md-9 post-content" data-aos="fade-up">

            <!-- ======= Single Post Content ======= -->
            <div class="single-post">
			<?php

            $sql= "SELECT articleTitle, articleImage, articleContent, articleSlug  FROM techno_blog, techno_category WHERE techno_category.categorySlug='$categorySlug' AND techno_blog.articleSlug='$articleSlug'";
            $result=mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0) {
            while($row=mysqli_fetch_assoc($result)) {
				?>
      
              <h1 class="mb-5"><?php echo $row['articleTitle'] ?></h1>
              <div class="my-4 featured-image">
                <img src="../<?php echo $row['articleImage'];?>" alt="" class="img-fluid">
              </div>
			  <div class="content">
			   <?php 
			   echo '<p>'.$row['articleContent'].'</p>';
			   ?>
			  </div>
			  
			  
			  <?php
			}}
			?>
			
            </div><!-- End Single Post Content -->

           <?php include 'comments.php'; ?>
		   <?php include 'sidebar1.php'; ?>

          

          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->

<?php include 'footer.php'; ?>