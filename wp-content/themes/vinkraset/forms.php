<?php
/*
Template Name: formulär
*/

?>
<?php get_header()?>

<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 ">
                <?php echo do_shortcode( '[site_reviews_form assign_to=”post_id”]' )?>
            </div>
        </div>
    </div>
</div>

<?php get_footer()?>