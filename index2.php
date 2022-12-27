<?php 
//connection File 
require_once('connection.php'); ?>

<?php 
//connection File 
require_once('includes/config.php'); ?>

<?php include 'head.php'; ?>
<link rel="stylesheet" href="style.css">
<style>

#keyword{
    border: #717476 1px solid; border-radius: 7px; padding: 10px;background:url("assets/images/search.png") no-repeat center right 7px;
}
.search_box{ 

text-align:right;margin:10px 0px;
 }
.pagination_btn{
    margin-right:9px;
    padding:8px 20px;
    color:#FEFEFE;
     border: #009900 1px solid; 
     background:#66ad44;
      border-radius:4px;
      cursor:pointer;

}
.pagination_btn:hover{background:#010000;}
.pagination_btn.current{background:#FC0527;}
</style>

<?php include 'header.php'; ?>


<div class="container">

<div class="row">

<div class="col-md-8">
 <?php   
    define("PER_PAGE_LIMIT",2); //Set blog posts limit
    $searching = '';
    if(!empty($_POST['search']['keyword'])) {
        $searching = $_POST['search']['keyword'];
    }
    /* PHP Blog Search*/
    $search_query = 'SELECT * FROM  techno_blog WHERE articleTitle LIKE :keyword OR articleDescrip LIKE :keyword OR articleTags LIKE :keyword OR articleContent LIKE :keyword ORDER BY articleId DESC ';
  
    /* PHP Blog Pagination*/
    $per_page_item = '';
    $page = 1;
    $start=0;
    if(!empty($_POST["page"])) {
        $page = $_POST["page"];
        $start=($page-1) * PER_PAGE_LIMIT;
    }
    $limit=" limit " . $start . "," . PER_PAGE_LIMIT;
    $pagination_stmt = $db->prepare($search_query);
    $pagination_stmt->bindValue(':keyword', '%' . $searching . '%', PDO::PARAM_STR);
    $pagination_stmt->execute();

    $row_count = $pagination_stmt->rowCount();
    if(!empty($row_count)){
        $per_page_item .= '<div style="text-align:center;margin:0px 0px;">';
        $page_count=ceil($row_count/PER_PAGE_LIMIT);
        if($page_count>1) {
            for($i=1;$i<=$page_count;$i++){
                if($i==$page){
                    $per_page_item .= '<input type="submit" name="page" value="' . $i . '" class="pagination_btn current">';
                } else {
                    $per_page_item .= '<input type="submit" name="page" value="' . $i . '" class="pagination_btn">';
                }
            }
        }
        $per_page_item .= "</div>";
    }
    $query = $search_query.$limit;
    $pdo_stmt = $db->prepare($query);
    $pdo_stmt->bindValue(':keyword', '%' . $searching . '%', PDO::PARAM_STR);
    $pdo_stmt->execute();
    $result = $pdo_stmt->fetchAll();
?>
 
 <!-- content search box -->
 
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

</div>
<?php include 'sidebar2.php'; ?>
</div>
</div>


<div class="row">
<h2> Latest Blogs </h2>
 
<?php

$sql="SELECT articleTitle, articleSlug, articleDescrip, articleDate, categorySlug FROM techno_blog b INNER JOIN techno_cat_links pc on pc.articleId=b.articleId INNER JOIN 
techno_category c on  c.categoryId=pc.categoryId";
$result=mysqli_query($conn, $sql);
if (mysqli_num_rows($result)>0) {
while($row=mysqli_fetch_assoc($result)) {

  ?>
 <div class="col"> 
 
 <p><a href="<?php echo $row['categorySlug'];?>/<?php echo $row['articleSlug']; ?>"><?php echo $row['articleTitle']; ?></a></p>
 <p><?php echo $row['articleTitle']; ?></p>
 <p><?php echo $row['articleDescrip']; ?></p>
 <p><?php echo $row['articleDate']; ?></p>
 
 </div>
  
  
  <?php

}
  
}
    
  ?>
  </div>

</div>
</div>


<?php //footer content 
include("footer.php");  ?> 