<?php
    $text_headline = get_sub_field('text_headline');
    $style_text = get_sub_field('style_text');
    $style_text_position = get_sub_field('style_text_position');
    $text_image = get_sub_field('text_image');
?>
<div class="wrapper wrapper-text">
    <div class="container">
        <div class="row row-text">
            
            <?php if($style_text_position == "text-right") {?>
                <?php if($text_image) {?>
                    <div class="col-12 col-md-6">
                        <div class="background bg" style="background-image:url('<?php echo $text_image?>');"></div>
                    </div>
                        <div class="col-12 col-md-6">
                            <h3 class="h2 mb-15 text-left"><?php echo  $text_headline?></h2>
                            <p class="text-medium text-left"><?php echo $style_text?></p>
                        <?php } ?>
                        </div>
                    </div>
                <?php } ?>

            <?php if($style_text_position == "text-left") {?>
                <?php if($text_image) {?> 
                    <div class="col-12 col-md-6">
                        <h3 class="h2 mb-15 text-left"><?php echo  $text_headline?></h2>
                        <p class="text-medium text-left"><?php echo $style_text?></p>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="background bg" style="background-image:url('<?php echo $text_image?>');"></div>
                    </div>
                <?php } ?>
            <?php  } ?>

        </div>
    </div>
</div>
