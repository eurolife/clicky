import 'core-js';
import jQuery from 'jquery';
import AOS from 'aos';
window.$ = window.jQuery = jQuery;

require('./components/mobile-nav');
require('./components/carousel');
require('./components/modal-video');
require('./components/accordion');
require('./components/gallery');

AOS.init();