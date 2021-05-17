<?php

/*
Template Name: Minsida
*/

?>
<?php get_header()?>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<picture>
                             <img src="https://randomuser.me/api/portraits/men/5.jpg">
                        </picture>
<img src="<?php echo get_bloginfo('template_url'); ?>/images/icons/person_add.svg" class="">

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
            <a href="/"><img src="<?php echo get_bloginfo('template_url'); ?>/images/image/loggo.png" class="logo"></a>
                <h2> Min sida</h2>
                </div>
            </div>
        </div>
    


<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 mx-auto">
            <div class="blogg-top">
                <span><a href="/vanner/">Mina vänner</a></span> <br><hr>
                <span><a href="/Blogg/">Mina inlägg</a></span><br><hr>
                <span><a href="/onskelista/">Önskelista</a></span><br><hr>
                </div>
            </div>
        </div>
    </div>

   <!--  <div class="container">
        <div class="row mb-5">
            <div class="col-12 mt-5">
                <div class="blogg-scan">
                    <h4 class="mt-5 text-center">Senaste skanningar</h4>
                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/image/IMG_1525.jpg" class="s-logo insta" width="300" height="400">
                    </div>
                </div>
            </div>
        </div>
 -->
        <?php include(TEMPLATE_DIR . '/addfriend.php'); ?>

     <!-- <div class="container">
        <div class="row">
            <div class="col-12 mx-auto text-center">
                <div class="blogg-profil">
                    <h4>Din smakprofil</h4>
                    <input type="submit" class="btn secondary-btn" name="submit" value="Stilar" />
                    <input type="submit" class="btn secondary-btn" name="submit" value="Regioner" />
                    <input type="submit" class="btn secondary-btn" name="submit" value="Högst betyg" />     <br>
                    <span>Languedoc-Roussilion Röda</span><br>
                    <p class="mx-auto">Betyg 4.5</p>
                    <span>Franska röda</span><br>
                    <p class="mx-auto">Betyg 3.8</p>
                    <span>Centrala Italien vita</span><br>
                    <p class="mx-auto">Betyg 4.2</p>
                </div>
            </div>
        </div>
    </div> -->

    <?php echo do_shortcode( '[instagram-feed]' ); ?>

<?php get_footer()?>