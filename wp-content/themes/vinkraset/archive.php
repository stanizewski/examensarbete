<?php
/*
Template Name: inläggslista
*/

// archive.php
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
  ?>
  <h1><?php echo $item->post_title; ?></h1>
  <p>Betyg: <?php echo $rating; ?></p>
  <?php
}

?> 