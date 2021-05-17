<?php

$inspiration = get_posts(
    array(
        'post_type' => array('inspiration'),
        'post_status' => 'publish',
        'posts_per_page' => 100,
        'orderby' => 'date',
        'order' => 'DESC'
    )
);
?>

