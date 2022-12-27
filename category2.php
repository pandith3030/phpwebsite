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


<?php

if(isset($_GET['categorySlug']) && isset($_GET['articleSlug'])){ 


$categorySlug=$_GET['categorySlug'];
$articleSlug=$_GET['articleSlug'];

}

?>


<?php include 'head.php'; ?>
<link rel="stylesheet" href="style.css">
<title><?php echo $row['categoryName'];?>-Web Marketers Guide</title>
<?php include 'header.php'; ?>

  <br/>
  

      <div class="container">
       
         
         
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
                
                echo '<div class="col card">';
				echo '<div class="col card-body bg-light">';
                    echo '<h3>'.$row['articleTitle'].'</h3>';
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
                
                     echo '<p><button class="readbtn" style="background-color:lightgreen;"><a style="text-decoration:none;color:white;" href="http://localhost/blog/'.$cat['categorySlug'].'/'.$row['articleSlug'].'">Read More</a></button></p>';   

                echo '</div>';
				echo '</div>';
				echo '<br/>';

            }

        } catch(PDOException $e) {
            echo $e->getMessage();
        }

        ?>

           <?php include 'comments.php'; ?>
		  

          

          </div>
        </div>
      
  
 

<?php include 'footer1.php'; ?>