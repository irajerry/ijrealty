<?php
include("dbconnect.php");
session_start();
// session check
	if(!isset($_SESSION["admin"])){
		header("Location: index.php?page=admin");
	}
	
	$deletecat_sql = "DELETE FROM category where categoryID=".$_GET['categoryID'];
	$deletecat_query=mysqli_query($dbconnect,$deletecat_sql);
	$deletecat_rs=mysqli_fetch_assoc($deletecat_query);
	
	$deletelisting_sql = "DELETE FROM listing WHERE categoryID=".$_GET['categoryID'];
	$deletelisting_query = mysqli_query($dbconnect, $deletelisting_sql);
	
?>
<h1> Category Deleted</h1>
<p> Category Has successfully been deleted </p>
<p> <a href="index.php?page=admin"> Return to admin Panel</a></p>

