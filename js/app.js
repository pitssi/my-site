
document.addEventListener('scroll', () => {
	var scroll_position = window.scrollY;
	if (scroll_position > 250) {
		header.style.backgroundColor = '#1a1a1ddf';
	} else {
		header.style.backgroundColor = 'transparent';
	}
});

