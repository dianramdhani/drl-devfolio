<?php

function drl_devfolio_enqueue_styles_scripts()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icons', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css');
    wp_enqueue_style('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css');
    wp_enqueue_style('devfolio', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('purecounter', get_template_directory_uri() . '/assets/vendor/purecounter/purecounter.js', array(), null, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), null, true);
    wp_enqueue_script('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array(), null, true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('typed', get_template_directory_uri() . '/assets/vendor/typed.js/typed.min.js', array(), null, true);
    wp_enqueue_script('php-email-form', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array(), null, true);
    wp_enqueue_script('devfolio', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'drl_devfolio_enqueue_styles_scripts');

require_once get_template_directory() . '/classes/class-drl-devfolio-customize.php';
new DRLDevFolioCustomize();
