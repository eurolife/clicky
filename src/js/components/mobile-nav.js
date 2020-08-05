require('hc-offcanvas-nav/dist/hc-offcanvas-nav.js');
const nav = jQuery('.js-mobile-nav');

nav.hcOffcanvasNav({
  insertClose: false,
  insertBack: true,
  disableBody: true,
  disableAt: 1024,
  levelTitles: false
});


nav.removeClass('hidden');