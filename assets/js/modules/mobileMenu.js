const initMenuMobile = (menuEl, buttonEl, elementsToAddActiveClass = []) => {
  const menu = document.querySelector(menuEl);
  const button = document.querySelector(buttonEl);

  if (menu && button) {
    const toggleMenu = (event) => {
      event.preventDefault();
      menu.classList.toggle('active');
      button.classList.toggle('active');
      elementsToAddActiveClass.forEach((element) => {
        document.querySelector(element).classList.toggle('active');
      });
      document.body.classList.toggle('overflow-hidden');
    };

    button.addEventListener('click', toggleMenu);
  }
};

export default initMenuMobile;
