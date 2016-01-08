<?php
include("dbconnect.php");
?>
<!doctype html>
<html>
<head><title> Welcome to Ira Jerry Realty </title><link rel="stylesheet" type="text/css" href= "bootstrap/css/bootstrap.min.css"><link href="style.css" rel="stylesheet" type="text/css"><link href="chessflex.css" rel="stylesheet" type="text/css"><link href="print.css" rel="stylesheet" type="text/css"><script src="js/jquery.min.js"> </script><script src="bootstrap/js/bootstrap.min.js"></script><meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="shortcut icon" href="/favicon.ico">	<link rel="icon" sizes="16x16 32x32 64x64" href="/favicon.ico">	<link rel="icon" type="image/png" sizes="196x196" href="/favicon-192.png">	<link rel="icon" type="image/png" sizes="160x160" href="/favicon-160.png">	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96.png">	<link rel="icon" type="image/png" sizes="64x64" href="/favicon-64.png">	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32.png">	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16.png">	<link rel="apple-touch-icon" href="/favicon-57.png">	<link rel="apple-touch-icon" sizes="114x114" href="/favicon-114.png">	<link rel="apple-touch-icon" sizes="72x72" href="/favicon-72.png">	<link rel="apple-touch-icon" sizes="144x144" href="/favicon-144.png">	<link rel="apple-touch-icon" sizes="60x60" href="/favicon-60.png">	<link rel="apple-touch-icon" sizes="120x120" href="/favicon-120.png">	<link rel="apple-touch-icon" sizes="76x76" href="/favicon-76.png">	<link rel="apple-touch-icon" sizes="152x152" href="/favicon-152.png">	<link rel="apple-touch-icon" sizes="180x180" href="/favicon-180.png">	<meta name="msapplication-TileColor" content="#FFFFFF">	<meta name="msapplication-TileImage" content="/favicon-144.png">	<meta name="msapplication-config" content="/browserconfig.xml"></head>
<body><div class="container">	<?php 		include("nav.php");		if(!isset($_GET['page'])){			?> 	<?php	}	?>	<div class="maincontent">	<!-- main goes here-->	<?php
		if(!isset($_GET['page'])){
			include("home.php");
			}else {
				$page = $_GET['page'];
				include("$page.php");	
			}	?>	</div>	<?php		include("secondary.php");	?><div class="footer"><div class="footerrow">
<div class="left"><h5> Class Work </h5><a href="http://www.ijerry.domainsforauthors.com"> Old Class Page </a><a href="index.php?page=chess"> Chest Flex</a></div>		<div class="social">    <h5> Connect With Me </h5>		<a href="http://www.facebook.com/irajerry"><img src="pictures/fb.png" alt="facebook icon" class="icon"></a>		<a href="https://www.linkedin.com/in/irajerry"><img src="pictures/linked.png" alt="linkedin icon" class="icon"></a>		<a href="https://www.instagram.com/irajerry"><img src="pictures/ig.png" alt="instagram icon" class="icon"></a>		<a href="https://www.twitter.com/iraproperties"><img src="pictures/twit.png" alt="twitter icon" class="icon"></a>         </div><div class="right">		<h5> Others </h5>		<a href="index.php?page=guessbook"> Guessbook </a>		<a href="http://www.cis3630.org/student-webpages.php"> Student Page </a>		</div></div>																										<div class="bottom">						<h5> &copy; Ira Jerry Realty 2015-infinity. All Rights Reserved. </h5>		</div>																				

</div>
</div>
</body>
</html>