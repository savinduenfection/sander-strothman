<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package base_theme
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<footer class="footer">
    <div class="footer-content">
        <div class="container">

            <!-- Footer Top Title -->
            <div class="footer-top">
                <div class="row g-0">
                    <div class="col-12 col-md-1 col-lg-1">
                        <div class="layout-bg-org">
                            <div class="top-left-sup">
                                <div class="top-left-curve"></div>
                            </div>
                            <div class="top-space"></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-10 col-lg-10">
                        <div class="top-curve-help">
                            <h2>Innovating skincare
                                solutions from
                                product concept to
                                shelf within one year</h2>
                        </div>
                    </div>
                    <div class="col-12 col-md-1 col-lg-1">
                        <div class="layout-bg-right-org">
                            <div class="top-right-sup">
                                <div class="top-right-curve"></div>
                            </div>
                            <div class="top-space"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Usefull links Section -->
            <div class="usefull-links">
                <div class="row usefull-links-bg g-0">
                    <div class="col-12 col-md-1 col-lg-1"></div>
                    <div class="col-12 col-md-10 col-lg-10">
                        <div class="row g-0 usefull-link-spacing">
                            <div class="col-12 order-3 col-md-8 order-md-1 col-lg-8">
                                <div class="social-share">
                                    <div class="follow-us">
                                        <h3>Follow Us on LinkdIn</h3>
                                        <a href="#"><i class="ri-linkedin-box-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 order-1 col-md-3 order-md-2 col-lg-3">
                                <ul class="important-links">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Case Studios</a></li>
                                    <li><a href="#">Theraputic Focus</a></li>
                                </ul>
                            </div>
                            <div class="col-6 order-2 col-md-1 order-md-3 col-lg-1">
                                <ul class="important-links">
                                    <li><a href="#">Bolg</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-1 col-lg-1 layout-bg-org">
                        <div class="layout-bg-right-org"></div>
                    </div>
                </div>
            </div>

            <!-- Copyright Text -->
            <div class="copyright-text">
                <div class="row g-0">
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="layout-bg-org"></div>
                    </div>
                    <div class="col-7 col-md-4 col-lg-4">
                        <div class="copyright">
                            <p>@copyright 2022 SanderSthroman. All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-5 col-md-4 col-lg-4">
                        <div class="bottom-links">
                            <div class="links-bg">
                                <ul>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Cookies</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</div><!-- #page we need this extra closing tag here -->



<?php wp_footer(); ?>

</html>