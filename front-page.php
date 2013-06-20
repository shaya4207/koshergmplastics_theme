<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<div class="row1">
  <a href="<?php echo get_bloginfo('url'); ?>/minis" class="minispic"></a>
  <a href="<?php echo get_bloginfo('url'); ?>/dishes" class="dishespic"></a>
  <a href="<?php echo get_bloginfo('url'); ?>/serving" class="servingpic"></a>
</div>
<div class="row2">
  <div class="mid"></div>
  <a href="<?php echo get_bloginfo('url'); ?>/dessert" class="dessertpic"></a>
</div>
<div class="row3">
  <a href="<?php echo get_bloginfo('url'); ?>/cups" class="cupspic"></a>
  <a href="<?php echo get_bloginfo('url'); ?>/cutlery" class="cutlerypic"></a>
</div>
<?php get_sidebar( 'front' ); ?>
<?php get_footer(); ?>