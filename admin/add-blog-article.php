<?php

	
				require_once 'connection.php';
				
				session_start();

				if(!isset($_SESSION['user_login']))	//check unauthorize user not access in "welcome.php" page
				{
					header("Location:login.php");
				}

 ?>
 
<?php 
			
			

require_once('config.php');
				
		


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//logout.php  

?>

<?php require_once('../includes/functions.php'); ?>


<?php include("head.php");  ?>

<style>
img {
  max-width: 180px;
  display: none;
}

input[type=file] {
  padding: 10px;
  background:green;
  color: #FFF;
  display: block;
  margin-bottom: 20px;
}

</style>



<!-- On page head area--> 
  <title>Add New Article - Web Marketers Guide Blog</title>
  <link rel="stylesheet" href="C:\xampp\htdocs\blog\admin\style.css">
  <!-- jQuery for image preview -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://<hostname.tld>/tinymce.min.js" referrerpolicy="origin"></script>
 <script src="https://cdn.tiny.cloud/1/ltm8mk7kcwz8szx4u5uib6yq8v3ovneiu3gbf9luwrsmyvcu/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<!-- script to handle image upload -->
  
  <script>
  
  const image_upload_handler_callback = (blobInfo, progress) => new Promise((resolve, reject) => {
    const xhr = new XMLHttpRequest();
    xhr.withCredentials = false;
    xhr.open('POST', 'upload.php');
    
    xhr.upload.onprogress = (e) => {
        progress(e.loaded / e.total * 100);
    };
    
    xhr.onload = () => {
        if (xhr.status === 403) {
            reject({ message: 'HTTP Error: ' + xhr.status, remove: true });
            return;
        }
      
        if (xhr.status < 200 || xhr.status >= 300) {
            reject('HTTP Error: ' + xhr.status);
            return;
        }
      
        const json = JSON.parse(xhr.responseText);
      
        if (!json || typeof json.location != 'string') {
            reject('Invalid JSON: ' + xhr.responseText);
            return;
        }
      
        resolve(json.location);
    };
    
    xhr.onerror = () => {
      reject('Image upload failed due to a XHR Transport error. Code: ' + xhr.status);
    };
    
    const formData = new FormData();
    formData.append('file', blobInfo.blob(), blobInfo.filename());
    
    xhr.send(formData);
});

  
  </script>
  
  <script>
    tinymce.init({
      selector: '#textarea1',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
      // without images_upload_url set, Upload tab won't show up
    images_upload_url: 'upload.php',
    
    // override default upload handler to simulate successful upload
    images_upload_handler: image_upload_handler_callback
	
   });
  </script>

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-46100971-1', 'auto');
ga('send', 'pageview');
</script>

  <?php include("header.php"); 

   ?>

<div class="content">
 
    <h1>Add New Article</h1>

    <?php

    //if form has been submitted process it
    if(isset($_POST['submit'])){

       // location where initial upload will be moved to
		$target = "uploads/" . $_FILES['articleImage']['name'];
		$path = '../'.$target;
		
        //collect form data
        extract($_POST);
	
		
        //very basic validations
        if($articleTitle ==''){
            $error[] = 'Please enter the title.';
        }
		
		
		if($articleSlug ==''){
            $error[] = 'Please enter the Slug title.';
        }

        if($articleDescrip ==''){
            $error[] = 'Please enter the description.';
        }
		
		 
        if($articleContent ==''){
            $error[] = 'Please enter the content.';
        }

        if(isset($_FILES['articleImage'])){

			// find thevtype of image
			switch ($_FILES["articleImage"]["type"]) {
			case $_FILES["articleImage"]["type"] == "image/gif":
			    move_uploaded_file($_FILES["articleImage"]["tmp_name"], $path);
			    break;
			case $_FILES["articleImage"]["type"] == "image/jpeg":
			       move_uploaded_file($_FILES["articleImage"]["tmp_name"], $path);
			    break;
			case $_FILES["articleImage"]["type"] == "image/pjpeg":
			       move_uploaded_file($_FILES["articleImage"]["tmp_name"], $path);
			    break;
			case $_FILES["articleImage"]["type"] == "image/png":
			    move_uploaded_file($_FILES["articleImage"]["tmp_name"], $path);
			    break;
			case $_FILES["articleImage"]["type"] == "image/x-png":
			    move_uploaded_file($_FILES["articleImage"]["tmp_name"], $path);
			    break;

			default:
			    $error[] = 'Wrong image type selected. Only JPG, PNG or GIF accepted!.';
			}

		}
	

 if(!isset($error)){

          try {



    //insert into database
    $articleSlug = slug($articleSlug);


    $stmt = $db->prepare('INSERT INTO techno_blog (articleTitle,articleSlug,articleDescrip,articleContent,articleDate,articleTags) VALUES (:articleTitle, :articleSlug, :articleDescrip, :articleContent, :articleDate, :articleTags)');
  
    $stmt->execute(array(
        ':articleTitle' => $articleTitle,
        ':articleSlug' => $articleSlug,
        ':articleDescrip' => $articleDescrip,
        ':articleContent' => $articleContent,
        ':articleDate' => date('Y-m-d H:i:s'),
        ':articleTags' => $articleTags
    ));


//add categories
 


$articleId = $db->lastInsertId();

				if(isset($_FILES['articleImage'])){

	            	$stmt = $db->prepare('UPDATE techno_blog SET articleImage = :image WHERE articleId = :articleId') ;
		            $stmt->execute(array(
		                ':articleId' => $articleId,
		                ':image' => $target
		            ));
	        	}
				
if(is_array($categoryId)){
    foreach($_POST['categoryId'] as $categoryId){
        $stmt = $db->prepare('INSERT INTO techno_cat_links (articleId,categoryId)VALUES(:articleId,:categoryId)');
        $stmt->execute(array(
            ':articleId' => $articleId,
            ':categoryId' => $categoryId
        ));
    }
}
 


    //redirect to index page
    header('Location: index.php?action=added');
    exit;

}catch(PDOException $e) {
                echo $e->getMessage();
            }

        }

    }

    //check for any errors
    if(isset($error)){
        foreach($error as $error){
            echo '<p class="message">'.$error.'</p>';
        }
    }
	



	?>

 <form action="" method="post" enctype="multipart/form-data">

        <h2><label>Article Title</label><br>
        <input type="text" name="articleTitle" style="width:100%;height:40px" value="<?php if(isset($error)){ echo $_POST['articleTitle'];}?>"></h2>

         <h2><label>Slug Title</label><br>
        <input type="text" name="articleSlug" style="width:100%;height:40px" value="<?php if(isset($error)){ echo $_POST['articleSlug'];}?>"></h2>

        <h2><label>Image</label><br />
		<input type='file' name='articleImage' id="articleImage" onchange="readURL(this);"></h2>
		<img id="blah" alt="Your Image Preview" />
		
		<h2><label>Short Description(Meta Description) </label><br>
        <textarea name="articleDescrip" cols="120" rows="6"><?php if(isset($error)){ echo $_POST['articleDescrip'];}?></textarea></h2>

        <h2><label>Long Description(Body Content)</label><br>
        <textarea name="articleContent" id="textarea1"  class="mceEditor" cols="120" rows='20'><?php if(isset($error)){ echo $_POST['articleContent'];}?></textarea></h2>
        
        <fieldset>
    <h2><legend>Categories</legend>

    <?php    
$checked = null;
    $stmt2 = $db->query('SELECT categoryId, categoryName FROM techno_category ORDER BY categoryName');

    while($row2 = $stmt2->fetch()){

        if(isset($_POST['categoryId'])){

            if(in_array($row2['categoryId'], $_POST['categoryId'])){
               $checked="checked='checked'";
            }else{
               

            }
        }

 echo "<input type='checkbox' name='categoryId[]' value='".$row2['categoryId']."' $checked> ".$row2['categoryName']."<br />";
    }

    ?>
</h2>
</fieldset>

<h2><label>Articles Tags (Separated by comma without space)</label><br>
<input type='text' name='articleTags' value='<?php if(isset($error)){ echo $_POST['articleTags'];}?>' style="width:100%;height:40px"></h2>

        <button name="submit" class="subbtn">Submit</button>


    </form>



</div>

<?php //add above the footer
include("sidebar.php");  ?>
<?php include("footer.php");  ?>
