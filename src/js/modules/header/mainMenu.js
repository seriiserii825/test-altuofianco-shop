export function mainMenu() {
    const main_header = document.querySelector('.main-header');
    const header_mobile = document.querySelector('#js-header-mobile');
    const sandwichWrap = document.querySelector('#js-sandwitch-wrap');
    sandwichWrap.addEventListener('mousedown', function (e) {
        e.preventDefault();
        if (header_mobile.classList.contains('active')) {
            header_mobile.classList.remove('active');
            main_header.classList.remove('dark');
        } else {
            header_mobile.classList.add('active');
            main_header.classList.add('dark');
        }
        sandwichWrap.classList.toggle('sandwitch--active');
    });
}