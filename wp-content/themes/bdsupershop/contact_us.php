<?php
/*
  * Template Name: Contact US
  */
?>
<?php get_header(); ?>

<div class="container">
    <div class="page_wrap">
        <div class="contact_section">
            <div class="contact">
                <h2>Contact Us</h2>
                <?php
                echo do_shortcode('[contact-form-7 id="271" title="Contact form 1"]');
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>


