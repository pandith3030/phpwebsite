
 

<div class="sidebar">
    <h2>Quick Shorcut</h2>
  
        <a href="index.php">View Articles </a>
         <a href="add-blog-article.php">Add New Blog Post </a>

        <a href="blog-categories.php">View Categories </a>
           <a href="add-blog-category.php">Add New Category </a>
             <a href="blog-users.php">View Users </a>
             <a href="add-blog-page.php">Add New Page </a>
              <a href="blog-pages.php">View Pages </a>
               <a href="add-blog-user.php">Add New Users  </a>
                 <a target="_blank" href="../index3.php">Visit Blog </a>
  <?php 
  $sql = $db->query('select count(*) from techno_blog')->fetchColumn(); 
echo'<h2>Total Posted '.'<font color="red">'.$sql.'</font>'.'</h2>' ;
?>

</div>
 