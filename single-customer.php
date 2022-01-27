<?php
/**
 * The Template for displaying all single testimonials
 * @package it-company-pro
 */
get_header();
get_template_part( 'template-parts/banner' );
?>
<div class="container">
    <div id="single-testimonial">
        <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-md-6 col-sm-6 col-lg-8 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 inner-page-feature-box">
                            <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                             <?php if(get_post_meta($post->ID,'customer-desig',true)!=''){ ?>
                                <p class="testimonials-desig">
                                
                                    <?php echo esc_html(get_post_meta($post->ID,'customer-desig',true)); ?>
                                </p>
                            <?php } ?>
                            <div class="social-icon">
                                <?php if(get_post_meta($post->ID,'meta-tes-facebookurl',true)!=''){ ?>
                                     <a class="twitter" href="<?php echo esc_html(get_post_meta($post->ID,'meta-tes-facebookurl',true)); ?>" target="_blank">
                                        <i class="fab fa-facebook-f align-middle " aria-hidden="true"></i>
                                    </a>
                                <?php } ?>
                                <?php if(get_post_meta($post->ID,'meta-tes-twitterurl',true)!=''){ ?>
                                    <a class="twitter" href="<?php echo esc_html(get_post_meta($post->ID,'meta-tes-twitterurl',true)); ?>" target="_blank">
                                        <i class="fab fa-twitter align-middle" aria-hidden="true"></i>
                                    </a>
                                <?php } ?>
                                <?php if(get_post_meta($post->ID,'meta-tes-instagramurl',true)!=''){ ?>
                                    <a class="twitter" href="<?php echo esc_html(get_post_meta($post->ID,'meta-tes-instagramurl',true)); ?>" target="_blank">
                                        <i class="fab fa-instagram align-middle" aria-hidden="true"></i>
                                    </a>
                                <?php } ?>
                                <?php if(get_post_meta($post->ID,'meta-tes-googleplusurl',true)!=''){ ?>
                                    <a class="twitter" href="<?php echo esc_html(get_post_meta($post->ID,'meta-tes-googleplusurl',true)); ?>" target="_blank">
                                        <i class="fab fa-google-plus-g align-middle" aria-hidden="true"></i>
                                    </a>
                                <?php } ?>
                                <?php if(get_post_meta($post->ID,'meta-tes-pinteresturl',true)!=''){ ?>
                                    <a class="twitter" href="<?php echo esc_html(get_post_meta($post->ID,'meta-tes-pinteresturl',true)); ?>" target="_blank">
                                        <i class="fab fa-pinterest-p align-middle " aria-hidden="true"></i>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 single-testimonial-content"><?php the_content();?></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-4 col-xs-12 " id="sidebar">
                  <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
            <?php endwhile; // end of the loop. ?>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<?php get_footer(); ?>