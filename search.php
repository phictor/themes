<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package it-company-pro
 */
get_header(); ?>
<div class="container">
	<h1 class="entry-title"><?php printf( __( 'Results For: %s', 'it-company-pro' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	<?php if(get_theme_mod('it_company_pro_site_breadcrumb_enable',true)){
	  	echo tg_breadcrumbs();
	} ?>
</div>
<div class="container">
	<div class="middle-align">
		<div class="row">
			<div class="col-lg-8 col-sm-6 col-md-7">
				<div class="row">
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/post/post-content' );
						endwhile; ?>
						<div class="navigation">
							<?php // Previous/next page navigation.
							  the_posts_pagination( array(
								  'prev_text'          => __( 'Previous page', 'it-company-pro' ),
								  'next_text'          => __( 'Next page', 'it-company-pro' ),
								  'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'it-company-pro' ) . ' </span>',
							  )); ?>
						</div>
					<?php else : ?>
						<?php get_template_part( 'no-results', 'search' ); ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-lg-4 col-md-5 col-sm-6">
				<?php get_sidebar('page'); ?>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<?php get_footer(); ?>