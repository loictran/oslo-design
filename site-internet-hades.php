<?php
include('navtag.php');
$pageNiv1 = $page['web'];
$pageNiv2 = $projetSiteWeb[5];
include('header.php');
?> 		
		<div class="contenu-site banner">
			
			<div id="hero-<?php echo $projetSiteWebUrl[5]?>" class="hero-projet">
			</div>
				
			<div class="page">
				<h2><?php echo $projetSiteWeb[5]?></h2>
				<h5><?php echo $projetSiteWebCategorie[5]?></h5>
				<?php include('nav-projets-web.php');?>
				<?php include( $contenuProjetWeb[5].'.php');?>
				<?php include('nav-projets-web.php');?>
			</div>
						
<?php
include('footer.php');
?> 				