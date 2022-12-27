<?php require('config.php'); 

$stmt = $db->prepare('SELECT pageId,pageTitle,pageSlug, pageContent, pageDescrip, pageKeywords, pageImage FROM techno_pages WHERE pageSlug = :pageSlug');
$stmt->execute(array(':pageSlug' => $_GET['pageId']));
$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['pageId'] == ''){
    header('Location: ./');
    exit;
}


?>

<?php include("head.php");  ?>
<?php include("includes/functions.php");  ?>

  <title><?php echo $row['pageTitle'];?></title>
  <meta name="description" content="<?php echo $row['pageDescrip'];?>">    
<meta name="keywords" content="<?php echo $row['pageKeywords'];?>">

  <?php include("header.php");  ?>
  
  
<div class="content">
<div class="container-fluid text-align-center bg-primary" style="width:100%">

<div class="row">
<div class="col-sm-6 bg-body shadow-lg p-2 content" style="width:70%">

<?php
            echo '<div>';
                echo '<h1 style="font-size:24px;color:darkred;" class="text-center">'.$row['pageTitle'].'</h1>';
				
				if ($row['pageImage'] !=''){
	            echo "<p><img src='".$row['pageImage']."' style='max-width:100%;'></p>";
                }
				
           echo '<p>'.$row['pageContent'].'</p>';
 ?>
</div>
</div>
</div>
</div>

<?php include("sidebar.php");  ?>

<?php include("footer.php");  ?>
 