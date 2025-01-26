<?php
//https://developer.woocommerce.com/docs/classic-theme-development-handbook/
add_action('after_setup_theme', function () {
    add_theme_support('woocommerce');
});