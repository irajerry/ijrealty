<script>
$(function(){
    $('.thumbnails img').hover(function(){
        $('#preview').attr('src',$(this).attr('src'));
    },null);
});
</script>

<?php
	
	if (!isset($_GET['listingID'])){
		header("Location: index.php");
	} else{	
	$item_sql = "SELECT * FROM listing JOIN buildings ON listing.buildingID = buildings.buildingID where listing.listingID = ".$_GET['listingID'];
	$item_query = mysqli_query($dbconnect, $item_sql);
	$item_rs = mysqli_fetch_assoc($item_query);
	}?>
	<!-- listing information display here-->
	
	<div class="well"> <h1><?php echo $item_rs['title'];?></h1>  </div>	<br/>
	<div class="listingpics">
	<div class="gallery">
		<div class="preview">
		<img id="preview" src="pictures/apt_img/<?php echo $item_rs['image1'];?>" alt="Apt Image 1 ">
		</div>	

		<div class="thumbnails">
			<img onmouseover="preview.src=img1.src" id="img1" src="pictures/apt_img/<?php echo $item_rs['image1'];?>" alt="Apt Image 1 ">
			<img onmouseover="preview.src=img2.src" id="img2" src="pictures/apt_img/<?php echo $item_rs['image2'];?>" alt="Apt Image 2 ">
			<img onmouseover="preview.src=img3.src" id="img3" src="pictures/apt_img/<?php echo $item_rs['image3'];?>" alt="Apt Image 3 ">
			<img onmouseover="preview.src=img4.src" id="img4" src="pictures/apt_img/<?php echo $item_rs['image4'];?>" alt="Apt Image 4 ">
			<img onmouseover="preview.src=img5.src" id="img5" src="pictures/apt_img/<?php echo $item_rs['image5'];?>" alt="Apt Image 5 ">
		</div>

	  </div>

	</div>

	<hr/>


	<div class="listinginfo">
	<h2><span>  Listing Details  </span></h2>

	<div class="info"><span> <b>Price:</b> $ <?php echo $item_rs['rent'];?></span> </div>
	<div class="info"><span> <b>Bedrooms:</b> <?php echo $item_rs['br'];?></span> </div>
	<div class="info"><span> <b>Bathrooms:</b><?php echo $item_rs['ba'];?> </span> </div>
	<div class="info"><span> <b> Unit: </b><?php echo $item_rs['unit'];?></span> </div>	<div class="info"><span> <b>Listing Description:</b> <?php echo $item_rs['description'];?></span></div>
	</div>
	<hr/>
	<div class="listinginfo">
	<h2><span>  Building Details  </span></h2>
	<div class="info"><span> <b>Building Type: </b><?php echo $item_rs['buildingType'];?></span>  </div>
	<div class="info"><span> <b> Number of Units: </b><?php echo $item_rs['numberOfUnits'];?>  </span > </div>
	<div class="info"><span> <b>Pet Policy:</b><?php echo $item_rs['petPolicy'];?> </span></div>
	</div>
	

<div class="form">
	<h1> Contact </h1>
	<form method="GET" action="contact.php" class="form">
	<table>
	<tr> <td><b>Name:</b></td> <td> <input type="text" name="name"></td></tr>
	<tr> <td><b> Email Address:</b> </td> <td> <input type="text" name="email"></td></tr>
	<tr><td><b>Phone Number: </b></td><td> <input type="text"  name="phone"></td></tr>
	<tr><td><b>Comment:</b></td> <td><textarea name="comment" rows=5 cols=22> </textarea></td></tr>	<tr> <td></td> <td><button type="submit" value="submit" name="submit"> Submit </button></td></tr>
	</table>
	
	
	</form>
</div>	 
	 
	 
	 
