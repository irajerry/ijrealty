<h1> Login </h1>

<form method="post" action="index.php?page=admin" name="login">

<p> Username : <input type="text" name="username" maxlength="30"></p>
<p> Password :  <input type="password" name="password" maxlength="30"></p>
<?php
 if ( isset($_POST['login']) && isset($_SESSION['admin'])){
	 ?>
	  <p> <span> incorrect username or password </span> </p>
	<?php
 }
?>
<p> <input type="submit" name="submit" value="Login">

</form>