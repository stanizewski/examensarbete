<?php

/*
Template Name: Startsida
*/

?>
<?php get_header()?>

<?php include(TEMPLATE_DIR . '/start-top.php'); ?>

        <div class="wrapper">  
            <div class="container"> 
                <div class="row">   
                    <div class="start-text"> 
                      <div class="col-12 col-md-10 mt-5 mx-auto">    
                        <h1>Välkommna</h1>
                        <p class="text-regular">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora sunt nobis repudiandae nam at ex, minus tempore laboriosam distinctio in qui sint deserunt, nisi dicta officiis, velit debitis obcaecati doloremque.   </p>
                   </div>
                </div>
            </div>
        </div>
    </div>

<div class="masonry">
  <div class="item">
    <img src="<?php echo get_bloginfo('template_url'); ?>/images/image/wine-start.jpg" class="">
  </div>
  <div class="item">
    <img src="<?php echo get_bloginfo('template_url'); ?>/images/image/image-money.jpeg" class="">
  </div>
  <div class="item">
    <img src="<?php echo get_bloginfo('template_url'); ?>/images/image/mysa.png" class="">
  </div>
  <div class="item">
    <img src="<?php echo get_bloginfo('template_url'); ?>/images/image/color-theme.jpg" class="">
  </div>
  <div class="item">
    <img src="<?php echo get_bloginfo('template_url'); ?>/images/image/wine_graphic.JPG" class="">
  </div>
  <div class="item">
    <img src="<?php echo get_bloginfo('template_url'); ?>/images/image/logo-vin&natur.svg" class="">
  </div>
  <div class="item">
    <img src="<?php echo get_bloginfo('template_url'); ?>/images/image/poster-start.jpg" class="">
  </div>
  <div class="item">
    <img src="<?php echo get_bloginfo('template_url'); ?>/images/image/loggo.png" class="">
  </div>
  <div class="item">
    <img src="<?php echo get_bloginfo('template_url'); ?>/images/image/natural-wine-start.jpg" class="">
  </div>
  <div class="item">
    <img src="<?php echo get_bloginfo('template_url'); ?>/images/image/pink-start.jpg" class="">
  </div>
    <div class="item">
    <img src="<?php echo get_bloginfo('template_url'); ?>/images/image/kork.jpg" class="">
  </div>
  <div class="item">
    <img src="<?php echo get_bloginfo('template_url'); ?>/images/image/natural-wine-glas.jpg" class="">
  </div>
  <div class="item">
    <img src="<?php echo get_bloginfo('template_url'); ?>/images/image/holidaywine.webp" class="">
  </div>
</div>

        
  <?php include(TEMPLATE_DIR . '/partials/flexible-content-style.php'); ?>
  <?php include(TEMPLATE_DIR . '/partials/start/start-inspiration.php'); ?>


<?php get_footer()?>