 <?php  
 //login_success.php  
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
      echo '<h3>Login Success, Welcome - '.$_SESSION["username"].'</h3>';  
      echo '<br /><br /><a href="logout.php">Logout</a>';  
	  header("location:index.php");
 }  
 else  
 {  
      header("location:login.php");  
 }  
 ?>  
