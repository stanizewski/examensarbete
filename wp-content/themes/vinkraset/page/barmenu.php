<div class="barmenu">

  <a href="<?=CENTERS_URL;?>" class="barmenu-find">
    <span><?php echo __('Hitta gym', 'actic'); ?></span>
  </a>
  <a href="<?php echo CHECKOUT_URL;?>" class="barmenu-member">
    <span><?php echo __('Bli medlem', 'actic'); ?></span>
  </a>
  <div class="barmenu-cart" data-slideopen="checkout/basket">
    <i class="basket-quantity"><?php
    if (isset($_SESSION['basketItems']) && count($_SESSION['basketItems']) > 0) {
        echo count($_SESSION['basketItems']);
    }
    ?></i>
    <span><?php echo __('Varukorg', 'actic'); ?></span>
  </div>
  <div class="barmenu-tryout-form" data-slideopen="forms/tryout-form">
    <span><?php echo __('Prova på', 'actic'); ?></span>
  </div>
  <a href="<?php echo SUPPORT_URL;?>" class="barmenu-support" target="_blank">
    <span class="d-sm-none"><?php echo __('Medlems-<br>service', 'actic'); ?></span>
    <span class="d-none d-sm-block"><?php echo __('Medlemsservice', 'actic'); ?></span>
  </a>
</div>

<div class="slideup" data-current="">
  <div class="handle"></div>
  <div class="loading-container">
    <?php
    partial("common/loading.php", ['text' => '']);
    ?>
  </div>
  <div class="slide-container slideup-container"></div>
</div>