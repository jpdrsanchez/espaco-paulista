import initMenuMobile from './modules/mobileMenu';
initMenuMobile('[data-menu="wrapper"]', '[data-menu="button"]', [
  '.header',
  '.header__link',
  '.header__social',
]);

import initLightBox from './modules/lightBox';
initLightBox();

import initMasker from './modules/maskForm';
initMasker();
