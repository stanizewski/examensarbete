<?php

/*
Template Name: 404
*/

?>

<?php get_header()?>

<main>
    <div class="wrapper-404">
        <?php partial('common/top-content.php', ['sectionClass' => 'mb-small', 'h1' => get_the_title()]);  ?>
        <?php include(get_template_directory() . '/partials/flexiblecontent/flexible-content-style.php'); ?>
    </div>
</main>

<?php get_footer()?>