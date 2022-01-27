<?php
/**
 * The Template for displaying all single Services
 * @package it-company-pro
 */
get_header();
get_template_part( 'template-parts/banner' );
?>
<div class="container">
    <div id="single-services-page">
        <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                   <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                   <?php the_content(); ?>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 " id="sidebar">
                  <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
            <?php endwhile; // end of the loop. ?>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<?php get_footer(); ?>