<div class="footer">
    <div class="footer_top">
        <?php
            echo do_shortcode('[slide-anything id="290"]');
        ?>
    </div>

    <div class="footer_middle">
        <div class="container">
            <div class="footer_content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="footer_nav">
                                <div class="col-xs-3 footer_widget_full">
                                    <div class="single-widget last_child_none">
                                        <h2>Menu</h2>
                                        <?php wp_nav_menu(array(
                                            'theme_location' => 'main-menu',
                                            'container' => false,
                                        ));
                                        ?>
                                    </div>
                                </div>

                                <div class="col-xs-3 footer_widget_full">
                                    <div class="row">
                                        <div class="single-widget fs_other">
                                            <h2>Our Policy</h2>
                                            <?php wp_nav_menu(array(
                                                'theme_location' => 'footer-menu',
                                                'container' => false,
                                            ));
                                            ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-3 footer_widget_full">
                                    <div class="single-widget fs_we_accept_img">
                                        <h2>Contact Us</h2>
                                        <p><i class="fa fa-envelope-o"></i>  : info@gadget-bd.com</p>
                                        <p><i class="fa fa-phone"></i> : +88 018 11 129855</p>
                                        <p><i class="fa fa-phone"></i> : +88 015 11 129855</p>
                                        <p class="web_hover_color">Website : <a href="<?php echo get_home_url();?>">http://gadget-bd.com</a></p>
                                    </div>
                                </div>

                                <div class="col-xs-3 footer_widget_full">
                                    <div class="single-widget fs_we_accept_img">
                                        <h2>We Accept</h2>
                                        <img src="<?php echo get_template_directory_uri() ?>/images/payment_method.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="copy_right">
                        <div class="text-left">
                            <span>Gadget-BD all rights reserved Copy Right &copy; <?php echo DATE('Y'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 text-center">
                    <div>
                        <?php echo do_shortcode('[mc4wp_form id="276"]')?>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="text-right copy_right">
                        <b>Develop By: </b> <a href="http://fictionsoft.com/"><i>Fictionsoft Ltd</i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php wp_footer(); ?>
            
	<script>				
        $(document).ready(function(){
												
			// Mobile buttom
			$('#show_mobile_btn').click(
				function(){
					$('.main_menu').slideToggle(600);
				}			
			);
									
			// Dropdown menu
			if ($(window).width() <= 767){							
				 //console.log("small");				 
				$( '.menu-item-has-children' ).click(
					function(){
						$(this).children('.sub-menu').slideToggle(600);
					}										
				);
												
				$('li.menu-item-has-children').on('click', function(){
				  $('ul li ul li.menu-item-has-children').removeClass('menu-item-has-children').addClass('menu_item_has_children_two');
				});								
															 
			}else{				
				// Dropdown menu				
				$('.menu-item-has-children').hover(
					function(){
						$(this).children('.sub-menu').slideDown(500);
					},
					
					function(){
						$(this).children('.sub-menu').slideUp(500);	
					}			
				);				
			}
																				
        });
    
    </script>
        
    
    <script>
	// Click effect
	/*$(document).ready(function() {
		$( '.menu-item-has-children' ).click(
			function(){
				$(this).children('.sub-menu').slideToggle(1200);
			}
		);
	});*/
	
	</script>
    
         
    </body>
</html>