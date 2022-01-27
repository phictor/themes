<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package it-company-pro
 */
get_header(); ?>
<div class="container">
	<div class="middle-align">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<header class="page-header">
					<?php the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );?>
				</header>
				<?php if(get_theme_mod('it_company_pro_site_breadcrumb_enable',true)){
            	  	echo tg_breadcrumbs();
	        	} ?>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 col-md-7">
				<div class="row">
					<?php if ( have_posts() ) : ?>
						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/post/post-content' );
						endwhile;
						// Previous/next page navigation.
						the_posts_pagination( array(
							'prev_text'          => __( 'Previous page', 'it-company-pro' ),
							'next_text'          => __( 'Next page', 'it-company-pro' ),
							'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'it-company-pro' ) . ' </span>',
						));
					else :
						get_template_part( 'no-results', 'archive' ); ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-lg-4 col-md-5">
				<?php get_sidebar( 'page' ); ?>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<?php get_footer(); ?>