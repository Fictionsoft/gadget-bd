<?php get_header(); ?>
<div class="container">
    <div class="slider">
        <?php if( function_exists('cyclone_slider') ) cyclone_slider('home-slider'); ?>
    </div>
</div>

<div class="container">
    <div class="main_section">
        <div class="col-sm-2 removing_padding">
            <!--<div class="col-sm-6">
            <div  class="side_brand">
                <?php /*require_once('inc/home_product_brand.php') */?>
            </div>
        </div>-->
            <div  class="side_cat">
                <?php require_once('inc/home_product_nav.php') ?>
            </div>
        </div>

        <div class="col-sm-10 removing_padding">
            <div class="main_content">
                <?php require_once('inc/home_product_cat.php') ?>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>

