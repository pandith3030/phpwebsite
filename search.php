<form action="" method="post">
<div class="search_box"><input type="text" name="search[keyword]" value="<?php echo $searching; ?>" id="keyword" maxlength="30"></div>



    <?php
    if(!empty($result)) { 
        foreach($result as $row) {
    ?>
      
      <?php
                    //Blog Title 
                         echo '<h1>'.$row['articleTitle'].'</h1>';
                             echo '<hr>';
              //Blog post Date and Time 
                       echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($row['articleDate'])).' in ';
$stmt2 = $db->prepare('SELECT categoryName, categorySlug   FROM techno_category, techno_cat_links WHERE techno_category.categoryId = techno_cat_links.categoryId AND techno_cat_links.articleId = :articleId');
$stmt2->execute(array(':articleId' => $row['articleId']));
$catRow = $stmt2->fetchAll(PDO::FETCH_ASSOC);
$links = array();
foreach ($catRow as $cat){
     $links[] = "<a href='category/".$cat['categorySlug']."'>".$cat['categoryName']."</a>";
}
echo implode(", ", $links);
echo '</p>';
echo '<p>Tagged as: ';
    $links = array();
    $parts = explode(',', $row['articleTags']);
    foreach ($parts as $tags)
    {
        $links[] = "<a href='tag/".$tags."'>".$tags."</a>";
    }
    echo implode(", ", $links);
echo '</p>';
  echo '<hr>';
 echo '<p>'.$row['articleDescrip'].'</p>'; 
  echo '<p><button class="readbtn"><a href="'.$cat['categorySlug'].'/'.$row['articleSlug'].'">Read More</a></button></p>';                     
?>
 
    <?php
        }
    }
    else{ 
    echo "No results found for ". $searching;
    } 
    ?>
<table><tbody><tr></tr></tbody></table>
<?php echo $per_page_item; ?>
</form>