<div class="sidebar">
	<h2>Recent Articles</h2>
    <?php
$sidebar = $db->query('SELECT articleTitle, articleSlug FROM techno_blog ORDER BY articleId DESC LIMIT 6');
while($row = $sidebar->fetch()){
    echo ' <a style="font-size:20px;" href="http://localhost/blog/'.$row['articleSlug'].'" >'.$row['articleTitle'].' </a></br>';
}
?>

<h2>Recent Pages</h2>
    <?php
$sidebar = $db->query('SELECT pageTitle, pageSlug FROM techno_pages ORDER BY pageId DESC LIMIT 6');
while($row = $sidebar->fetch()){
    echo ' <a style="font-size:20px;" href="http://localhost/blog/'.$row['pageSlug'].'" >'.$row['pageTitle'].' </a ><br/>';
}
?>
 

<h2>Categories</h2>

<?php
$stmt = $db->query('SELECT categoryName, categorySlug FROM techno_category ORDER BY categoryId DESC');
while($row = $stmt->fetch()){
    echo '<a  style="font-size:20px;" href="http://localhost/blog/category/'.$row['categorySlug'].'">'.$row['categoryName'].'</a><br/>';
}
?>

<h2>Tags </h2>
<?php
    $tagsArray = [];
    $stmt = $db->query('select distinct LOWER(articleTags) as articleTags from techno_blog where articleTags != "" group by articleTags');
    while($row = $stmt->fetch()){
        $parts = explode(',', $row['articleTags']);
        foreach ($parts as $tag) {
            $tagsArray[] = $tag;
        }
    }

    $finalTags = array_unique($tagsArray);
    foreach ($finalTags as $tag) {
        echo "<a href='http://localhost/blog/tag/".$tag."'>".ucwords($tag)."</a>";
    }
    
    ?>
 


</div>
 