export default function categoriesList () {
  const catList = document.querySelectorAll(".categories-list a");
  const href = window.location.pathname;
  const mainMenuItem = document.querySelectorAll('#js-main-menu a');
  catList.forEach((item) => {
    const term = item.className;
    if (href.includes(term)) {
      item.classList.add("active");
    }
  });
  if (href.includes('product-category')) {
    mainMenuItem.forEach(item => {
      const itemText = item.textContent;
      if (itemText === 'Prodotti') {
        item.closest('li').classList.add('current-menu-item');
      }
    });
  }
}
