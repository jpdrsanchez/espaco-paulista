const initMenuMobile = (menuEl, buttonEl) => {
  const menu = document.querySelector(menuEl);
  const button = document.querySelector(buttonEl);

  if (menu && button) {
    const toggleMenu = (event) => {
      event.preventDefault();
      menu.classList.toggle('active');
      button.classList.toggle('active');
      document.body.classList.toggle('overflow-hidden');
    };

    button.addEventListener('click', toggleMenu);
  }
};

export default initMenuMobile;
