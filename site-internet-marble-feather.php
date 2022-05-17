<?php
include('navtag.php');
$pageNiv1 = $page['web'];
$pageNiv2 = $projetSiteWeb[8];
include('header.php');
?> 		
		<div class="contenu-site banner">
			
			<div id="hero-<?php echo $projetSiteWebUrl[8]?>" class="hero-projet">
			</div>
				
			<div class="page">
				<h2><?php echo $projetSiteWeb[8]?></h2>
				<h5><?php echo $projetSiteWebCategorie[8]?></h5>
				<?php include('nav-projets-web.php');?>
				<?php include( $contenuProjetWeb[8].'.php');?>
				<?php include('nav-projets-web.php');?>
			</div>
						
<?php
include('footer.php');
?> 				