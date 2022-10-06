<?php 
/** 
* Template Name: Home Page
*
* @package base_theme
**/ 
get_header();
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="page-content home-page">
    <section class="hero-section"></section>

    <!-- Accordion Section -->
    <section class="accordion-section">
        <div class="container-fluid accordion-spacing">
            <div class="section-title">
                <h2>Theraputic Focus</h2>
                <p>A flexible approach, customized to meet your requirements</p>
            </div>
            <div class="row accordion-row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="accordian-image">
                        <img draggable="false" class="img-fluid" src="./wp-content/uploads/2022/10/accordian-main.png"
                            alt="accordian-image">
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-5">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Cosmetics & skincare
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the first item's
                                    accordion body.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Health Supplements
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                    accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Wound Care
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the third item's
                                    accordion body. Nothing more exciting happening here in terms of content, but just
                                    filling up the space to make it look, at least at first glance, a bit more
                                    representative of how this would look in a real-world application.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    Biocides
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the third item's
                                    accordion body. Nothing more exciting happening here in terms of content, but just
                                    filling up the space to make it look, at least at first glance, a bit more
                                    representative of how this would look in a real-world application.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What Our Client Say Section -->
    <section class="third-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-2 col-lg-2"></div>
                <div class="col-12 col-md-8 col-lg-8">
                    <h2>What our clients say</h2>
                    <p>
                        "SanderStrothmann provides excellent services that range from the sourcing of premium raw
                        materials to formulation and quality assurance. Thereby giving
                        us peace of mind during the entire
                        GTM process."
                    </p>
                </div>
                <div class="col-12 col-md-2 col-lg-2"></div>
            </div>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section class="contact-us-section">
        <div class="container">
            <div class="section-bg" style="background-image: url(./wp-content/uploads/2022/10/contact-us.png)">
                <div class="row">
                    <div class="col-12 col-md-12 col-md-12">
                        <div class="row">
                            <div class="col-12 col-md-12-col-lg-12">
                                <div class="content">
                                    <div class="title">
                                        <h2>Connect with Us</h2>
                                        <p>
                                            Metus, diam pretium at at morbi vulputate et. Tellus ipsum sollicitudin.
                                        </p>
                                    </div>
                                    <div class="space">
                                        <div class="row">
                                            <div class="col-3 space-1"></div>
                                            <div class="col-6 space-2"></div>
                                            <div class="col-3 space-3"></div>
                                        </div>
                                    </div>
                                    <div class="action">
                                        <button class="button alternative" onclick="location.href='#'" type="button">Get Start</button>
                                        <a href="#">VIEW CONTACT INFO</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Latest News Section -->
    <section class="fourth-section">
        <div class="container">
            <h2>Our Latest News</h2>
            <div class="read-more">
                <button class="button alternative" onclick="location.href='#'" type="button">Read More</button>
            </div>
            <div class="row g-0 owl-carousel owl-theme latest-news-carosal">
                <div class="item carosal-width col-12 col-md-4 col-lg-4">
                    <div class="news-card">
                        <div class="image">
                            <img draggable="false" class="img-fluid" src="./wp-content/uploads/2022/10/news-1.png"
                                alt="news">
                        </div>
                        <div class="card-bottom">
                            <div class="news-title">
                                <a href="#">
                                    <h6>Frederick Fong joins our Singapore office!</h6>
                                </a>
                                <span>20 April, 2022</span>
                            </div>
                            <div class="read-time">
                                <span>2 min read</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item carosal-width col-12 col-md-4 col-lg-4">
                    <div class="news-card">
                        <div class="image">
                            <img draggable="false" class="img-fluid" src="./wp-content/uploads/2022/10/news-1.png"
                                alt="news">
                        </div>
                        <div class="card-bottom">
                            <div class="news-title">
                                <a href="#">
                                    <h6>Frederick Fong joins our Singapore office!</h6>
                                </a>
                                <span>20 April, 2022</span>
                            </div>
                            <div class="read-time">
                                <span>2 min read</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item carosal-width col-12 col-md-4 col-lg-4">
                    <div class="news-card">
                        <div class="image">
                            <img draggable="false" class="img-fluid" src="./wp-content/uploads/2022/10/news-1.png"
                                alt="news">
                        </div>
                        <div class="card-bottom">
                            <div class="news-title">
                                <a href="#">
                                    <h6>Frederick Fong joins our Singapore office!</h6>
                                </a>
                                <span>20 April, 2022</span>
                            </div>
                            <div class="read-time">
                                <span>2 min read</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item carosal-width col-12 col-md-4 col-lg-4">
                    <div class="news-card">
                        <div class="image">
                            <img draggable="false" class="img-fluid" src="./wp-content/uploads/2022/10/news-1.png"
                                alt="news">
                        </div>
                        <div class="card-bottom">
                            <div class="news-title">
                                <a href="#">
                                    <h6>Frederick Fong joins our Singapore office!</h6>
                                </a>
                                <span>20 April, 2022</span>
                            </div>
                            <div class="read-time">
                                <span>2 min read</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
get_footer();