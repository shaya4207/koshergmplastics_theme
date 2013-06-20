<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php remove_custom_background();?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="sitewrap">
    <div id="top">
      <a href="<?php echo get_bloginfo('url'); ?>" class="logo"></a>
      <div class="help">
        Need Help? Call Us Today!<br/>
        <span class="green">416.781.9900</span>
      </div>
      <div class="nav">
          <?php
            $args = array(
              'menu' => 'Main Menu',
              'menu_id' => 'sddm',
              'depth' => 2,
              'items_wrap' => '<ul id="%1$s">%3$s</ul>'
            );
            wp_nav_menu( $args );
          ?>
      </div>
    </div>
    <div id="center">