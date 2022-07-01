<?php 
  $menuItems = [['Home', './'], ['Sobre', './sobre.php'], ['Espaço', './espaco.php'], ['Eventos', './eventos.php'], ['Gastronomia', './gastronomia.php']];
?>

<header class="header">
  <div class="container header__container">
    <a href="./" class="header__link">
      <img src="./assets/images/logo.svg" alt="Logotipo Espaço Paulista">
      <span class="visually-hidden">Espaço Paulista, onde tudo acontece!</span>
    </a>
    <nav class="header__social">
      <ul class="header__social__list">
        <li class="header__social__item">
          <a href="https://whatsapp.com" class="header__social__link">
            <ion-icon name="logo-whatsapp"></ion-icon>
            <span class="visually-hidden">Whatsapp</span>
          </a>
        </li>
        <li class="header__social__item">
          <a href="https://instagram.com" class="header__social__link">
            <ion-icon name="logo-instagram"></ion-icon>
            <span class="visually-hidden">Instagram</span>
          </a>
        </li>
        <li class="header__social__item">
          <a href="https://facebook.com" class="header__social__link">
            <ion-icon name="logo-facebook"></ion-icon>
            <span class="visually-hidden">Facebook</span>
          </a>
        </li>
      </ul>
    </nav>
    <nav class="menu">
      <div class="menu__wrapper" data-menu="wrapper">
        <div>
          <ul class="menu__list">
            <?php foreach($menuItems as $item) : ?>
            <li class="menu__item">
              <a href="<?= $item[1]; ?>" class="menu__link"><?= $item[0]; ?></a>
            </li>
            <?php endforeach; ?>
            <li class="menu__item">
              <a href="./contato.php" class="siteButton menu__contact">
                <svg width="40" height="53" viewBox="0 0 40 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9714 28.1539V43.6471C14.9714 46.9753 15.3282 49.0401 16.0552 49.8416C17.0313 50.9895 18.5123 51.56 20.4914 51.56H22.4975V53H0V51.56H1.97913C4.19387 51.56 5.79603 50.8265 6.7452 49.3729C7.25682 48.5714 7.52609 46.656 7.52609 43.6471V9.35294C7.52609 6.02473 7.18277 3.95989 6.48267 3.1584C5.46617 2.01051 3.97173 1.43996 1.97913 1.43996H0V0H19.246C23.9448 0 27.6405 0.495835 30.3601 1.46713C33.0663 2.43842 35.3484 4.08894 37.2131 6.41189C39.0778 8.72805 40 11.4721 40 14.6441C40 18.9708 38.5863 22.4892 35.759 25.1925C32.9317 27.8958 28.9465 29.2543 23.7832 29.2543C22.5177 29.2543 21.1579 29.1592 19.6903 28.9758C18.2161 28.806 16.6476 28.5207 14.9714 28.1539ZM14.9714 25.9125C16.3312 26.1774 17.5429 26.3811 18.5998 26.4966C19.6432 26.6324 20.552 26.6936 21.2925 26.6936C23.9717 26.6936 26.2673 25.6408 28.2127 23.5488C30.1515 21.4567 31.1276 18.7534 31.1276 15.4388C31.1276 13.1498 30.6631 11.017 29.7408 9.06087C28.8186 7.1047 27.4992 5.63757 25.8095 4.66628C24.1064 3.69499 22.1811 3.19915 20.0269 3.19915C18.7075 3.19915 17.0313 3.45047 14.9714 3.9463V25.9125Z" fill="#fff"></path>
                </svg>
                <span>Solicitar Orçamento</span>
                <svg width="56" height="53" viewBox="0 0 56 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M16.986 32.9066L12.261 43.8334C11.3953 45.8395 10.9456 47.3473 10.9456 48.3436C10.9456 49.1275 11.3281 49.8316 12.0933 50.4294C12.8449 51.0139 14.4893 51.4058 17.0061 51.5918V53H0.502441V51.5918C2.6904 51.2132 4.09311 50.7216 4.73742 50.1039C6.05288 48.8817 7.50256 46.3908 9.09319 42.6511L27.5096 0H28.8117L47.0134 43.1028C48.4765 46.5701 49.8054 48.8086 51 49.8515C52.1947 50.8811 53.8591 51.4523 56.0001 51.5852V52.9934H35.3621V51.5852C37.4427 51.4789 38.8521 51.1401 39.5904 50.5556C40.3287 49.971 40.6844 49.2537 40.6844 48.4034C40.6844 47.2809 40.1609 45.514 39.1474 43.0895L34.8722 32.9L26.0398 11.9962L16.986 32.9066Z" fill="#fff"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.6111 37.3612C15.8683 33.2212 20.6562 28.5827 33.3477 22.5532V24.6067C18.8422 31.7253 13.0832 42.4262 9.56299 49.617L12.6111 37.3612Z" fill="#fff"></path>
                </svg>
              </a>
            </li>
          </ul>
          <div class="menu__divisor">
            <img src="./assets/images/a.svg" alt="a" aria-hidden="true">
          </div>
          <ul class="menu__social__list">
            <li class="menu__social__item">
              <a href="https://whatsapp.com" class="menu__social__link">
                <ion-icon name="logo-whatsapp"></ion-icon>
                <span class="visually-hidden">Whatsapp</span>
              </a>
            </li>
            <li class="menu__social__item">
              <a href="https://instagram.com" class="menu__social__link">
                <ion-icon name="logo-instagram"></ion-icon>
                <span class="visually-hidden">Instagram</span>
              </a>
            </li>
            <li class="menu__social__item">
              <a href="https://facebook.com" class="menu__social__link">
                <ion-icon name="logo-facebook"></ion-icon>
                <span class="visually-hidden">Facebook</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <button aria-label="Abrir Menu" type="button" class="menu__button" data-menu="button"></button>
    </nav>
  </div>
</header>