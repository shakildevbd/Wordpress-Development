<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo('charset'); ?>" />




<link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/coin-slider.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo(stylesheet_url); ?>" />

<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/cufon-titillium-250.js"></script>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/script.js"></script>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/coin-slider.min.js"></script>



<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="searchform">
        <form id="formsearch" name="formsearch" method="GET" action="<?php esc_url(bloginfo('home')); ?>">
          <span>
          <input name="s" class="editbox_search" id="editbox_search" maxlength="80" value="Search" type="text" />
          </span>
          <input name="button_search" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/search.gif" class="button_search" type="image" />
        </form>
      </div>
      <div class="logo">
        <a href="<?php bloginfo('home');?>"><?php the_custom_logo();?></a>
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <?php 
		
		wp_nav_menu();
		
		?>
      </div>