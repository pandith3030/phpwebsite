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
<?php include 'includes/functions.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>WebmarketersGuide - Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

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

      <a href="index3.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Site</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index3.php">Home</a></li>
          <li><a href="#">News</a></li>
          <li class="dropdown"><a href="localhost/blog/services"><span>Services</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><?php
                  $stmt = $db->query('SELECT categoryName, categorySlug FROM techno_category ORDER BY categoryId DESC');
				  while($row = $stmt->fetch()){
				 echo '<a style="font-size:20px;" href="http://localhost/blog/category/'.$row['categorySlug'].'">'.$row['categoryName'].'</a>';
			}
			?></li>
            </ul>
          </li>

          <li><a href="about2.php">About</a></li>
          <li><a href="contact2.php">Contact</a></li>
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

    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
      <div class="container-md" data-aos="fade-in">
        <div class="row">
          <div class="col-12">
            <div class="swiper sliderFeaturedPosts">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('http://localhost/blog/uploads/temporary.png');">
                    <div class="img-bg-inner">
                      <h2>Types of Temporary Visas in Major Immigration Visas</h2>
                      <p>This article walks you through the types, countries & all that you can do with a temporary visas</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('http://localhost/blog/uploads/usa-study.png');">
                    <div class="img-bg-inner">
                      <h2>Student Visas 2022: The Complete Guide to Studying Abroad</h2>
                      <p>This article covers all the important points about Student Visas for studying abroad.</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('http://localhost/blog/uploads/Visit-2.png');">
                    <div class="img-bg-inner">
                      <h2>Visitor Visas: All You Need to Know</h2>
                      <p>The most popular and sought-after visitor visas and how to get them.</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('http://localhost/blog/uploads/MIgrate-Australia-3.jpg');">
                    <div class="img-bg-inner">
                      <h2>The Ultimate Guide For Immigration In 2022</h2>
                      <p>Get all the information you need to immigrate to Canada, Australia, and other countries in this detailed guide.</p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="custom-swiper-button-next">
                <span class="bi-chevron-right"></span>
              </div>
              <div class="custom-swiper-button-prev">
                <span class="bi-chevron-left"></span>
              </div>

              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Hero Slider Section -->

    <!-- ======= Post Grid Section ======= -->
   
      <div class="container">
        <div class="row">
		  
          
           

<?php 
$query="SELECT articleTitle, articleSlug, articleDescrip, articleImage, articleDate, categoryName, categorySlug FROM techno_blog b INNER JOIN techno_cat_links pc on pc.articleId=b.articleId INNER JOIN 
techno_category c on  c.categoryId=pc.categoryId";
$stmt=$db->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll();
foreach($result as $row){ 
	
echo '<div class="col-sm-4">';
echo '<span class="author mb-3 d-block">'.$row['categoryName'].'</span>';
echo '<h1 style="font-size:18px;"><a href="http://localhost/blog/'.$row['categorySlug'].'/'.$row['articleSlug'].'">'.$row['articleTitle'].'</a></h1>';
echo '<div><img class="img-fluid" width="250" height:"250" src="'.$row['articleImage'].'" ></div>';
echo '<span class="author mb-3 d-block">'.$row['articleDate'].'</span>';
echo '</div>';




}
?> 

</div>
              
            </div>

          </div>

          </div>
		  

  </main><!-- End #main -->

<?php include 'footer1.php'; ?>


</body>

</html>