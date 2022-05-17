<nav id="nav-site-1"> 
	<a id="logo-desktop" href="index.php"><img src="images/logo-noir.svg"></a>
	<ul id="ul-nav-site-1">
		<li id="btn-nav2"><a class="
			<?php if($pageNiv1 == $page['logo']){
				echo 'active';
			}?>" href="<?php echo $pageUrl['logo'];?>.php"><?php echo $page['logo'];?></a></li>
		<li><a class="
			<?php if($pageNiv1 == $page['web']){
				echo 'active';
			}?>" href="<?php echo $pageUrl['web'];?>.php"><?php echo $page['web']; ?></a></li>
		<li><a class="
			<?php if($pageNiv1 == $page['print']){
				echo 'active';
			}?>" href="<?php echo $pageUrl['print'];?>.php"><?php echo $page['print']; ?></a></li>
		<li><a class="
			<?php if($pageNiv1 == $page['about']){
				echo 'active';
			}?>" href="<?php echo $pageUrl['about'];?>.php"><?php echo $page['about']; ?></a></li>		
		<li><a class="
			<?php if($pageNiv1 == $page['contact']){
				echo 'active';
			}?>" href="<?php echo $pageUrl['contact'];?>.php"><?php echo $page['contact']; ?></a></li>
	</ul>
</nav>

