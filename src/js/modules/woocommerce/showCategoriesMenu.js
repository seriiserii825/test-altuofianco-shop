export default function showCategoriesMenu () {
  const catSidebar = document.querySelector('.taxonomy-page__sidebar');
  const showSidebarBtn = document.querySelector('.categories-list__right');
  if (showSidebarBtn) {
    showSidebarBtn.addEventListener('click', () => {
      catSidebar.classList.toggle('active');
    });
  }
  document.addEventListener('click', (e) => {
    if (!e.target.closest('.taxonomy-page__sidebar') && catSidebar.classList.contains('active')) {
      catSidebar.classList.remove('active');
    }
  });
};
