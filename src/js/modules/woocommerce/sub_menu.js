export default function sub_menu() {
	const menu_items = document.querySelectorAll('.main-menu > li > a');
	const sub_menu = document.querySelector('.main-menu .sub-menu');
	menu_items.forEach((item) => {
		item.addEventListener('click', (e) => {
			e.preventDefault();
			const href = item.getAttribute('href');
			if (href.includes('shop-on-line')) {
				sub_menu.classList.toggle('active');
			} else {
				window.location.href = href;
			}
		});
	});
	if (window.innerWidth < 992) {
		sub_menu.classList.add('active');
	}
}
