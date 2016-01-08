<?php
include("dbconnect.php");
session_start();
// session check
	if(!isset($_SESSION["admin"])){
		header("Location: index.php?page=admin");
	}
	
?>
<h1> Remove Category</h1>

<?php
 $deletecat_sql =" SELECT * FROM category";
 $deletecat_query= mysqli_query($dbconnect, $deletecat_sql);
 $deletecat_rs= mysqli_fetch_assoc($deletecat_query);
 
 do{ ?>
 
	<p><a href="index.php?page=deletecategoryconfirm&categoryID=<?php echo $deletecat_rs['categoryID'];?>"><?php echo $deletecat_rs['name'];?></a></p>
		<?php
   } while ($deletecat_rs= mysqli_fetch_assoc($deletecat_query));
 ?>

