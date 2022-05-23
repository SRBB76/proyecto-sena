const navIconoEl = document.querySelector('.nav__icono');
const navCerrarEl = document.querySelector('.nav__cerrar');
const navLista = document.querySelector('.nav__lista');
const navBgRecuEL = document.querySelector('.nav__bgRecubrimiento');

const navAbierto =	 () => {
	navLista.classList.add('show');
	navBgRecuEL.classList.add('active');
	document.body.style='visibility: visible; height:100vh; width:100vw; overflow:hidden;'
}

const navCerrado = () => {
	navLista.classList.remove('show');
	navBgRecuEL.classList.remove('active');
	document.body.style='visibility: visible; height:initial; width:100%; overflow-x:hidden';
}

navIconoEl.addEventListener('click', navAbierto);
navCerrarEl.addEventListener('click', navCerrado);
navBgRecuEL.addEventListener('click', navCerrado);

// aos

AOS.init({
	offset: 200,
	delay: 100,
	duration: 400,
	easing: 'ease',
	once: false,
	mirror: false,
	anchorPlacement: 'top-bottom'
})


