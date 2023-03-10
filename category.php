<?php require('includes/config.php'); 

$stmt = $db->prepare('SELECT categoryId,categoryName FROM techno_category WHERE categorySlug = :categorySlug');
$stmt->execute(array(':categorySlug' => $_GET['id']));
$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['categoryId'] == ''){
    header('Location: ./');
    exit;
}


?>



<?php include 'header.php'; ?>

</head>

<body>

  <ul class="ulclass">
<li><a href="http://localhost/blog/">Home</a></li>
<li><a href="http://localhost/blog/about-us">About us</a></li>
<li><a href="http://localhost/blog/contact-us">Contact us</a></li>
<li><a href="http://localhost/blog/services">Services</a></li>
</ul>

  <br/>

  <main id="main">
    <section>
      <div class="container">
        <div class="row">

          <div class="col-md-9" data-aos="fade-up">
            <h3 class="category-title">Category: Business</h3>

            <div class="d-md-flex post-entry-2 half">
             
 

<p>Article Category:- <?php echo $row['categoryName'];?></p>
        <hr>
       

        <?php    
        try {

            $stmt = $db->prepare('
                SELECT 
                    techno_blog.articleId, techno_blog.articleTitle, techno_blog.articleSlug, techno_blog.articleDescrip, techno_blog.articleDate 
                FROM 
                    techno_blog,
                    techno_cat_links
                WHERE
                     techno_blog.articleId =  techno_cat_links.articleId
                     AND  techno_cat_links.categoryId = :categoryId
                ORDER BY 
                    articleId DESC
                ');
            $stmt->execute(array(':categoryId' => $row['categoryId']));
            while($row = $stmt->fetch()){
                
                echo '<div>';
                    echo '<h1><a href="../'.$row['articleSlug'].'">'.$row['articleTitle'].'</a></h1>';
                    echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($row['articleDate'])).' in ';

                        $stmt2 = $db->prepare('SELECT categoryName, categorySlug   FROM techno_category, techno_cat_links WHERE techno_category.categoryId = techno_cat_links.categoryId AND techno_cat_links.articleId = :articleId');
                        $stmt2->execute(array(':articleId' => $row['articleId']));

                        $catRow = $stmt2->fetchAll(PDO::FETCH_ASSOC);

                        $links = array();
                        foreach ($catRow as $cat)
                        {
                            $links[] = "<a href='".$cat['categorySlug']."'>".$cat['categoryName']."</a>";
                        }
                        echo implode(", ", $links);

                    echo '</p>';
                    echo '<p>'.$row['articleDescrip'].'</p>';                
                
                     echo '<p><button class="readbtn"><a href="../'.$row['articleSlug'].'">Read More</a></button></p>';   

                echo '</div>';

            }

        } catch(PDOException $e) {
            echo $e->getMessage();
        }

        ?>

              </div>
            </div>

            

            <div class="text-start py-4">
              <div class="custom-pagination">
                <a href="#" class="prev">Prevous</a>
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#" class="next">Next</a>
              </div>
            </div>
          </div>

<?php include 'comments.php'; ?>
		   <?php include 'sidebar1.php'; ?>

          

          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->

<?php include 'footer1.php'; ?>