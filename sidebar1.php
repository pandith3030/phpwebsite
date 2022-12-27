




<div class="col-md-3 px-2">
            <!-- ======= Sidebar ======= -->
            <div class="aside-block">

              <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill" data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular" aria-selected="true">Popular</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-trending-tab" data-bs-toggle="pill" data-bs-target="#pills-trending" type="button" role="tab" aria-controls="pills-trending" aria-selected="false">Trending</button>
                </li>
                
              </ul>

              <div class="tab-content" id="pills-tabContent">

                <!-- Popular -->
                <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
				 <?php 
$query="SELECT articleTitle, articleSlug, articleDescrip, articleDate, categoryName, categorySlug FROM techno_blog b INNER JOIN techno_cat_links pc on pc.articleId=b.articleId INNER JOIN 
techno_category c on  c.categoryId=pc.categoryId";
$stmt=$db->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll();
foreach($result as $row){
	
echo '<div class="post-entry-1 border-bottom">';
echo '<span class="author mb-3 d-block">'.$row['categoryName'].'</span>';
echo '<h1 style="font-size:18px;"><a href="http://localhost/blog/'.$row['categorySlug'].'/'.$row['articleSlug'].'">'.$row['articleTitle'].'</a></h1>';
echo '<span class="author mb-3 d-block">'.$row['articleDate'].'</span>';
echo '</div>';


}
?>
                  

                  <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2 class="mb-2"><a href="#">17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</a></h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                  </div>

               
                </div> <!-- End Popular -->

                <!-- Trending -->
                <div class="tab-pane fade" id="pills-trending" role="tabpanel" aria-labelledby="pills-trending-tab">
                <div class="post-entry-1 border-bottom">
				   <?php
$sidebar = $db->query('SELECT pageTitle, pageSlug, pageKeywords FROM techno_pages ORDER BY pageId DESC LIMIT 4');
while($row = $sidebar->fetch()){
    echo '<h2><a style="font-size:20px;" href="http://localhost/blog/'.$row['pageSlug'].'" >'.$row['pageTitle'].' </a></h2><br/>';
	echo '<span class="author mb-3 d-block">'.$row['pageKeywords'].'</span>';
	
}
?>
</div>

                  

                  <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2 class="mb-2"><a href="#">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                  </div>
                </div> <!-- End Trending -->

                

              </div>
            </div>

            <div class="aside-block">
              <h3 class="aside-title">Video</h3>
              <div class="video-post">
                <a href="https://www.youtube.com/watch?v=AiFfDjmd0jU" class="glightbox link-video">
                  <span class="bi-play-fill"></span>
                  <img src="assets/img/post-landscape-5.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div><!-- End Video -->

            <div class="aside-block bg-error text-white">
              <h3 class="aside-title" style="color:black;">Categories</h3>
				<?php
$stmt = $db->query('SELECT categoryName, categorySlug FROM techno_category ORDER BY categoryId DESC');
while($row = $stmt->fetch()){
    echo '<button><a style="font-size:20px;" href="http://localhost/blog/category/'.$row['categorySlug'].'">'.$row['categoryName'].'</a></button>';
}
?>
			
            </div><!-- End Categories -->
                
              
              <!--tags-->
			   
             <div class="aside-block bg-error text-white">
              <h3 class="aside-title" style="color:black;">Tags</h3>
              
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
        echo "<button><a href='http://localhost/blog/tag/".$tag."'>".ucwords($tag)."</a></button>";
		
    }
    
    ?>
			  
               
            </div><!-- End Tags -->
			
			

