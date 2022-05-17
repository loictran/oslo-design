<?php
include('navtag.php');
$pageNiv1 = $page['web'];
$pageNiv2 = $projetSiteWeb[10];
include('header.php');
?> 		
		<div class="contenu-site banner">
			
			<div id="hero-<?php echo $projetSiteWebUrl[10]?>" class="hero-projet">
			</div>
				
			<div class="page">
				<h2><?php echo $projetSiteWeb[10]?></h2>
				<h5><?php echo $projetSiteWebCategorie[10]?></h5>
				<?php include('nav-projets-web.php');?>
				<?php include( $contenuProjetWeb[10].'.php');?>
				<?php include('nav-projets-web.php');?>
			</div>
						
<?php
include('footer.php');
?> 				