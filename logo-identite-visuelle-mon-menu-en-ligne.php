<?php
include('navtag.php');
$pageNiv1 = $page['logo'];
$pageNiv2 = $projetLogo[8];
include('header.php');
?> 		
		<div class="contenu-site banner">
			
			<div id="hero-<?php echo $projetLogoUrl[8]?>" class="hero-projet">
			</div>
				
			<div class="page">
				<h2><?php echo $projetLogo[8]?></h2>
				<h5><?php echo $projetLogoCategorie[8]?></h5>
				<?php include('nav-projets.php');?>
				<?php include( $contenuProjetLogo[8].'.php');?>
				<?php include('nav-projets.php');?>
			</div>
						
<?php
include('footer.php');
?> 				