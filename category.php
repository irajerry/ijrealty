<?php
	// check to see if category id is set if not redirect ot main page
	if(!isset($_GET['categoryID'])){
		header("Location:index.php");
	}
	//select all Items belonging to selected categoryID.
	$catid=$_GET['categoryID'];
	$listing_sql="SELECT listing.rent, listing.title, listing.categoryID, listing.listingID, listing.image1,category.categoryID,category.name FROM listing JOIN category ON listing.categoryID=category.categoryID WHERE listing.categoryID=".$_GET['categoryID'];
	$listing_query = mysqli_query($dbconnect, $listing_sql);
	if ($listing_query = mysqli_query($dbconnect, $listing_sql)){
		$listing_rs = mysqli_fetch_assoc($listing_query);	
	}
	if(mysqli_num_rows($listing_query)==0) {
			echo "Sorry No Listings Available Right Now Call Ira at 347-799-8818";
		} else {
			?>
			
			<?php do {
				?>
				<div class="item">
				<a href="index.php?page=item&amp;listingID=<?php echo $listing_rs['listingID'];?>">
				
				<p> <img src="/pictures/apt_img/<?php echo $listing_rs['image1'];?>" alt="Apartment Thumbnail"	 class="itempic"></p>
				<p><?php  echo $listing_rs['title'];?></p>
				<p>$<?php  echo $listing_rs['rent'];?></p></a>
				</div>
			<?php
			} while($listing_rs=mysqli_fetch_assoc($listing_query))
			?>
		<?php
			}	
			?>	