export default function updateCartIcon() {
    const cart_icon = document.querySelector('#js-cart-icon');
    const cart_icon_count = cart_icon.querySelector('.cart-icon__count');
    const count = cart_icon.querySelector('.count');

   cart_icon_count.textContent = count.textContent;
}