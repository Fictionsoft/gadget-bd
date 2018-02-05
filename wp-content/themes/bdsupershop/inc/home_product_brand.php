
    <h4> Brand categories </h4>
    <?php

    $taxonomy     = 'brand';
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

    $brands = get_categories( $args );
    foreach ($brands as $brand) {
        if($brand->category_parent == 0) {
            $brand_image = get_field("brand_photo",$taxonomy.'_'.$brand->term_id );

            $brand_id = $brand->term_id;
            echo '<div ><a href="'.get_term_link($brand->slug, 'brand').'"><img src="'. $brand_image['url'] .'">'.'</a></div>';

            //echo  '<div class="span_padding"><span>'.  $cat->name.'</span></div>' ;
            //echo '<br /><a href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a>';
        }
    }
    ?>
