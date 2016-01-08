<?php 
session_start();
// check to see if admin is logged in if not send back to admin login page
if(!isset($_SESSION["admin"])){
	header("Location: index.php?page=admin");
}
// see if add category button was pressed. 
if(!isset($_SESSION['addcategory']['name'])){
	header("Location: index.php?page=admin");
	}
	// enter the category
	

$newcat_sql = "INSERT INTO category (name) VALUES ('".mysqli_real_escape_string($dbconnect,$_SESSION['addcategory']['name'])."')";
$newcat_query= mysqli_query($dbconnect, $newcat_sql);
unset($_SESSION['addcategory']['name']);
	?>
	
	<p> New Category Added </p>
	</p> <a href = "index.php?page=admin" > Return to Admin Page</a> </p>
	