<?php require('includes/config.php'); 

$stmt = $db->prepare('SELECT articleId,articleDescrip, articleSlug ,articleTitle, articleImage, articleContent, articleTags, articleDate  FROM techno_blog WHERE articleSlug = :articleSlug'); 

$stmt->execute(array(':articleSlug' => $_GET['id']));
$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['articleId'] == ''){
    header('Location: ./');
    exit;
}


?>


<?php include("head.php");  ?>

 <title><?php echo $row['articleTitle'];?>-Techno Smarter</title>
   <meta name="description" content="<?php echo $row['articleDescrip']; ?>" >    
  <meta name="keywords" content="<?php echo $row['articleTags'];?>">

<?php include("header.php");  ?>



<!-- article content display -->

<div class="container-fluid text-align-center bg-primary" style="width:100%">

<div class="row">
<div class="col-sm-6 bg-body shadow-lg p-2 content" style="width:70%">

<?php
            echo '<div>';
                echo '<h1 style="font-size:24px;color:darkred;" class="text-center">'.$row['articleTitle'].'</h1>';
				
				if ($row['articleImage'] !=''){
	            echo "<p><img src='".$row['articleImage']."' style='max-width:100%;'></p>";
                }

                echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($row['articleDate'])).' in category ';

                $stmt2 = $db->prepare('SELECT categoryName, categorySlug, articleId   FROM techno_category, techno_cat_links WHERE techno_category.categoryId = techno_cat_links.categoryId AND techno_cat_links.articleId = :articleId');
                $stmt2->execute(array(':articleId' => $row['articleId']));
                
                $catRow = $stmt2->fetchAll(PDO::FETCH_ASSOC);
                $links = array();
                foreach ($catRow as $cat){
                     $links[] = "<a href='category/".$cat['categorySlug']."'>".$cat['categoryName']."</a>";
                }
                echo implode(", ", $links);
                
                echo '</p>';
                  echo '<hr>';
                 
                  echo '<p>Tagged as: ';
                  $links = array();
                  $parts = explode(',', $row['articleTags']);
                  foreach ($parts as $tags)
                  {
                   $links[] = "<a href='".$tags."'>".$tags."</a>";
                  }
                  echo implode(", ", $links);
                  echo '</p>';
                  echo 'hr>';
                
                echo '<p>'.$row['articleContent'].'</p>';    

            echo '</div>';
        ?>
       
   </div>
   
   <div class="col-sm-6 bg-body shadow-lg p-2 content" style="width:30%">
   <?php //sidebar content 
include("sidebar.php");  ?>
</div>
</div>
     </div>

    <!--social share buttons -->
<?php 
$baseUrl="http://localhost/blog/"; 
$siteUrl="http://localhost/blog/";
?> 


<div class="container-fluid bg-body shadow-lg p-2 content">

     <p><strong>Share </strong></p>
              <ul>

                <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo $baseUrl.$slug; ?>"> <img src="assets/images/facebook.png" >
                
                <a target="_blank" href="http://twitter.com/share?text=Visit the link &url=<?php echo $baseUrl.$slug; ?>&hashtags=blog,technosmarter,programming,tutorials,codes,examples,language,development">
 <img src="assets/images/twitter.png" >
               
                <a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $baseUrl.$slug; ?>"> <img src="assets/images/linkedin.png" >
                
                 <a target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php echo $baseUrl.$slug; ?>">
 <img src="assets/images/pinterest.png" >
              </ul>

</div>
 <!--recommended posts -->
 
<div class="container-fluid">
<div class="row">
<div class="col-md-4 bg-body shadow-lg p-2 content">
              <h2> Recomended Posts:</h2>
<?php

// run query//select by current id and display the next 5 blog posts 

$recom= $db->query("SELECT * from techno_blog limit 5");

// look through query
       while($row1 = $recom->fetch()){
         echo '<h2 style="font-size:20px;"><a href="'.$row1['articleSlug'].'">'.$row1['articleTitle'].'</a></h2>';
         
}
?>
</div>




<!-- previous posts -->

<div class="col-md-4 bg-body shadow-lg p-2 content">
<h2> Previous Posts:</h2>
<?php

// run query//select by current id and display the previous 5 posts

$previous= $db->query("SELECT * from techno_blog limit 5");

// look through query
       while($row1 = $previous->fetch()){
         echo '<h2 style="font-size:20px;"><a href="'.$row1['articleSlug'].'">'.$row1['articleTitle'].'</a></h2>';

}


?>
</div>

<div class="col-md-4 bg-body shadow-lg p-2 content">

<h2>Recent Pages </h2>

<?php

$recentpages= $db->query("SELECT * from techno_pages limit 5");

while($row1 = $recentpages->fetch()){
  echo '<h2 style="font-size:20px;"><a href="http://localhost/blog/page/'.$row1['pageSlug'].'">'.$row1['pageTitle'].'</a></h2>';
}
?>

</div>
</div>
</div>

<div class="container-fluid mt-5">
<div class="row">
<?php include("footer.php");  ?> 
</div>
</div>



