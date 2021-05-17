<?php
if (!isset($pagenum) && isset($_GET['pagenum'])) {
    $pagenum = $_GET['pagenum'];
}
if (!isset($pagenum)) {
    $pagenum = 1;
}
$current_url = HTTP_PROTOCOL . '://' . $_SERVER["HTTP_HOST"] . strtok($_SERVER["REQUEST_URI"],'?');
?>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-10 mx-auto p-0">
            <div class="grid" id="article-list" data-post-type="<?=$post_type?>" data-pagenum="<?=$pagenum;?>" data-per-page="<?=ARTICLES_PER_PAGE?>">
                <div class="grid-sizer col-6 col-sm-4 col-md-6 col-xxl-3"></div>
                <?php
                include("article-items.php");    
                ?>
            </div>
        </div>
    </div>

    <div class="row text-center mt-4">
        <div class="col-12">
            <a href="<?php echo $current_url . "?pagenum=" . ($pagenum+1); ?>" class="btn secondary-btn load-more-article-items" data-list-id="#article-list" data-base-url="<?php echo $current_url; ?>"><?php echo __('Visa fler', 'actic'); ?></a>
        </div>
    </div>
</div>