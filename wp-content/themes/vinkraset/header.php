<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes() ?>><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" <?php language_attributes() ?>><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" <?php language_attributes() ?>><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes() ?>>
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php wp_title('-'); ?></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="google-site-verification" content="qR9RL0Q2rTo3F601EB4B1ExDU4M2ge5nTz4fvMZymSw" />
    <?php wp_head() ?>
    <script type="text/javascript">
		<?php
		echo "var countrycode = '".COUNTRYCODE."'; \n";
		?>
	</script>
    <?php include(TEMPLATE_DIR . "/partials/tracking/tracking-in-head.php"); ?>
</head>

<body <?php body_class() ?>>
<header>
    <div class="wrapper-nav">
        <div class="container-fluid">
            <div class="row justify-content-between align-items-center">
                <div class="col offset-md-0 text-md-start">
                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/image/loggo1.png" class="logo">
                </div>
                <div class="col ms-auto order-md-3  d-none d-md-block">
                    <div class=" topmenu d-flex justify-content-end align-items-center">
                        <a href="<?php echo BLOGG_URL; ?>" class="topmenu-mypage">
                            <span><?php echo __('Min sida', 'Vinkraset'); ?></span>
                        </a>
                        <a href="<?php echo CENTERS_URL; ?>" class="topmenu-blogg">
                            <span><?php echo __('Blogg', 'Vinkraset'); ?></span>
                        </a>
                        <a href="<?php echo CENTERS_URL; ?>" class="topmenu-wine">
                            <span><?php echo __('Vin', 'Vinkraset'); ?></span>
                        </a>
                        <a href="<?php echo CENTERS_URL; ?>" class="topmenu-cider">
                            <span><?php echo __('Cider', 'Vinkraset'); ?></span>
                        </a>
                    </div>
                </div>

                <div class="col ms-auto order-md-3">
                    <div class="d-flex justify-content-end align-items-center">
                        <div class="nav-icon"></div>
                    </div>
                </div>

                <nav class="mobile-nav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                    ));
                    ?>
                </nav>
            </div>
        </div>
    </div>

</header>
<?php include(TEMPLATE_DIR . "/partials/tracking/tracking-in-body.php"); ?>
   
    