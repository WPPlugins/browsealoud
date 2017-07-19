<?php

/*
Plugin Name: Browsealoud
Plugin URI:  https://www.texthelp.com
Description: Websites made more accessible with easy speech, reading and translation tools. This plugin takes care of the Browsealoud installation process for all Wordpress blogs and websites. If you hold a licence for Browsealoud simply activate this plugin and you will see that Browsealoud automatically appears. If you don't have a licence you might be interested in our <a href="https://trybrowsealoud.texthelp.com/">30 day free trial</a>.
Version:     1.3
Author:      Texthelp
Author URI:  https://www.texthelp.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

function browsealoudScript() {
    wp_enqueue_script("Browsealoud", "http://www.browsealoud.com/plus/scripts/ba.js", array(), false, true);
}

add_action('wp_footer', 'browsealoudScript');
