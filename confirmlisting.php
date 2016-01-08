<?php 

session_start();

if (!isset($_SESSION['admin'])) {
	header("Location:index.php");
}
	if(isset($_POST['submit'])){
		$_SESSION['addlisting']['title'] = $_POST['title'];
		$_SESSION['addlisting']['rent'] = $_POST['rent'];
		$_SESSION['addlisting']['br'] = $_POST['br'];
		$_SESSION['addlisting']['ba'] = $_POST['ba'];
		$_SESSION['addlisting']['description'] = $_POST['description'];
		$_SESSION['addlisting']['fileToUpload1'] = $_POST['fileToUpload1'];
		$_SESSION['addlisting']['fileToUpload2'] = $_POST['fileToUpload2'];
		$_SESSION['addlisting']['fileToUpload3'] = $_POST['fileToUpload3'];
		$_SESSION['addlisting']['fileToUpload4'] = $_POST['fileToUpload4'];
		$_SESSION['addlisting']['fileToUpload5'] = $_POST['fileToUpload5'];
		$_SESSION['addlisting']['buildingID'] = $_POST['buildingID'];
		
	}

?>