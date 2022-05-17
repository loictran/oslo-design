<?php
include('navtag.php');
$pageNiv1 = $page['logo'];
$pageNiv2 = $projetLogo[3];
include('header.php');
?> 		
		<div class="contenu-site banner">
			
			<div id="hero-<?php echo $projetLogoUrl[3]?>" class="hero-projet">
			</div>
				
			<div class="page">
				<h2><?php echo $projetLogo[3]?></h2>
				<h5><?php echo $projetLogoCategorie[3]?></h5>
				<?php include('nav-projets.php');?>
				<?php include( $contenuProjetLogo[3].'.php');?>
				<?php include('nav-projets.php');?>
			</div>
						
<?php
include('footer.php');
?> 				