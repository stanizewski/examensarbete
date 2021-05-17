<?php get_header()?>

<?php
$start_top_bg_image = get_field('start_top_bg_image');
$start_top_bg_image_desktop = get_field('start_top_bg_image_desktop');
$start_top_btn_one_link = get_field('start_top_btn_one_link');
$start_top_btn_one_text = get_field('start_top_btn_one_text');

$start_top_headline = get_field('start_top_headline');
$start_top_text = get_field('start_top_text');


if (empty($start_top_bg_image) && !empty($start_top_bg_image_desktop)) {
    $start_top_bg_image = $start_top_bg_image_desktop;
} else if (!empty($start_top_bg_image) && empty($start_top_bg_image_desktop)) {
    $start_top_bg_image_desktop = $start_top_bg_image;
} 

?>
<div class="wrapper-start-top">
    <div class="background center top-image cover d-md-none" style="background-image:url('<?php echo $start_top_bg_image ?>'),linear-gradient(transparent 50%,  #f8f0ee 50%);">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 mx-auto">
                    <div class="holder-btn text-center">
                        <a href="<?php echo $start_top_btn_one_link ?>" class="btn"><?php echo $start_top_btn_one_text ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper-start-text">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-12 col-md-6 mx-auto">
                        <h1><?php echo $start_top_headline ?></h1>
                    </div>
                    <div class="col-10 col-md-8 mx-auto">
                        <p class="body-text-small"><?php echo $start_top_text ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="background top top-image cover d-none d-md-block" style="background-image:url('<?php echo $start_top_bg_image_desktop ?>'),linear-gradient(transparent 50%, rgba(161,177,200,0.5) 50%);">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10">
                    <div class="holder-btn text-center">
                        <a href="<?php echo $start_top_btn_one_link ?>" class="btn primary-btn"><?php echo $start_top_btn_one_text ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper-start-text">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-12 col-md-10 mx-auto">
                        <h1><?php echo $start_top_headline ?></h1>
                    </div>
                    <div class="col-10 col-xxl-8 mx-auto">
                        <p class="body-text-small"><?php echo $start_top_text ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>