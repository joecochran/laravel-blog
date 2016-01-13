window.$ = window.jQuery = require('jquery')
require('bootstrap-sass');
require('vue');

$( document ).ready(function() {
    console.log($.fn.tooltip.Constructor.VERSION);
});
