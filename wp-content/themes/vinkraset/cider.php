<?php
/*
Template Name: Cider
*/

?>
<?php get_header()?>

<?php include(TEMPLATE_DIR . '/start-top.php'); ?>

<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 mt-5 mx-auto d-flex justify-content-between">
                    <div class = "blog-img">
                        <img src="<?php echo get_bloginfo('template_url'); ?>/images/image/IMG_1655.jpg" class="" width="400" height="">
                    </div>
                    <div class="m-5">
                        <?php echo do_shortcode( '[site_reviews]' )?>
                    </div>
                </div>
             </div>
        </div>
    </div>

<?php get_footer()?>

<?php get_footer()?>