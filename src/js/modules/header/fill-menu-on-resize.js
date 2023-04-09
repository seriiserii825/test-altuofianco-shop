export default function fillMenuOnResize() {
    const main_menu = document.querySelector('#js-main-menu');
    const top_info = document.querySelector('#js-top-info');
    menuBehavior();
    window.addEventListener('resize', function () {
        menuBehavior();
    });
    function menuBehavior() {
        if (window.innerWidth < 1340) {
            top_info.style.display = 'none';
            main_menu.style.display = 'none';
        } else {
            top_info.style.display = 'block';
            main_menu.style.display = 'flex';
        }
    }
}