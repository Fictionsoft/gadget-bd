/**
 * Created by Habibullah on 11/21/17.
 */

$(document).ready(function(){

    // Navigation menu
    $(".product-categories .cat-parent > a").attr("href", "javascript:void(0)");
    $(".product-categories a").append('<i class=" pull-right fa fa-angle-left"></i>');
    $('.product-categories .current-cat-parent .children').css('display', 'block');

    $('.product-categories .current-cat-parent > a i').addClass('nav_icon_rotate');
    $(".product-categories .cat-parent > a").click(function(){

        $(this).find('i').toggleClass("nav_icon_rotate");
        $(this).parent('.cat-parent').find('.children').slideToggle('slow');
    });



    // Add to curt button icon
    //jQuery('a.add_to_cart_button').prepend('<i class="fa fa-cart-plus" aria-hidden="true"></i> ');



    $(document).ready(function(){
    $("#menu-item-448, .dropdown_menu").mouseover(function(){
        $(".dropdown_menu").show();
        $(".menu-item-448").addClass("all_cat_background, all_cat_background > a");
        });
    });
    $("#menu-item-448, .dropdown_menu").mouseout(function(){
        $(".dropdown_menu").hide();
        $(".menu-item-448").removeClass("all_cat_background, all_cat_background > a");
    });

    $(window).scroll(function(){
        if($(window).width() >= 991){
            if($(window).scrollTop() > 100  ) {
                $("#header-fix").addClass("header-fix");
                $(".dropdown_menu").removeClass("hover_prblm_fix");
            }else{
                $("#header-fix").removeClass("header-fix");
                //$(".dropdown_menu").addClass("hover_prblm_fix");
            }

            if($(window).scrollTop() == 0  ) {
                $(".dropdown_menu").addClass("hover_prblm_fix");
            }
        }

    });
});
