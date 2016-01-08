 
 <?php
include("dbconnect.php");
session_start();
// session check
	if(!isset($_SESSION["admin"])){
		header("Location: index.php?page=admin");
	}
	
?>
<h1> Confirm Category Removal</h1>

<?php
 $deletecat_sql ="SELECT * FROM category WHERE categoryID = ". $_GET['categoryID'];
 $deletecat_query= mysqli_query($dbconnect, $deletecat_sql);
 $deletecat_rs= mysqli_fetch_assoc($deletecat_query);
 
 $check_sql = "SELECT * from listing WHERE categoryID =".$_GET['categoryID'];
 $check_query = mysqli_query($dbconnect, $check_sql);
 $count =mysqli_num_rows($check_query);
?>

<p style="color:red"> <?php if ($count>0){
	echo "Warning! There are ".$count ." stock item(s) in this category if you delete the category they will also be removed from the datatbase";
	
} ?> </p>
 
 
<p><?php echo "Do you really wish to delete ". $deletecat_rs['name']."?";?></p>
<p> <a href="index.php?page=deletecategory&categoryID=<?php echo $deletecat_rs['categoryID'];?>">Yes delete It !</a> |<a href="index.php?page=deletecategoryselect"> no go back </a>| <a href="index.php?page=adminpanel">back to admin panel </a></p>

