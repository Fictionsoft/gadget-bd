<?php
/**
 * The template for displaying Search Results pages
 */

get_header(); ?>
	
    <div class="search_section">
		<div class="container">
        	<div class="content">
				<?php if ( have_posts() ) : ?>
        
                <header class="search_header">
                    <h1 class="search_page_title"><?php printf( __( 'Search Results for: %s', '' ), get_search_query() ); ?></h1>
                </header><!-- .page-header -->
        
                    <?php
                        // Start the Loop.
                        while ( have_posts() ) : the_post();
        
                            /*
                             * Include the post format-specific template for the content. If you want to
                             * use this in a child theme, then include a file called called content-___.php
                             * (where ___ is the post format) and that will be used instead.
                             */
                            //get_template_part( 'content', get_post_format() );
                            the_content();
        
                        endwhile;
                        // Previous/next post navigation.
                        //twentyfourteen_paging_nav();
        
                    else :
                        // If no content, include the "No posts found" template.
                        //get_template_part( 'content', 'none' );
        
                    endif;
                ?>
            </div>
    	</div>

    </div><!-- #content -->

<?php

get_footer();
