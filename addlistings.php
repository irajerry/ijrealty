<?php 
	session_start();
include("dbconnect.php");
	if(!isset ( $_SESSION['admin'])) {
		header("Location:index.php");
	}


?>
<div class="maincontent">
	<p><a href="index.php?page=admin"> Back to Admin </a> </p>
	<h1> Enter Details for new listing </h1>
	<form method="post" action="index.php?page=confirmaddlisting" enctype="multipart/form-data">
	<p> Category ID: <select name="categoryID">
<?php
	$catlist_sql = "SELECT * FROM category";
	$catlist_qry =mysqli_query($dbconnect, $catlist_sql);
	$catlist_rs= mysqli_fetch_assoc($catlist_qry);
		do{ ?>
		<option value="<?php echo $catlist_rs['categoryID'];?>"
		><?php echo $catlist_rs['name'];?> </option>
		<?php } while ($catlist_rs=mysqli_fetch_assoc($catlist_qry));
		?>
			
	</select>
	
	</p>
	<p> Title: <input type="text" name="title"></p>
	<p> Rent:<input type="number" name="rent"> </p>
	<p> Bedrooms: <input type="number" name="br"></p>
	<p> Bathrooms: <input type="number" name="ba"></p>
	<p> Description: <textarea name="description" cols=60 rows=5></textarea></p>
	<p> Image1: <input type="file" name="fileToUpload1" id="fileToUpload1"></p>
	<p> Image2: <input type="file" name="fileToUpload2" id="fileToUpload2"></p>
	<p> Image3: <input type="file" name="fileToUpload3" id="fileToUpload3"></p>
	<p> Image4: <input type="file" name="fileToUpload4" id="fileToUpload4"></p>
	<p> Image5: <input type="file" name="fileToUpload5" id="fileToUpload5"></p>
	<p> BuildingID: <select name="buildingID">
		<?php $building_sql= "SELECT * FROM buildings";
			  $building_qry= mysqli_query($dbconnect, $building_sql);
			  $building_rs= mysqli_fetch_assoc($building_qry);
			  do { ?>
			  <option value="<?php echo $building_rs['buildingID'];?>"
			  ><?echo $building_rs['buildingNumber'] ;?></option>
			  
			  <?php } while($building_rs=mysqli_fetch_assoc($building_qry));
			   ?>
			   
		</select>
	</p>
	<p> Unit:<input type="text" name="unit"> </p>
	<input type="submit" name="submit" value="submit">
	
	</form>