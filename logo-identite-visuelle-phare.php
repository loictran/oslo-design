<?php
include('navtag.php');
$pageNiv1 = $page['logo'];
$pageNiv2 = $projetLogo[9];
include('header.php');
?> 		
		<div class="contenu-site banner">
			
			<div id="hero-<?php echo $projetLogoUrl[9]?>" class="hero-projet">
			</div>
				
			<div class="page">
				<h2><?php echo $projetLogo[9]?></h2>
				<h5><?php echo $projetLogoCategorie[9]?></h5>
				<?php include('nav-projets.php');?>
				<?php include( $contenuProjetLogo[9].'.php');?>
				<?php include('nav-projets.php');?>
			</div>
						
<?php
include('footer.php');
?> 				