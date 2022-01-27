<?php
/**
 * The Template for displaying all single Projects
 * @package it-company-pro
 */
get_header();
get_template_part( 'template-parts/banner' );
?>
<div class="container">
    <div id="single-projects-page">
        <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                   <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                    <?php if(get_post_meta($post->ID,'meta-project-duration',true)!=''){ ?>
                      <p class="project-duration">
                        <?php echo esc_html(get_theme_mod('it_company_pro_our_single_projects_duration')); ?>
                          <?php echo esc_html(get_post_meta($post->ID,'meta-project-duration',true)); ?>
                      </p>
                    <?php } ?>
                    <?php if(get_post_meta($post->ID,'meta-project-institution',true)!=''){ ?>
                      <p class="client-name">
                        <?php echo esc_html(get_theme_mod('it_company_pro_our_single_projects_client')); ?>
                          <?php echo esc_html(get_post_meta($post->ID,'meta-project-institution',true)); ?>
                      </p>
                    <?php } ?>
                    <div class="project-text">
                      <?php the_content(); ?>
                    </div>
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