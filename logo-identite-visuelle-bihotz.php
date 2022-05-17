<?php
include('navtag.php');
$pageNiv1 = $page['logo'];
$pageNiv2 = $projetLogo[1];
include('header.php');
?> 		
		<div class="contenu-site banner">
			
			<div id="hero-<?php echo $projetLogoUrl[1]?>" class="hero-projet">
			</div>
				
			<div class="page">
				<h2><?php echo $projetLogo[1]?></h2>
				<h5><?php echo $projetLogoCategorie[1]?></h5>
				<?php include('nav-projets.php');?>
				<?php include( $contenuProjetLogo[1].'.php');?>
				<?php include('nav-projets.php');?>
			</div>
						
<?php
include('footer.php');
?> 				