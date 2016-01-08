 <?php
	session_start();
// session checkdate
	if(!isset($_SESSION["admin"] )){
		header("Location: index.php?page=admin");
	}
	if(!isset($_POST["submit"])){
	header("Location: index.php?page=admin");
	}
	
	// see if add category button was pressed. 
if(!isset($_POST["submit"])){
	header("Location: index.php?page=admin");
	}
	
	
	//set addcategory session 
	
	$_SESSION['addcategory']['name'] = $_POST['name'];
	
	?>

	<h1> Confirm Category Name </h1>.
	
	<p> You Entered: <?php echo $_POST['name'];?> </p>
	<p> <a href="index.php?page=entercategory"> Correct, Continue </a> | <a href="index.php?page=addcategory"> No, Go back </a> </p>