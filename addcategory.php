<?php
session_start();
// session check
	if(!isset($_SESSION["admin"] )){
		header("Location: index.php?page=admin");
	}
	//set session to blank if user just entered this page from admin panel
	if(!isset($_SESSION['addcategory']['name'])){
		$_SESSION['addcategory']['name']="";
	}
?>
<h1> Add new category </h1>

<form method="post" action="index.php?page=confirmcategory">
<p> <input type="text" name="name" size="40" value="<?php echo $_SESSION['addcategory']['name'];?>" maxlength="50"></p>
<p> <input type="submit" name="submit" value="add category"> </p>
</form>