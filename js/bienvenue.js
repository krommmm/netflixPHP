
const images = document.querySelectorAll('.row__poster');
var slide = document.querySelector('.row__posters');
var slides = document.querySelectorAll('.row_posters');
var slideWidth = slide.getBoundingClientRect().width;
const nav = document.getElementById('nav');

var angleLeft = document.querySelectorAll('.fa-angle-left');
var angleRight = document.querySelectorAll('.fa-angle-right');

var slide1 = document.querySelector('.slide1');
var slide2 = document.querySelector('.slide2');
var slide3 = document.querySelector('.slide3');
var slide4 = document.querySelector('.slide4');
var slide5 = document.querySelector('.slide5');
var slide6 = document.querySelector('.slide6');
var slide7 = document.querySelector('.slide7');
var slide8 = document.querySelector('.slide8');

var cpt1 = 0;
var cpt2 = 0;
var cpt3 = 0;
var cpt4 = 0;
var cpt5 = 0;
var cpt6 = 0;
var cpt7 = 0;
var cpt8 = 0;

//carousels[index].cpt
var carousels = [
	{ slide: slide1, cpt: 0 },
	{ slide: slide2, cpt: 0 },
	{ slide: slide3, cpt: 0 },
	{ slide: slide4, cpt: 0 },
	{ slide: slide5, cpt: 0 },
	{ slide: slide6, cpt: 0 },
	{ slide: slide7, cpt: 0 },
	{ slide: slide8, cpt: 0 },
];

// Gestionnaire d'évènement qui change la classe de la nav bar
window.addEventListener('scroll', () => {
	if (window.scrollY >= 100) {
		nav.classList.add('nav__black');
	} else {
		nav.classList.remove('nav__black');
	}
});

//Getionnaire d'evenement qui ajoute et enlève une classe "priority" qui gère le délais de transition
images.forEach((image) => {
	image.addEventListener('mouseover', function () {
		setTimeout(() => {
			images.forEach((image) => image.classList.remove('priority'));
			image.classList.add('priority');
		}, 300);
	});
});

//function pour tourner
const scrollCarousel = (slide, cpt) => {
	var transfert = slideWidth * cpt;
	slide.style.transform = `translateX(${transfert}px)`;
};

//tourner à droite
angleLeft.forEach((left, index) => {
	left.addEventListener('click', () => {
		carousels[index].cpt++;
		if (carousels[index].cpt > 0) {
			carousels[index].cpt = 0;
		} else {
			scrollCarousel(carousels[index].slide, carousels[index].cpt);
		}
	});
});

//tourner à gauche
angleRight.forEach((right, index) => {
	right.addEventListener('click', () => {
		carousels[index].cpt--;
		let nbElementSlide = carousels[index].slide.childElementCount;
		let elementWidth = carousels[index].slide.firstElementChild.getBoundingClientRect().width;
		let nbElementVisible = slideWidth / elementWidth;
		let nbClick = Math.floor(nbElementSlide / nbElementVisible);
		console.log('nb click = ' + nbClick);
		let nbClickClone = nbClick * -1;
		console.log('nb click clone = ' + nbClickClone);
		console.log('index = ' + carousels[index].cpt);

		console.log(nbClick);
		if (carousels[index].cpt > nbClickClone - 1) {
			scrollCarousel(carousels[index].slide, carousels[index].cpt);
		} else {
			carousels[index].cpt = 0;
			scrollCarousel(carousels[index].slide, carousels[index].cpt);
		}
	});
});

//Rechagement de la page onresize
window.onresize = () =>{
	window.location.reload();
}
	