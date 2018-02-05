<?php

    $taxonomy     = 'product_cat';
    $orderby      = 'name';
    $show_count   = 0;      // 1 for yes, 0 for no
    $pad_counts   = 0;      // 1 for yes, 0 for no
    $hierarchical = 1;      // 1 for yes, 0 for no
    $title        = '';
    $empty        = 0;

    $args = array(
        'taxonomy'     => $taxonomy,
        'orderby'      => $orderby,
        'show_count'   => $show_count,
        'pad_counts'   => $pad_counts,
        'hierarchical' => $hierarchical,
        'title_li'     => $title,
        'hide_empty'   => $empty
    );

    $all_categories = get_terms( $args );  ?>



    <?php
    foreach ($all_categories as $cat) {
        if($cat->parent == 0) {
            $category_id = $cat->term_id;
            //echo  '<div class="cat_name_pad"><span>'.  $cat->name.'</span></div>' ;

            $cat_thumb_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
            $shop_catalog_img = wp_get_attachment_image_src( $cat_thumb_id, 'shop_catalog' );
            $term_link = get_term_link( $cat, 'product_cat' );?>

            <div class="main_image_section">
                <div class="col-sm-4 removing_padding main_img_width">
                    <div class="main_image ">
                        <div class="img_heading">
                            <h2><?php echo '<br /><a href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a>'; ?></h2>
                        </div>
                        <a href="<?php echo $term_link; ?>"><img src="<?php echo $shop_catalog_img[0]; ?>" alt="<?php echo $cat->name; ?>" /></a>
                    </div>
                </div>

            <?php
            //echo '<br /><a href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a>';

            $args2 = array(
                'taxonomy'     => $taxonomy,
                'child_of'     => 0,
                'parent'       => $category_id,
                'orderby'      => $orderby,
                'show_count'   => $show_count,
                'pad_counts'   => $pad_counts,
                'hierarchical' => $hierarchical,
                'title_li'     => $title,
                'hide_empty'   => $empty,
                'number'   => 6
            );
            ?>


            <div class="sub_image">

            <?php
            $sub_cats = get_categories( $args2 );
            if($sub_cats) {
                foreach($sub_cats as $sub_category) {
                   //echo '<br /><a href="'. get_term_link($sub_category->slug, 'product_cat') .'">'. $sub_category->name .'</a>';
                    //echo  $sub_category->name ;
                    $cat_thumb_id = get_woocommerce_term_meta( $sub_category->term_id, 'thumbnail_id', true );
                    $shop_catalog_img = wp_get_attachment_image_src( $cat_thumb_id, 'shop_catalog' );
                    $term_link = get_term_link( $sub_category, 'product_cat' );?>

                        <div class="col-sm-2 removing_padding sub_cat_img_width">
                                <a href="<?php echo $term_link; ?>"><img src="<?php echo $shop_catalog_img[0]; ?>" alt="<?php echo $sub_category->name; ?>" /></a>
                        </div>

                    <?php
                }?>
                   </div> <!--end sub_image-->
                </div> <!--end main_image_section-->
                <?php
            }
        }
    }
?>


