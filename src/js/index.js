// custom
import './custom/app';

// use jquery from parent theme
let $;

if (window.jQuery) {
    $ = window.jQuery;
}

console.log($('.btn'));
