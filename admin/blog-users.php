
<?php

	
				require_once 'connection.php';
				
				session_start();

				if(!isset($_SESSION['user_login']))	//check unauthorize user not access in "welcome.php" page
				{
					header("location: login.php");
				}

 ?>

 
<?php


//include connection file 
require_once('config.php');

//check logged in or not 
//logout.php  
 
// add / edit page
if(isset($_GET['deluser'])){ 

    $stmt = $db->prepare('DELETE FROM users WHERE id = :id') ;
    $stmt->execute(array(':id' => $_GET['deluser']));

    header('Location: blog-users.php?action=deleted');
    exit;

  }


?>

<?php include("head.php");  ?>
<?php require_once('../includes/functions.php'); ?>
  <title>Users- Techno Smarter Blog</title>
  <script language="JavaScript" type="text/javascript">
  function deluser(id, title)
  {
    if (confirm("Are you sure you want to delete '" + title + "'"))
    {
      window.location.href = 'blog-users.php?deluser=' + id;
    }
  }
  </script>
  <?php include("header.php");  ?>

<div class="content">
 <?php 
  //show message from add / edit page
  if(isset($_GET['action'])){ 
    echo '<h3>User '.$_GET['action'].'.</h3>'; 
  } 
  ?>

  <table>
  <tr>
    <th>Username </th>
    <th>Email </th>
    <th>Edit </th>
    <th>Delete </th>

  </tr>
   <?php
    try {

      $stmt = $db->query('SELECT id, username, email FROM users ORDER BY id');
      while($row = $stmt->fetch()){
        
        echo ' <tr>';
        echo ' <td>'.$row['username'].' </td>';
        echo ' <td>'.$row['email'].' </td>';
        ?>

        <td>
          <button class="editbtn"><a href="edit-blog-user.php?id=<?php echo $row['id'];?>">Edit</a> </button>
      </td>
          <td>
       
         <button class="delbtn"><a href="javascript:deluser('<?php echo $row['id'];?>','<?php echo $row['username'];?>')">Delete</a></button>
      </td>
        

        </td>
        
        <?php 
        echo '</tr>';

      }

    } catch(PDOException $e) {
        echo $e->getMessage();
    }
  ?>
  </table>

  <p><button class="editbtn"><a href='add-blog-user.php'>Add User</a></button></p>


</div>
  

<?php //add above the footer
include("sidebar.php");  ?>

<?php include("footer.php");  ?>

