<?php get_header();?>
    <div class="product_content_section">
        <div class="container">
            <div class="page_wrap">

                <div class="url_based_section">
                    <div class="row">
                        <div class="url_based">
                            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                                <?php if(function_exists('bcn_display'))
                                {
                                    bcn_display();
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="store_page">
                    <div id="shop_section">
                        <div class="row">

                            <?php if ( is_shop() ): ?>

                                <div class="col-sm-3 padding_remove">
                                    <div class="product_sidebar">
                                        <?php dynamic_sidebar('shop-sidebar');?>

                                        <div  class="brand_categories">
                                            <?php require_once('inc/brand_cat.php'); ?>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="product_section">
                                        <div class="products_content">
                                            <?php woocommerce_content(); ?>
                                        </div>
                                    </div>
                                </div>

                            <?php elseif(is_product_category()): ?>
                                <div class="col-sm-3 padding_remove">
                                    <div class="product_sidebar">
                                        <?php dynamic_sidebar('shop-sidebar');?>

                                        <div  class="brand_categories">
                                            <?php require_once('inc/brand_cat.php'); ?>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-sm-9">
                                    <div class="product_section">
                                        <div class="products_content">
                                            <?php woocommerce_content(); ?>
                                        </div>
                                    </div>

                                </div>
                            <?php else:?>

                                <div class="col-sm-3 padding_remove">
                                    <div class="product_sidebar">
                                        <?php dynamic_sidebar('shop-sidebar');?>

                                        <div  class="brand_categories">
                                            <?php require_once('inc/brand_cat.php'); ?>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-sm-9">
                                    <div class="product_section">
                                        <div class="products_content">
                                            <?php woocommerce_content(); ?>
                                        </div>
                                    </div>

                                </div>
                            <?php endif;?>
                        </div>
                    </div> <!--shop_section-->
                </div>
            </div>
        </div>
    </div>

<?php get_footer();?>
