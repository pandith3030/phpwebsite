<?php

$servername = "localhost";
$username = "root";
$password = "";
$database="technosmarter";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


?>

<?php include 'includes/config.php'; ?>

<?php include('header.php'); ?>


<?php

if(isset($_GET['categorySlug']) && isset($_GET['articleSlug'])){ 


$categorySlug=$_GET['categorySlug'];
$articleSlug=$_GET['articleSlug'];

}

?>

<?php

$sql= "SELECT articleTitle, articleImage, articleContent, articleSlug  FROM techno_blog, techno_category WHERE techno_category.categorySlug='$categorySlug' AND techno_blog.articleSlug='$articleSlug'";
$result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0) {
while($row=mysqli_fetch_assoc($result)) {
	 ?>


<td><?php echo $row['articleTitle']; ?></td>
<td><img height="100" style="width:100%;" src="../<?php echo $row['articleImage'];?>"  ></td>
<td><?php echo $row['articleContent']; ?></td>

<?php


}
}

?>

<?php include('footer.php'); ?>
<?php include('sidebar.php'); ?>