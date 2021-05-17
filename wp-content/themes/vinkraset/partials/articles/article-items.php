<?php

if (!isset($post_type) && isset($_GET['post_type'])) {
  $post_type = $_GET['post_type'];
}

if (!isset($pagenum) && isset($_GET['pagenum'])) {
  $pagenum = $_GET['pagenum'];
}
if (!isset($pagenum)) {
  $pagenum = 1;
}

$query = new WP_Query([
      'post_type' => $post_type,
      'post_status' => 'publish',
      'posts_per_page' => ARTICLES_PER_PAGE,
      'paged' => $pagenum,
      'orderby' => 'date',
      'order' => 'DESC',
]);
$items = $query->get_posts();

foreach ($items as $item) {

  $date = get_the_date('j M Y', $item->ID);
  $list_image_mobile = get_field('list_image_mobile', $item->ID);
  $list_image_desktop = get_field('list_image_desktop', $item->ID);

  if (empty($list_image_mobile) && !empty($list_image_desktop)) {
      $list_image_mobile = $list_image_desktop;
  } else if (!empty($list_image_mobile) && empty($list_image_desktop)) {
      $list_image_desktop = $list_image_mobile;
  } else if (empty($list_image_mobile) && empty($list_image_desktop)) {
      $list_image_desktop =  '/wp-content/themes/actic/images/temple/default-inspo-image.jpg';
      $list_image_mobile = '/wp-content/themes/actic/images/temple/default-inspo-image.jpg';
  }

  $list_text = get_field('list_text', $item->ID);
  $sentences = 1;
  ?>
  <div class="grid-item col-6 col-sm-4 col-md-6 col-xxl-3">
      <div class="grid-item-content">
          <a href="<?php echo get_permalink($item->ID) ?>" class="d-block">
              <img src="<?php echo $list_image_mobile ?>" class="w-100 d-lg-none">
              <img src="<?php echo $list_image_desktop ?>" class="w-100 d-none d-lg-block">
              <h3><?php echo $item->post_title ?></h3>
              <?php if (!empty($list_text)) { ?>
                  <p><?php 
                  $firstSentence = preg_replace('/([^?!.]*.).*/', '\\1', $list_text);
                    echo $firstSentence; 
                  ?></p>
              <?php } ?>
          </a>
      </div>
  </div>
<?php 
} 
?>