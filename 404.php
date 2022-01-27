<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package it-company-pro
 */
get_header(); ?>
<div class="title-box">
	<div class="container">
		<h1><?php the_title();?></h1>
		<?php if(get_theme_mod('it_company_pro_site_breadcrumb_enable',true)){
    	  	echo tg_breadcrumbs();
    	} ?>
	</div>
</div>
<div class="content_page">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<img src="<?php echo esc_url(get_theme_mod('it_company_pro_404_page_image')); ?>" alt="">
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="page-content">
					<h3 class="error-main-heading"><span class="heading3"><?php echo esc_html(get_theme_mod('it_company_pro_404_page_title'));?></span></h3>
					<h4 class="subheading"><?php echo esc_html(get_theme_mod('it_company_pro_404_page_subheading'));?></h4>
					<div class="read-moresec my-4">
						<div><a href="<?php echo esc_url( home_url() ); ?>" class="button theme_green_button">
							<i class="fas fa-long-arrow-alt-left"></i>
							<?php echo esc_html(get_theme_mod('it_company_pro_404_page_button_text'));?></a>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<?php get_footer(); ?>
