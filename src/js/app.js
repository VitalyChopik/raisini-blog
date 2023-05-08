/*
 !(i)
 Код попадает в итоговый файл, только когда вызвана функция, например FLSFunctions.spollers();
 Или когда импортирован весь файл, например import "files/script.js";
 Неиспользуемый (не вызванный) код в итоговый файл не попадает.

 Если мы хотим добавить модуль следует его расскоментировать
 */
import {
  isWebp,
  headerFixed,
  togglePopupWindows,
  addTouchClass,
  addLoadedClass,
  menuInit,
} from './modules';
/* Раскомментировать для использования */
// import { MousePRLX } from './libs/parallaxMouse'

/* Раскомментировать для использования */
// import AOS from 'aos'

/* Раскомментировать для использования */
import Swiper, { Navigation, Pagination } from 'swiper'

// Включить/выключить FLS (Full Logging System) (в работе)
window['FLS'] = location.hostname === 'localhost';

/* Проверка поддержки webp, добавление класса webp или no-webp для HTML
 ! (i) необходимо для корректного отображения webp из css
 */
isWebp();
/* Добавление класса touch для HTML если браузер мобильный */
/* Раскомментировать для использования */
// addTouchClass();
/* Добавление loaded для HTML после полной загрузки страницы */
/* Раскомментировать для использования */
// addLoadedClass();
/* Модуль для работы с меню (Бургер) */
/* Раскомментировать для использования */
// menuInit()

/* Библиотека для анимаций ===============================================================================
 *  документация: https://michalsnik.github.io/aos
 */
// AOS.init();
// =======================================================================================================

// Паралакс мышей ========================================================================================
// const mousePrlx = new MousePRLX({})
// =======================================================================================================

// Фиксированный header ==================================================================================
// headerFixed()
// =======================================================================================================

/* Открытие/закрытие модальных окон ======================================================================
 * Чтобы модальное окно открывалось и закрывалось
 * На окно повешай атрибут data-popup="<название окна>"
 * И на кнопку, которая вызывает окно так же повешай атрибут data-type="<название окна>"

 * На обертку(враппер) окна добавь класс _overlay-bg
 * На кнопку для закрытия окна добавь класс button-close
 */
/* Раскомментировать для использования */
// togglePopupWindows()
// =======================================================================================================

const fearuredSliderClass = document.querySelector('.featured__slider');
if (fearuredSliderClass) {
  const featuredSlider = new Swiper(fearuredSliderClass, {
    slidesPerView: 3,
    modules: [Pagination, Navigation],
    centeredSlides: true,
    spaceBetween: -300,
    grabCursor: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    loop: true,
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 0
      },
      992: {
        slidesPerView: 3,
        spaceBetween: -300,
      }
    }
  });
}

const bisinessSliderClass = document.querySelector('.bisiness__block');
if (bisinessSliderClass) {
  const bisinessSlider = new Swiper(bisinessSliderClass, {
    slidesPerView: 1.6,
    modules: [Pagination, Navigation],
    spaceBetween: 80,
    centeredSlides: true,
    grabCursor: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    // loop: true,
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
      },
      992: {
        slidesPerView: 1.6,
        spaceBetween: 80,
        loop: false,
      }
    }
  });
}
