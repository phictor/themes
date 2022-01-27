<?php
/**
 * The Header for our theme.
 *
 * @package it-company-pro
 */
$menu_width="";
  if ( get_theme_mod('it_company_pro_site_menu_width',true) != "" ) {
    $menu_width=get_theme_mod('it_company_pro_site_menu_width','250');
}

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="shortcut icon" href="#">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>

  <a class="screen-reader-text skip-link" href="#maincontent" ><?php echo esc_html(get_theme_mod('it_company_pro_header_skip_link_text_text')); ?></a>

  <header id="masthead" class="site-header">

    <?php if ( get_theme_mod('it_company_pro_products_spinner_enable',true) == "1" ) { ?>
      <div class="theme_loading_box">
        <div class="lds-circle"><div></div></div>
      </div>
    <?php } ?>

    <!-- before header hook -->
    <?php do_action( 'it_company_pro_before_topbar' ); ?>
    <?php get_template_part('template-parts/header/top-bar'); ?>
    
    <?php do_action( 'it_company_pro_before_header' ); ?>
    <?php get_template_part('template-parts/header/content-header'); ?> 

    <div class="clearfix"></div>
    <span class="d-none" id="menu-width"><?php echo esc_html($menu_width); ?> </span>
  </header>