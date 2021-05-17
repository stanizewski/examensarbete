<?php

/*
Template Name: Minsida
*/

?>
<?php get_header()?>
<section class="mypage">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<div class="container my-page-top">
    <div class="row">
        <div class="col-12 text-center">
            <img src="<?php echo get_bloginfo('template_url'); ?>/images/image/DSC_8639.JPG" class="mypage-img" height="300" width="400">
            <h3>Patricia Stanizewski <img src="<?php echo get_bloginfo('template_url'); ?>/images/icons/person_add.svg" class=""></h3>
            <p class="body-text"> Random text om mig själv, vem är jag? <br>förhoppningsvis väldigt rolig och njuter av livet. <br> Ge mitt ett bubbligt/mjukt glas rött så är jag nöjd.</p>
        </div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-12 col-md-10 mx-auto">
            <div class="blogg-top text-center">
                <a href="/Blogg/"><input type="submit" class="btn secondary-btn" name="submit" value="Blogg"/></a>
                <a href="/onskelista/"><input type="submit" class="btn secondary-btn" name="submit" value="Önskelista"/></a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-10 mt-5 mb-5 text-start">
            <h3>Min Vänner</h3>
        </div>
        <?php include(TEMPLATE_DIR . '/addfriend.php'); ?>
        <!-- <a href="#">Visa fler</a> -->
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 text-start mb-5">
            <h3>Min instagram</h3>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-12 text-start mb-5">
            <?php echo do_shortcode( '[instagram-feed]' ); ?>
        </div>
    </div>
</div>
</section>

<?php get_footer()?>