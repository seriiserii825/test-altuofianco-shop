import useDecrypt from "../../../vue/hooks/useDecrypt";
import updateCartIcon from "./update-cart-icon";
export default function headerAuth() {
    const main_header = document.querySelector('.main-header');
    const reservation_btn = document.querySelectorAll('[data-id="js-reservation-button"]');
    const logout_btn = document.querySelectorAll('[data-id="js-logout-button"]');
    const altuofianco_user = localStorage.getItem('altuofianco_user');
    const cart_icon = document.querySelector('#js-cart-icon');
    logout_btn.forEach((button) => {
        button.addEventListener('click', function () {
            localStorage.removeItem('altuofianco_user');
            reloadWindow();
        })
    });
    if (altuofianco_user) {
        const decrypted = useDecrypt(altuofianco_user);
        if (decrypted) {
            userIsLoggedIn();
        } else {
            userIsLoggedOut();
        }
    } else {
        userIsLoggedOut();
    }
    function userIsLoggedIn() {
        main_header.classList.add('logged-in');
        reservation_btn.forEach(btn => btn.classList.remove('active'));
        logout_btn.forEach(btn => btn.classList.add('active'))
        cart_icon.classList.add('active');
        setTimeout(() => {
            updateCartIcon();
        }, 300);
    }
    function userIsLoggedOut() {
        main_header.classList.remove('logged-in');
        reservation_btn.forEach(btn => btn.classList.add('active'));
        logout_btn.forEach(btn => btn.classList.remove('active'))
        cart_icon.classList.remove('active');
    }
    function reloadWindow() {
        window.location.reload();
    }
}