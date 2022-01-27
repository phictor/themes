<?php
/**
 * The Template for displaying all single instructor
 * @package it-company-pro
 */
get_header();
get_template_part( 'template-parts/banner' );
?>
<div class="container">
    <div id="single-leader">
        <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-md-6 col-sm-6 col-lg-8 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 inner-page-feature-box">
                            <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                             <?php if(get_post_meta($post->ID,'meta-designation',true)!=''){ ?>
                                <p class="leader-desig">
                                    <i class="fas fa-user"></i>
                                    <?php echo esc_html(get_post_meta($post->ID,'meta-designation',true)); ?>
                                </p>
                            <?php } ?>
                            <?php if(get_post_meta($post->ID,'meta-team-email',true)!=''){ ?>
                                <p class="leader-email">
                                    <i class="far fa-envelope"></i>
                                    <?php echo esc_html(get_post_meta($post->ID,'meta-team-email',true)); ?>
                                </p>
                            <?php } ?>
                            <?php if(get_post_meta($post->ID,'meta-team-call',true)!=''){ ?>
                                <p class="leader-call">
                                    <i class="fas fa-phone"></i>
                                    <?php echo esc_html(get_post_meta($post->ID,'meta-team-call',true)); ?>
                                </p>
                            <?php } ?>
                            <div class="social-icon">
                                <?php if(get_post_meta($post->ID,'meta-facebookurl',true)!=''){ ?>
                                     <a class="twitter" href="<?php echo esc_html(get_post_meta($post->ID,'meta-facebookurl',true)); ?>" target="_blank">
                                        <i class="fab fa-facebook-f align-middle " aria-hidden="true"></i>
                                    </a>
                                <?php } ?>
                                <?php if(get_post_meta($post->ID,'meta-twitterurl',true)!=''){ ?>
                                    <a class="twitter" href="<?php echo esc_html(get_post_meta($post->ID,'meta-twitterurl',true)); ?>" target="_blank">
                                        <i class="fab fa-twitter align-middle" aria-hidden="true"></i>
                                    </a>
                                <?php } ?>
                                <?php if(get_post_meta($post->ID,'meta-instagramurl',true)!=''){ ?>
                                    <a class="twitter" href="<?php echo esc_html(get_post_meta($post->ID,'meta-instagramurl',true)); ?>" target="_blank">
                                        <i class="fab fa-instagram align-middle" aria-hidden="true"></i>
                                    </a>
                                <?php } ?>
                                <?php if(get_post_meta($post->ID,'meta-googleplusurl',true)!=''){ ?>
                                    <a class="twitter" href="<?php echo esc_html(get_post_meta($post->ID,'meta-googleplusurl',true)); ?>" target="_blank">
                                        <i class="fab fa-google-plus-g align-middle" aria-hidden="true"></i>
                                    </a>
                                <?php } ?>
                                <?php if(get_post_meta($post->ID,'meta-pinteresturl',true)!=''){ ?>
                                    <a class="twitter" href="<?php echo esc_html(get_post_meta($post->ID,'meta-pinteresturl',true)); ?>" target="_blank">
                                        <i class="fab fa-pinterest-p align-middle " aria-hidden="true"></i>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 single-leader-content"><?php the_content();?></div>
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