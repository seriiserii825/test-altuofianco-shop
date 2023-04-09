export default function activeMenuOnProductPage(){
  const mainMenuItem = document.querySelectorAll('#js-main-menu a');
  const href = window.location.pathname;
  if (href.includes('product')) {
    mainMenuItem.forEach(item => {
      const itemText = item.textContent;
      if (itemText === 'Prodotti') {
        item.closest('li').classList.add('current-menu-item');
      }
    });
  }
}
