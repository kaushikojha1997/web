<!DOCTYPE html>
<html>
<head>
	<title>SmartMobi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./css/response.css">
	<link rel="stylesheet" type="text/css" href="./css/content.css">

	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
<?php 
	include 'initialize.php';

 ?>

	<?php
	 include_once('./resource/header.php'); ?>
	<section id="content">
		<div class="container center">
			<h1>World Class Mobile Solutions</h1>
			<h2>Get Smarter, Get Faster</h2>
			<img id ="contentMobi" src="./images/contentMobi.png">
			<div class="searchbox">
				<span id="search-wrap">
					<input type="search" name="search" placeholder="Search Category">
					<button type="submit" id="searchicon">&#128269</button>
				</span>
			</div>
		</div>
	</section>
	<?php include('./resource/latestcollection.php'); ?>

	<?php include('./resource/aboutus.php'); ?>
	<?php include('./resource/contactus.php'); ?>


	<?php include('./resource/footerup.php'); ?>
	<?php include('./resource/footer.php'); ?>
	
	
</body>
</html>