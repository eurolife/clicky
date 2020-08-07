import $ from 'jquery';
window.$ = $;
window.jQuery = $;
let owlCarousel = require('owl.carousel');

$('.owl-carousel').owlCarousel({
  //nav:true,
  items: 1,
  center: true,
  margin: 50,
  loop: true,
  lazyLoad: true,
  responsive: {
    // 768: {
    //   items: 2,
    //   margin: -40,
    // },
    1024: {
      items: 2,
      margin: -70
    }
  }
});