<!doctype html>
<html>
	<head>
		<meta charset="utf-8">	
		<?php include('site-title.php');?>	

		<!-- FAVICON -->
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">
		<!-- FAVICON -->

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,300&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/reset.css">
		<!-- PhotoSwipe -->
		<link rel="stylesheet" href="js/photoswipe.css">
		<!-- <link rel="stylesheet" href="js/default-skin/default-skin.css"> -->
		<link rel="stylesheet" href="js/blanc-skin/blanc-skin.css">
		<script src="js/photoswipe.min.js"></script>
		<script src="js/photoswipe-ui-default.min.js"></script>
		<script src="js/script-photoswipe.js"></script>	

		<link rel="stylesheet" href="css/style.css">
		<!-- SEO SOCIAL MEDIAS -->
		<meta property="og:title" content="ØSLO | Collectif de créateurs indépendants"/>
		<meta property="og:url" content="https://design.collectif-oslo.com/"/>
		<meta property="og:type" content="website" />
		<meta property="og:description" content="Communication visuelle sur mesure. CRÉA / WEB / PRINT" />
		<meta property="og:image" content="/images/oslo-miniature.jpg"/>

		
	</head>
	<body>
		<div class="main" id="main-content">
			<script>document.getElementById('main-content').classList.add('is-loading')</script>
			<div class="loader">
				<div id="blockanim">
					<div id="point1" class="point"></div
					><div id="point2" class="point"></div
					><div id="point3" class="point"></div>
				</div>
			</div>
			<header id="header-site">
				<div id="contenteur-header">
					<a id="logo-mobile" href="index.php"><img src="images/logo-noir.svg"></a>
					<div id="nav-icon">
				      <span></span>
				      <span></span>
				      <span></span>
				      <span></span>
				    </div>
				</div>
			</header>
			<?php include('main-nav.php');?>