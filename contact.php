

<?php
include("dbconnect.php");
 if(isset($_GET['submit'])){
	 
	 $name = $_GET['name'];
	 $email = $_GET['email'];
	 $phone = $_GET['phone'];
	 $comment = $_GET['comment'];
	 
	// $newcat_sql = "INSERT INTO category (name) VALUES ('".mysqli_real_escape_string($dbconnect,$_SESSION['addcategory']['name'])."')";
		$comment_insert_sql = "INSERT INTO guessbook (name, email, phone, comment) VALUES ('$name' , '$email' , '$phone' , '$comment')";
	 $comment_query = mysqli_query($dbconnect, $comment_insert_sql);
	 } if ($comment_query)
		 echo "<h1>Sucessully Entered Comment </h1>";
	 else {
		 echo "<h1>Comment Not Entered :(</h1>";
	 }

?>

<a href="index.php?page=guessbook"> View Guessbook  </a>





