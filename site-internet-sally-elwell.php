<?php
include('navtag.php');
$pageNiv1 = $page['web'];
$pageNiv2 = $projetSiteWeb[12];
include('header.php');
?> 		
		<div class="contenu-site banner">
			
			<div id="hero-<?php echo $projetSiteWebUrl[12]?>" class="hero-projet">
			</div>
				
			<div class="page">
				<h2><?php echo $projetSiteWeb[12]?></h2>
				<h5><?php echo $projetSiteWebCategorie[12]?></h5>
				<?php include('nav-projets-web.php');?>
				<?php include( $contenuProjetWeb[12].'.php');?>
				<?php include('nav-projets-web.php');?>
			</div>
						
<?php
include('footer.php');
?> 				