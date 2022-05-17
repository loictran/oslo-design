//-----------------
//Globales
//-----------------
var wHeight,
	wWidth,
	btnNavMobile,
	btnNav2,
	btnNav2Retour,
	navSite1,
	navSite2,
	lienNosServices,
	drop;




//-----------------
//Initialisation
//-----------------



//DOM LOAD
document.addEventListener('DOMContentLoaded', chargementDOM, false);
function chargementDOM(e) {

	wHeight = window.innerHeight || document.body.clientHeight;
	wWidth = window.innerWidth || document.body.clientWidth;
	btnNavMobile = document.getElementById('nav-icon');
	navSite1 = document.getElementById('nav-site-1');
	navSite2 = document.getElementById('nav-site-2');
	btnNav2 = document.getElementById('btn-nav2');
	btnNav2Retour = document.getElementById('btn-nav2-retour');
	lienNosServices = document.getElementById('lien-nos-services');
	drop = document.getElementById('drop');

	window.addEventListener('resize', resizeWindow, false);
	btnNavMobile.addEventListener('click', animationBouton, false);
	btnNavMobile.addEventListener('click', openHideNav1, false);
	btnNav2.addEventListener('click', openNav2, false);
	btnNav2Retour.addEventListener('click', closeNav2, false);
	btnNav2.addEventListener('mouseenter', openNav2Desktop, false);
	btnNav2.addEventListener('mouseleave', closeNav2Desktop, false);
	navSite2.addEventListener('mouseenter', openNav2Desktop, false);
	navSite2.addEventListener('mouseleave', closeNav2Desktop, false);
	
	//-----------------
	//Déclarations
	//-----------------



}


//-----------------
//Fonctions
//-----------------
function resizeWindow(e) {
	wHeight = window.innerHeight || document.body.clientHeight;
	wWidth = window.innerWidth || document.body.clientWidth;
	btnNavMobile = document.getElementById('nav-icon');
	navSite1 = document.getElementById('nav-site-1');
	navSite2 = document.getElementById('nav-site-2');
	btnNav2 = document.getElementById('btn-nav2');
	btnNav2Retour = document.getElementById('btn-nav2-retour');

	if(wWidth >= 992) {
		navSite1.classList.remove('transition-nav');
		navSite2.classList.remove('transition-nav');
	}
	if(wWidth >= 992 && navSite1.classList.contains('nav-site-1-open')) {
		btnNavMobile.classList.toggle('open');
		navSite1.classList.remove('nav-site-1-open');
		navSite2.classList.remove('nav-site-2-open');
	}
	if(wWidth<992) {
		navSite1.classList.remove('transition-nav');
		navSite2.classList.remove('transition-nav');
	}
}

function animationBouton(e) {
	btnNavMobile.classList.toggle('open');
}

function openHideNav1(e) {
	navSite1.classList.toggle('nav-site-1-open');
	
	navSite2.classList.remove('nav-site-2-open');
	if(wWidth< 992 && navSite2.classList.contains('transition-nav')) {
		navSite2.classList.add('transition-delay');
		} else {
			navSite1.classList.add('transition-nav');
		}


}
function openNav2(e) {
	if(wWidth< 992) {
		navSite2.classList.add('nav-site-2-open');
		navSite2.classList.add('transition-nav');
		}
}
function closeNav2(e) {
	navSite2.classList.remove('nav-site-2-open');
	navSite2.classList.remove('transition-delay');
	navSite1.classList.add('transition-nav');

}
function openNav2Desktop(e) {
	if(wWidth>=992) {
	navSite2.classList.add('nav-site-2-open-desktop');
	navSite2.classList.add('transition-nav');
	lienNosServices.classList.add('hover-nos-services');
	drop.classList.add('hover-drop');
	}
}
function closeNav2Desktop(e) {
	navSite2.classList.remove('nav-site-2-open-desktop');
	lienNosServices.classList.remove('hover-nos-services');
	drop.classList.remove('hover-drop');
}
