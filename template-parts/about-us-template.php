<?php 
/** 
* Template Name: About Us Page
*
* @package base_theme
**/ 
get_header();
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="page-content about-us-page">
    <section class="hero-section"></section>

    <!-- Simple Tiles Section -->
    <section class="second-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-8">
                    <div class="tile-one tile" style="background-image: url(../wp-content/uploads/2022/10/tile-1.png)">
                        <div class="wrapper">
                            <h2>600</h2>
                            <h5>New Products Every Year</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="tile-two tile" style="background-image: url(../wp-content/uploads/2022/10/tile-2.png)">
                        <div class="wrapper">
                            <h2>2 sec</h2>
                            <h5>per Product Sold</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 verticle-gap">
                    <div class="tile-three tile"
                        style="background-image: url(../wp-content/uploads/2022/10/tile-3.png)">
                        <div class="wrapper">
                            <h2>140+</h2>
                            <h5>Employee</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-8 verticle-gap">
                    <div class="tile-four tile" style="background-image: url(../wp-content/uploads/2022/10/tile-4.png)">
                        <div class="wrapper">
                            <h2>20+</h2>
                            <h5>Years of Experience</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team section -->
    <section class="team-section">
        <div class="section-title">
            <h2>Senior Management</h2>
        </div>
        <div class="container">
            <div class="row team-members">
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="team-member">
                        <div class="member-image">
                            <img class="img-fluid" draggable="false" src="../wp-content/uploads/2022/10/member-1.png" alt="member">
                        </div>
                        <div class="member-title">
                            <h2>Michael Sander</h2>
                            <span>Founder</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="member-image">
                        <img class="img-fluid" draggable="false" src="../wp-content/uploads/2022/10/member-2.png" alt="member">
                    </div>
                    <div class="member-title">
                        <h2>Rene Strothmann</h2>
                        <span>Founder</span>
                    </div>
                </div>
            </div>
            <div class="row team-members-position">
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="team-member">
                        <div class="member-image">
                            <img class="img-fluid" draggable="false" src="../wp-content/uploads/2022/10/placeholder.png" alt="member">
                        </div>
                        <div class="member-title">
                            <h2>Name</h2>
                            <span>Position</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="member-image">
                    <img class="img-fluid" draggable="false" src="../wp-content/uploads/2022/10/placeholder.png" alt="member">
                    </div>
                    <div class="member-title">
                        <h2>Name</h2>
                        <span>Position</span>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="member-image">
                    <img class="img-fluid" draggable="false" src="../wp-content/uploads/2022/10/member-3.png" alt="member">
                    </div>
                    <div class="member-title">
                        <h2>Frederick Fong</h2>
                        <span>Position</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?php
get_footer();