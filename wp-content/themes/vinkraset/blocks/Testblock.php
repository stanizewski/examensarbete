<?php
/**
 * Block Name: Testblock
 *
 */

 $headline = get_field("headline");
 $image = get_field("image");
?>
<div style="background-color: pink; padding: 10px; border: solid 1px #000000;">
    <h3><?php echo  $headline; ?></h3>
    <?php if ($image) { ?>
        <div><img src="<?php echo  $image; ?>"></div>
    <?php } ?> 
</div>