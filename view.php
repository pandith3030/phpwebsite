<?php

	// Connect to database
	$con = mysqli_connect("localhost","root","","estore");
	
	// mysqli_connect("servername","username","password","database_name")

	// Get all the categories from category table
	$sql = "SELECT * FROM `category`";
	$all_categories = mysqli_query($con,$sql);

	// The following code checks if the submit button is clicked
	// and inserts the data in the database accordingly
	if(isset($_POST['submit']))
		
	{
		
		$name=$title=$slug="";
		// Store the Product name in a "name" variable
		$name = mysqli_real_escape_string($con,$_POST['product_name']);
		
		$title = mysqli_real_escape_string($con,$_POST['product_title']);
		

		$slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title)));
		
		// Store the Category ID in a "id" variable
		$id = mysqli_real_escape_string($con,$_POST['category']);
		
		// Creating an insert query using SQL syntax and
		// storing it in a variable.
		$sql_insert =
		"INSERT INTO product(product_name, product_title, product_slug, category_id)
			VALUES ('$name', '$title', '$slug', '$id')";
		
		// The following code attempts to execute the SQL query
		// if the query executes with no errors
		// a javascript alert message is displayed
		// which says the data is inserted successfully
		if(mysqli_query($con,$sql_insert))
		{
			echo '<script>alert("Product added successfully")</script>';
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0">
</head>
<body>
	
	<div class="container col-md-12">
	<div class="table">
	<table border=1 cellpadding=2 border-collapse>
	<thead>
	<tr>
	<th>product_id</th>
	<th>product_name</th>
	<th>product_category</th>
	<th>product_title</th>
	<th>product_slug</th>
	<th>category</th>
	<th>URL</th>
	</tr>
	</thead>
	<?php 
	$sql1= "select * from techno_blog t inner join category c on p.category_id=c.Category_ID";
	$result=mysqli_query( $con, $sql1);
	while($row=mysqli_fetch_assoc($result)){
	?>
	<tr>
	<td><?php echo $row['articleId'] ?></td>
	<td><?php echo $row['articleTitle'] ?></td>
	<td><?php echo $row['articleSlug'] ?></td>
	<td><?php echo $row['articleDescrip'] ?></td>
	<td><?php echo $row['articleDate'] ?></td>
	<td><?php echo $row['category_name'] ?></td>
    <td><a href="display.php?Category_Name=<?php echo $row['Category_Name'] ?>&product_slug=<?php echo $row['product_slug'] ?>"><?php echo $row['product_name'] ?></a></td>	
	<td><a href="<?php echo $row['categoryName'] ?>/<?php echo $row['articleSlug ?>"><?php echo $row['product_name'] ?></a></td>	
	</tr>
	
<?php		
	}
		
		
			
	?>
     </div>
	 </div>
	
</body>
</html>
