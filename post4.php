<?php include 'includes/functions.php'; ?>
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

<?php
function base_url1()
{
  return dirname($_SERVER['SCRIPT_FILENAME']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ZenBlog Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href='<?php base_url1();?>assets/img/favicon.png' rel="icon">
  <link href='<?php base_url1();?>assets/img/apple-touch-icon.png' rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="http://localhost/blog/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href='<?php base_url1();?>assets/vendor/bootstrap-icons/bootstrap-icons.css' rel="stylesheet">
  <link href='<?php base_url1();?>assets/vendor/swiper/swiper-bundle.min.css' rel="stylesheet">
  <link href='<?php base_url1();?>assets/vendor/glightbox/css/glightbox.min.css' rel="stylesheet">
  <link href='<?php base_url1();?>assets/vendor/aos/aos.css' rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href='http://localhost/blog/assets/css/variables.css' rel="stylesheet">
  <link href='http://localhost/blog/assets/css/main.css' rel="stylesheet">

  <!-- =======================================================
  * Template Name: ZenBlog - v1.3.0
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>ZenBlog</h1>
      </a>

 <nav id="navbar" class="navbar">
        <ul>
          <li><a href="http://localhost/blog/index3.php">Home</a></li>
          <li><a href="http://localhost/blog/index3.php">News</a></li>
          <li class="dropdown"><a href="http://localhost/blog/services"><span>Services</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><?php
                  $stmt2 = $db->query('SELECT categoryName, categorySlug FROM techno_category ORDER BY categoryId DESC');
				  while($row2 = $stmt2->fetch()){
				 echo '<a style="font-size:20px;" href="http://localhost/blog/category/'.$row2['categorySlug'].'">'.$row2['categoryName'].'</a>';
			}
			?></li>
            </ul>
          </li>

          <li><a href="http://localhost/blog/about2.php">About</a></li>
          <li><a href="http://localhost/blog/contact2.php">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="position-relative">
        <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
        <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
        <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.html" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>

    </div>

  </header><!-- End Header -->

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

         

          

          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->
  
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

  

  <div class="footer-content">
      <div class="container">

          <div class="row justify-content-between">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            <div class="copyright">
              © Copyright <strong><span>Web Marketers Guide</span></strong>. All Rights Reserved
            </div>

            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
              Designed by <a href="https://webmarketersguide.com/">Web Marketers Guide</a>
            </div>

          </div>

          <div class="col-md-6">
            <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

        </div>

    </div>

  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="http://localhost/blog/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="http://localhost/blog/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="http://localhost/blog/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="http://localhost/blog/assets/vendor/aos/aos.js"></script>
  <script src="http://localhost/blog/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
 <script src="http://localhost/blog/assets/js/main.js"></script>

</body>

</html>