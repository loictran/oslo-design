<?php
include('navtag.php');
$pageNiv1 = $page['contact'];
include('header.php');
?> 	

<div id="page-contact" class="contenu-site banner">
	<div id="hero-page-contact" class="hero-projet"></div>	
	<div class="page">
		<h2><?php echo $page['contact']?></h2>
		<p class="display1">Travaillons ensemble !</p>
		<p>N'hésitez pas à contacter l'un d'entre nous directement, ou à nous écrire sur notre adresse commune. Nous serons ravis de découvrir votre projet et de collaborer avec vous ou votre équipe !</p>
		<p class="mail-contact">design@collectif-oslo.com</p>
		<?php include('profils-contact.php'); ?>
	</div>
</div>



<?php
include('footer.php');
?> 	