<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package base_theme
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>
        <?php wp_title( '-', true, 'right' ); ?>
    </title>
    <?php wp_head(); ?>
</head>

<body>
    <div id="page" class="site-main">
        <header class="main-header">
            <div class="container">
                <div class="row main-header-row g-0">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="main-logo">
                            <a href="#">
                                <img class="img-fluid" draggable="false"
                                    src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>"
                                    alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 main-nav-align">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
                                <?php wp_nav_menu(array(
    									'theme_location'  => 'primary',
										'container'       => 'main-header',
    									'container_class' => 'navbar',
    									'container_id'    => 'navbarSupportedContent',
    									'menu_class'      => 'navbar-nav me-auto',
    									'fallback_cb'     => '',
										'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
    									'walker'          => new WP_Bootstrap_Navwalker(),
									));?>
                                <!-- The WordPress Menu goes here -->
                            </div>
                        </nav>
                        <div class="call-to-action">
                            <button class="button alternative" onclick="location.href='#'" type="button">GET STARTED</button>
                        </div>
                    </div>
                </div>
            </div>
        </header>