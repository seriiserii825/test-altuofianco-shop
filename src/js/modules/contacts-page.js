export function contactsPage() {
	const url = window.location.pathname;
	const main_header = document.querySelector('.main-header');
	const main_footer = document.querySelector('.main-footer');
	if (url.includes('contatti') || url.includes('my-account')) {
		main_header.classList.add('main-header--light');
		main_footer.classList.add('main-footer--light');
	}
}