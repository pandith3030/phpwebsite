


<?php

if(isset($_GET['categorySlug']) && isset($_GET['articleSlug'])){ 


$categorySlug=$_GET['categorySlug'];
$articleSlug=$_GET['articleSlug'];

}

?>


<?php require('config.php'); 
$stmt= $db->prepare('SELECT articleTitle, articleDescrip, articleContent, articleImage, articleSlug  FROM techno_blog, techno_category WHERE techno_category.categorySlug=:categorySlug AND techno_blog.articleSlug=:articleSlug');
//$stmt->execute(':categorySlug' => $_GET['categorySlug'], ':articleSlug'=> $_GET['articleSlug']);
$stmt->execute([':categorySlug'=>$categorySlug, ':articleSlug'=>$articleSlug]);


$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['categorySlug'] == ''){
    header('Location: ./');
    exit;
}

?>


<?php include("head.php");  ?>
<?php include("includes/functions.php");  ?>

  <title><?php echo $row['articleTitle'];?></title>
  <meta name="description" content="<?php echo $row['articleDescrip'];?>">    


  <?php include("header.php");  ?>
  
  
<div class="content">
<div class="container-fluid text-align-center bg-primary" style="width:100%">

<div class="row">
<div class="col-sm-6 bg-body shadow-lg p-2 content" style="width:70%">

<?php
            echo '<div>';
                echo '<h1 style="font-size:24px;color:darkred;" class="text-center">'.$row['pageTitle'].'</h1>';
				
				if ($row['articleImage'] !=''){
	            echo "<p><img src='".$row['articleImage']."' style='max-width:100%;'></p>";
                }
           echo '<p>'.$row['articleContent'].'</p>';
 ?>
</div>
</div>
</div>
</div>

<?php include("sidebar.php");  ?>

<?php include("footer.php");  ?>