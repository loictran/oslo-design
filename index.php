<?php 
include('navtag.php');
$pageNiv1 = $page['home'];
include('header.php');

?> 		
		<div class="contenu-site">
			<section id="hero-home" class="parallax bg">
				<div>
					<img id="logo-hero" src="images/logo-noir.svg">
					<p class="sous-titre-h1">TOULOUSE - PARIS - BAYONNE</p>
					<div class="left">
						<h1 id="h1-hero-home">Créateurs indépendants</h1>
						<p class="text-hero">Nous sommes deux créateurs indépendants et passionnés,
<br>disponibles pour aller au bout de vos idées !</p>
						<a class="cta" href="https://design.collectif-oslo.com/contact.php">Contactez-nous</a>
					</div>
					
				</div>
			</section>
			<section class="section-derniers-projets static">
				<h2>Dernières réalisations</h2>
				<p class="display1">2021</p>
				<p>Nous sommes fiers de vous présenter ici nos dernières réalisations toutes catégories confondues.</p>

				<div class="conteneur-vignettes">



					<div class="content-projet figureL">
						<a href="<?php echo $projetLogoUrl[1]?>.php"><img src="images/projet-<?php echo $projetLogoUrl[1]?>-miniature.jpg"/>
							<div class="survol">
								<h4><?php echo $projetLogo[1]?>
									<br><span class="thin"><?php echo $projetLogoCategorie[1]?></span>
								</h4>
							</div>	
						</a>
					</div>

					<div class="content-projet figureC">
						<a href="<?php echo $projetSiteWebUrl[5]?>.php"><img src="images/projet-<?php echo $projetSiteWebUrl[5]?>-miniature.jpg"/>
							<div class="survol">
								<h4><?php echo $projetSiteWeb[5]?>
									<br><span class="thin"><?php echo $projetSiteWebCategorie[5]?></span>
								</h4>
							</div>
						</a>
					</div>

					<div class="content-projet figureR">
						<a href="<?php echo $projetLogoUrl[9]?>.php"><img src="images/projet-<?php echo $projetLogoUrl[9]?>-miniature.jpg"/>
							<div class="survol">
								<h4><?php echo $projetLogo[9]?>
									<br><span class="thin"><?php echo $projetLogoCategorie[9]?></span>
								</h4>
							</div>
						</a>
					</div>




				</div>	
			</section>

			<section id="section-about">
				<h2>Qui sommes-nous ?</h2>
				<p class="display1">Clara et Loïc</p>
				<p class="section-derniers-projets">ØSLO Design, c'est deux créateurs indépendants et passionnés qui se regroupent ici. Nous proposons des solutions concrètes pour la communication visuelle de votre porjet ! Nous avons à cœur de vous aider à communiquer avec votre audience de la façon qui vous correspond. </p>
				<div class="conteneur-cta"><a class="cta" href="https://design.collectif-oslo.com/qui-sommes-nous.php">En savoir plus</a></div>

			</section>
			<section class="section-derniers-projets" id="section-contact">
				<h2>Un projet ?</h2>
				<p class="display1">Discutons-en !</p>
				<p>N'hésitez pas à contacter un créateur directement, ou à nous écrire sur notre adresse commune. Nous serons ravis de découvrir votre projet et de collaborer avec vous ou votre équipe !</p>
				<p class="mail-contact">design@collectif-oslo.com</p>
				<?php include('profils-contact.php'); ?>
			</section>

					
			
<?php
include('footer.php');
?> 				