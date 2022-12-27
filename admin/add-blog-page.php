<?php

	
				require_once 'connection.php';
				
				session_start();

				if(!isset($_SESSION['user_login']))	//check unauthorize user not access in "welcome.php" page
				{
					header("location: login.php");
				}

 ?>


<?php
require_once('config.php'); 
 
 //logout.php  
 
?>

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


<?php include("../includes/functions.php");  ?>
<!-- On page head area--> 
  <title>Add New Page -Web Marketers Blog</title>
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

        $target = "uploads/".$_FILES['pageImage']['name'];
		$path = '../'.$target;
        
        //collect form data
        extract($_POST);

        //very basic validations
        if($pageTitle ==''){
            $error[] = 'Please enter the Page title.';
        }
		
		if($slugTitle ==''){
            $error[] = 'Please enter the Slug title.';
        }
		

        if($pageDescrip ==''){
            $error[] = 'Please enter the Page description.';
        }

        if($pageContent ==''){
            $error[] = 'Please enter the content.';
        }
         if($pageKeywords ==''){
            $error[] = 'Please enter the Page Keywords.';
        }
		
		if(isset($_FILES['pageImage'])){

			// find thevtype of image
			switch ($_FILES["pageImage"]["type"]) {
			case $_FILES["pageImage"]["type"] == "image/gif":
			    move_uploaded_file($_FILES["pageImage"]["tmp_name"], $path);
			    break;
			case $_FILES["pageImage"]["type"] == "image/jpeg":
			       move_uploaded_file($_FILES["pageImage"]["tmp_name"], $path);
			    break;
			case $_FILES["pageImage"]["type"] == "image/pjpeg":
			       move_uploaded_file($_FILES["pageImage"]["tmp_name"], $path);
			    break;
			case $_FILES["pageImage"]["type"] == "image/png":
			    move_uploaded_file($_FILES["pageImage"]["tmp_name"], $path);
			    break;
			case $_FILES["pageImage"]["type"] == "image/x-png":
			    move_uploaded_file($_FILES["pageImage"]["tmp_name"], $path);
			    break;

			default:
			    $error[] = 'Wrong image type selected. Only JPG, PNG or GIF accepted!.';
			}

		}

        if(!isset($error)){

          try {

    $pageSlug = slug($slugTitle);

    //insert into database
   $stmt = $db->prepare('INSERT INTO techno_pages (pageTitle,pageSlug,pageDescrip,pageContent,pageKeywords) VALUES (:pageTitle, :pageSlug, :pageDescrip, :pageContent,:pageKeywords)') ;
  



$stmt->execute(array(
    ':pageTitle' => $pageTitle,
    ':pageSlug' => $pageSlug,
    ':pageDescrip' => $pageDescrip,
    ':pageContent' => $pageContent,
    ':pageKeywords' => $pageKeywords
));


$pageId = $db->lastInsertId();

if(isset($_FILES['pageImage'])){

	            	$stmt = $db->prepare('UPDATE techno_pages SET pageImage = :image WHERE pageId = :pageId') ;
		            $stmt->execute(array(
		                ':pageId' => $pageId,
		                ':image' => $target
		            ));
	        	}
    //redirect to index page
    header('Location: blog-pages.php?action=added');
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
 <form action='' method='post' enctype="multipart/form-data">

        <h2><label>Page Title</label><br>
        <input type='text' name='pageTitle' style="width:100%;height:40px" value='<?php if(isset($error)){ echo $_POST['pageTitle'];}?>'></h2>
         
		 <h2><label>Slug Title</label><br>
        <input type="text" name="slugTitle" style="width:100%;height:40px" value="<?php if(isset($error)){ echo $_POST['slugTitle'];}?>"></h2>
		
		<h2><label>Image</label><br />
		<input type='file' name='pageImage' id="pageImage" onchange="readURL(this);"></h2>
		
		<img id="blah" alt="Your Image Preview" />
		
        <h2><label>Short Description(Meta Description) </label><br>
        <textarea name='pageDescrip' cols='120' rows='6'><?php if(isset($error)){ echo $_POST['pageDescrip'];}?></textarea></h2>

        <h2><label>Long Description(Body Content)</label><br>
        <textarea name='pageContent' id='textarea1' class='mceEditor' cols='120' rows='20'><?php if(isset($error)){ echo $_POST['pageContent'];}?></textarea></h2>
        
<h2><label>Page Keywords (Seprated by comma without space)</label><br>
<input type='text' name='pageKeywords' value='<?php if(isset($error)){ echo $_POST['pageKeywords'];}?>' style="width:100%;height:40px"></h2>

        <p><input type='submit' class="editbtn" name='submit' value='Submit'></p>

    </form>
</div>
  <?php include("sidebar.php");  ?>

<?php include("footer.php");  ?>

