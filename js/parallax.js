//-----------------
//Globales
//-----------------
var wHeight,
	posY,
	s1Height,
	padTopMov;



//-----------------
//Initialisation
//-----------------



//DOM LOAD
document.addEventListener('DOMContentLoaded', chargementDOM, false);
function chargementDOM(e) {

	wHeight = window.innerHeight || document.body.clientHeight;


	
	//Events

	window.addEventListener('scroll', monterImage, false);
	

	
	//Déclarations
	monterImage(e);
		


	



}


//-----------------
//Fonctions
//-----------------
function monterImage(e) {			
	wHeight = window.innerHeight || document.body.clientHeight;
	s1 = document.getElementById('hero-home');
	s1Height = s1.offsetHeight;
	posY = document.body.scrollTop || document.documentElement.scrollTop;


	if( posY > wHeight ) {
		s1.style.backgroundPosition = '0px 0px';
	} else {
		s1.style.backgroundPosition = '0px '+ - posY/3 +'px';
	}

}
function gererAccueil() {
	if(posY < wHeight) {
		monterImage(e);
	} 
}









