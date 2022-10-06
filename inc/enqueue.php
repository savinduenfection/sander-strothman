<?php
/**
 * Enqueue scripts and styles.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @package base_theme
 */

 //Enqueue theme styles
 function base_theme_style(){

     wp_register_style('theme', get_template_directory_uri() . '/css/theme.css', array(), false, 'all');
     wp_enqueue_style('theme');

     wp_register_style('animatecss', get_template_directory_uri() . '/assets/animate-css/animate.min.css', array(), false, 'all');
     wp_enqueue_style('animatecss');

     wp_register_style('remixiconcdn', 'https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css', array(), false, 'all');
     wp_enqueue_style('remixiconcdn');

     wp_register_style('magnificcdn', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css', array(), false, 'all');
     wp_enqueue_style('magnificcdn');

     wp_register_style('fancyboxcdncss', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css', array(), false, 'all');
     wp_enqueue_style('fancyboxcdncss');

 }
 add_action('wp_enqueue_scripts','base_theme_style');


//Enqueue theme scripts
 function base_theme_scripts(){

    wp_enqueue_script('jquery');

     wp_register_script('theme', get_template_directory_uri() . '/js/theme.js','jquery',false,true);
     wp_enqueue_script('theme');

     wp_register_script('magnificjs', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js','jquery',false,true);
     wp_enqueue_script('magnificjs');

     wp_register_script('fancyboxcdnjs', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js','jquery',false,true);
     wp_enqueue_script('fancyboxcdnjs');

 }
 add_action('wp_enqueue_scripts', 'base_theme_scripts');