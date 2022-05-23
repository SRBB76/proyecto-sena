

let campos = document.querySelectorAll('.login__campo');

for (let i = 0; i < campos.length; i++) {
	campos[i].firstElementChild.addEventListener('focus', () => {
		campos[i].querySelector('label').classList.add('top');
		campos[i].querySelector('.borde').style.transform = 'scale(1)';
	});
	campos[i].firstElementChild.addEventListener('blur', () => {
		if (campos[i].firstElementChild.value.length <= 0) {
			campos[i].querySelector('label').classList.remove('top');
		}
		campos[i].querySelector('.borde').style.transform = 'scale(0)';
	});
}

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


