<?php

	
				require_once 'connection.php';
				
				session_start();

				if(!isset($_SESSION['user_login']))	//check unauthorize user not access in "welcome.php" page
				{
					header("location: login.php");
				}

 ?>
 

<?php //include connection file 
require_once('config.php');


?>

<?php include("head.php");  ?>
<?php require_once('../includes/functions.php'); ?>
    <title>EDIT Category- Techno Smarter Blog</title>
    <?php include("header.php");  ?>

<div class="content">
 <h2>Edit Category-Techno Smarter</h2>


    <?php

    //if form has been submitted process it
    if(isset($_POST['submit'])){

        $_POST = array_map( 'stripslashes', $_POST );

        //collect form data
        extract($_POST);

        //very basic validation
        if($categoryId ==''){
            $error[] = 'Invalid id.';
        }

        if($CategoryName ==''){
            $error[] = 'Please enter the Category Title .';
        }

        if(!isset($error)){

            try {

                $categorySlug = slug($CategoryName);

                //insert into database
                $stmt = $db->prepare('UPDATE techno_category SET CategoryName = :CategoryName, categorySlug = :categorySlug WHERE categoryId = :categoryId') ;
                $stmt->execute(array(
                    ':CategoryName' => $CategoryName,
                    ':categorySlug' => $categorySlug,
                    ':categoryId' => $categoryId
                ));

                //redirect to categories  page
                header('Location: blog-categories.php?action=updated');
                exit;

            } catch(PDOException $e) {
                echo $e->getMessage();
            }

        }

    }

    ?>


    <?php
    //check for any errors
    if(isset($error)){
        foreach($error as $error){
            echo $error.'<br>';
        }
    }

        try {

            $stmt = $db->prepare('SELECT categoryId, CategoryName FROM techno_category WHERE categoryId = :categoryId') ;
            $stmt->execute(array(':categoryId' => $_GET['id']));
            $row = $stmt->fetch(); 

        } catch(PDOException $e) {
            echo $e->getMessage();
        }

    ?>

    <form action="" method="post">
        <input type='hidden' name='categoryId' value='<?php echo $row['categoryId'];?>'>

        <p><label>Category Title</label><br>
        <input type='text' name='CategoryName' value='<?php echo $row['CategoryName'];?>'>

        </p><p><input type="submit" name="submit" value="Update"></p>

    </form>


</div>
  <?php include("sidebar.php");  ?>



<?php include("footer.php");  ?>



