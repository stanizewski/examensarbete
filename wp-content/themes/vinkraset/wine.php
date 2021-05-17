<?php
/*
Template Name: Vin
*/

?>
<?php get_header()?>

<?php include(TEMPLATE_DIR . '/start-top.php'); ?>
<?php include(TEMPLATE_DIR . '/partials/flexible-content-style.php'); ?>

<div class="wrapper-wine">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 mt-5 mx-auto d-flex justify-content-between">
                    <div class = "blog-img">
                        <img src="<?php echo get_bloginfo('template_url'); ?>/images/image/IMG_1655.jpg" class="" width="300" height="">
                    </div>
                    <div class="m-5">
                        <?php echo do_shortcode( '[site_reviews]' )?>
                    </div>
                    <?php echo do_shortcode( '[likebtn theme="review" lang="sv" dislike_enabled="0" icon_dislike_show="0" bp_notify="0"]' ); ?>
                </div>
             </div>
        </div>
    </div>

<?php get_footer()?>