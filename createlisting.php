<?php
$listingId=$_POST['listingid'];
$rent=$_POST['rent'];
$br= $_POST['bedrooms'];
$ba= $_POST['bathrooms'];
$description=$_POST['description'];
$bid=$_POST['buildingidno'];
?>

<?php
echo "<h1> Listing Details </h1>";
echo "<p> Listing ID : $listingId </p>";
echo "<p>Rent : $ $rent </p>";
echo "<p>Bedrooms : $br </p>";
echo "<p> Bathroooms: $ba </p>";
echo "<p>Listing Description: $description</p>";
echo "<p> Building ID : $bid</p>";
?>

<?php

$foldername = $_POST['listingid'];

$path = 'pictures/' . $foldername;
mkdir($path);


IF ( isset($_FILES['images'])){
	$name_array = $_FILES['images']['name'];
	$tmp_name_array = $_FILES['images']['tmp_name'];
	$type_array = $_FILES['images']['type'];
	$type_array = $_FILES['images']['type'];
	$size_array = $_FILES['images']['size'];
	$error_array = $_FILES['images']['error'];
	for($i=0; $i< count($tmp_name_array); $i++){
		if(move_uploaded_file($tmp_name_array[$i],$path."/".$name_array[$i])){
			echo $name_array[$i]."Upload is complete <br/>";	
			}else{
				echo "move_uploaded_file function failed for ".$name_array[$i] . "<br/>";
			}				
			
			
		}

}
 ?>