<?php get_header(); ?>
	<?php if(have_posts()):?>
		<?php while(have_posts()): the_post() ; ?>
        <div class="banner">
        	<?php the_post_thumbnail(); ?>
        </div>
        
        <div class="container">
            <div class="page_wrap">
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </div>

        </div>
        <?php endwhile; ?>
    <?php else: ?>
        <div class="container">
        	<h3>Sorry, no posts were found</h3>
        </div>
    <?php endif; ?>

<?php get_footer(); ?>