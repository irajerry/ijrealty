<?php
session_start();
// verify if user is loging out.

if(isset($_GET['action'])){
	if($_GET['action']=="logout"){
		unset($_SESSION['admin']);
	}
}
	// check login form against database if submitted.
	
	if(isset($_POST["submit"])){
		$login_sql = "SELECT * FROM user where username= '".$_POST['username']."'AND password = '".sha1($_POST['password'])."'";		
		if($login_query= mysqli_query($dbconnect, $login_sql)){
			$login_rs= mysqli_fetch_assoc($login_query);
			$_SESSION["admin"]=$login_rs["username"];
			}				
	} if(isset($_SESSION["admin"])){
	include("adminpanel.php");
	} else {
		include("login.php");
			}
?>
