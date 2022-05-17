<title>ØSLO | 
<?php 

//PAGES NIV 1	
if($pageNiv1 == $page['home']) {
	echo 'Collectif d\'indépendants';
} 
if($pageNiv1 == $page['logo']) {
	echo $page['logo'];
} 
if($pageNiv1 == $page['web']) {
	echo $page['web'];
} 
if($pageNiv1 == $page['print']) {
	echo $page['print'];
} 
if($pageNiv1 == $page['about'] and $pageNiv2=='') {
	echo $page['about'];
} 
if($pageNiv1 == $page['contact']) {
	echo $page['contact'];
} 


?>
</title>