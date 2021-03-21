<!DOCTYPE HTML>

<html>
	<head>
		<title>HackeD By ~ B1ng0_H4ck_T3Am</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo">MegaCorp</a>
					<nav id="nav">
						<a href="home.php">Home</a>
						<a href="?page=about">About</a>
						<a href="?page=cars">Cars</a>
					</nav>
				</div>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		
			<section id="banner">
				<div class="inner">
					<h1> <span>The best place to costumize<br />
					your cars</span></h1>
					<ul class="actions">
						<li><a href="#" class="button alt">Get Started</a></li>
					</ul>
				</div>
			</section>
<?php
	if(file_exists($page)){
    	$contents = file_get_contents($page);
    	echo $contents;
	}else{
		if($_GET['page']){
			str_replace("<", '', $page);
			echo "File $page not found";
		} else {
			die();
		}
		}
?>
		
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>