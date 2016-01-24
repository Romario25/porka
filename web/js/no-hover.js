var	enableTimer = 0;

window.addEventListener('scroll', function() {
	clearTimeout(enableTimer);
	addHoverClass();
	enableTimer = setTimeout(removeHoverClass, 250);
}, false);

function removeHoverClass() {
	document.body.classList.remove('disable-hover');
}

function addHoverClass() {
	document.body.classList.add('disable-hover');
}