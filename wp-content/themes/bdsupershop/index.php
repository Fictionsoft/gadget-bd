<?php get_header(); ?>
	<div class="banner">
    	<?php dynamic_sidebar('blog-feature'); ?>
    </div>
    
    <div class="container">
    	<div class="blog_content">
        	<div class="col-sm-9">
            
            	<?php if(have_posts()):?>
					<?php while(have_posts()): the_post() ; ?>
                    <div class="blog_datails">
                        
                        <div class="blog_title">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title() ; ?></a></h2>
                         </div>
                         
                        <div class="blog_date_author">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="blog_date">
                                        <i class="fa fa-calendar"></i>
                                        <strong>Post Date:</strong>
                                        <span><?php the_date('F j, Y')?></span>
                                    </div>
                                </div> 
                                
                                <div class="col-sm-4">
                                    <div class="blog_author">
                                        <i class="fa fa-user"></i>
                                        <strong>Posted By:</strong>
                                        <span><?php the_author(); ?><span>
                                    </div>
                                </div>
                                 
                                <div class="col-sm-4">
                                
                                </div> 
                                                                    
                            </div>
                        </div>
                        
                        <?php if(has_post_thumbnail()):?>
                            <div class="blog_thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>                        
                        <?php endif ; ?>
                        
                        <div class="blog_des">
                            <?php echo wp_trim_words(get_the_content(), 50, '.....'); ?>
                            
                            <div class="read_more_bnt">
                                <a href="<?php the_permalink(); ?>">Read More &raquo;</a>
                            </div>
                        </div>                                                                                                                                                                        
                           
                    </div>
                
                	<?php endwhile; ?>
				<?php else: ?>
                    <h4>Sorry, no posts were found</h4>
                <?php endif; ?>
            </div>
            
            <div class="col-sm-3">
            	<h3> Blog sidebar</h3>
            </div>
                    
        </div>
	</div>
  
						
<?php get_footer(); ?>