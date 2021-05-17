<?php

/*
Template Name: Blogg
*/

?>
<?php get_header()?>
<?php include(TEMPLATE_DIR . '/start-top.php'); ?>

<?php

$query = new WP_Query([
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => 20,
  'paged' => 1,
  'orderby' => 'date',
  'order' => 'DESC',
]);

$items = $query->get_posts();

foreach ($items as $item) {
  $rating = get_field('rating', $item->ID);
  $title = get_field('post_title', $item->ID);
  $post_date = get_field('post_date', $item->ID);
  $post_image = get_field('post_image', $item->ID);
  $post_company = get_field('post_company', $item->ID);
  $post_location = get_field('post_location', $item->ID);
  $post_decription = get_field('post_decription', $item->ID);
?>

<section class="blog" id="blog">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-10 mt-5 mx-auto text-center">
        <h1>Mitt inlägg</h1>
        <div class="blog-content">
          <div class="blog-item d-flex flex-column flex-lg-row flex-sm-column">
          <div class="blog-img">
            <img src="<?php echo get_bloginfo('template_url'); ?>/images/image/blogg-image.jpeg" class="" width="400" height="">
          </div>
          <div class="blog-text">
            <h2><?php echo $item->post_title; ?></h2>
            <span><strong>Bild:</strong><?php echo $post_image; ?></span>
            <span><strong>Datum:</strong> <?php print date("Y-m-d");?> <?php echo $post_date; ?></span>
            <span><strong>Sällskap:</strong> <?php echo $post_company; ?></span>
            <span><strong>Plats:</strong> <?php echo $post_location; ?></span>
            <span><strong>Beskrivning:</strong> <?php echo $post_decription; ?></span>
          </div>
          <?php echo do_shortcode( '[likebtn theme="review" lang="sv" dislike_enabled="0" icon_dislike_show="0" bp_notify="0"]' ); ?>
        </div>
      </div>
    </div>
  </div>
</section>
 
<?php } ?> 

<?php get_footer()?>