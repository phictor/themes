<?php
/**
 * The Template for displaying all single posts.
 *
 * @package it-company-pro
 */
get_header();
get_template_part( 'template-parts/banner' );
?>
<div class="container">
	<div class="row">
		<div class="single-post-block content_page col-lg-8 col-sm-12 col-md-7">
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="content_boxes">
				<?php if(get_theme_mod('it_company_pro_post_general_settings_post_img',true)==1){ ?>
					<?php if ( has_post_thumbnail() ) { ?>
						<div class="feature-box">
							<img src="<?php the_post_thumbnail_url( 'full' ); ?>">
						</div>
					<?php } ?>
				<?php }  ?>
				<?php if(get_theme_mod('it_company_pro_post_general_settings_post_date',true)==1 || get_theme_mod('it_company_pro_post_general_settings_post_author',true)==1 || get_theme_mod('it_company_pro_post_general_settings_post_comments',true)==1){  ?>
					<div class="metabox">
						<?php if(get_theme_mod('it_company_pro_post_general_settings_post_date',true)==1){ ?>
							<i class="far fa-calendar-alt"></i><span class="entry-date"><?php the_time(get_option('date_format')); ?></span>
						<?php } ?>
						<?php if(get_theme_mod('it_company_pro_post_general_settings_post_author',true)==1){ ?>
							<i class="fas fa-user"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></span>
						<?php } ?>

						<?php if(get_theme_mod('it_company_pro_post_general_settings_post_comments',true)==1){ ?>
						<a href="#comment"><i class="fas fa-comments"></i><span class="entry-comments"><?php comments_number( __( '0 Comments','it-company-pro' ), __( '0 Comments','it-company-pro' ), __( '0 % Comments','it-company-pro' ) ); ?></span></a>
						<?php } ?>
					</div>
				<?php } ?>
				<div class="single-content"><?php the_content();?></div>
				<?php if ( get_theme_mod('it_company_pro_post_general_settings_post_share',true) ) {
						if ( function_exists('it_company_pro_social_share') ) {
							it_company_pro_social_share();
						}
	                }

	                if(get_theme_mod('it_company_pro_post_general_settings_post_tags', true)){ ?>
		                <p class="col-md-6 post_tag">
	                    	<?php
	                        if( $tags = get_the_tags() ) {
	                            echo '<span class="meta-sep"></span>';
	                            foreach( $tags as $tg_tag ) {
	                              $sep = ( $tg_tag === end( $tags ) ) ? '' : ' ';
	                              echo '<a href="' . esc_url(get_term_link( $tg_tag, $tg_tag->taxonomy )) . '">#' . esc_html($tg_tag->name) . '</a>' . esc_html($sep);
	                            }
		                    } ?>
		                </p>
		            <?php }

	                 if(get_theme_mod('it_company_pro_post_general_settings_post_category',true)=="1"){ ?>
		                <div class="post_ctg font-weight-bold"><span><?php echo esc_html('Categories: ','it-company-pro'); ?></span><?php the_category();?></div>

						<?php }

					if(get_theme_mod('it_company_pro_autherdetails', true)){
						if ( function_exists('it_company_pro_post_auther_bio') ) {
							it_company_pro_post_auther_bio();
						}
					}

					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) {
						// include it_company_pro_EXT_DIR .'comments.php';
						get_template_part( 'comments' );
					}

					if(get_theme_mod('it_company_pro_related_posts',true)){
						if ( function_exists('it_company_pro_related_posts') ) {
							it_company_pro_related_posts();
						}
					}

					if(get_theme_mod('it_company_pro_pagination',true)){
						if ( function_exists('it_company_pro_single_navigation') ) {
							it_company_pro_single_navigation();
						}
					} ?>
				</div>
			<?php endwhile; // end of the loop. ?>
		</div>
		<div class="col-lg-4 col-sm-12 col-md-5" id="sidebar">
          <?php dynamic_sidebar('sidebar-1'); ?>
        </div>
		<div class="clearfix"></div>
	</div>
</div>
<?php get_footer(); ?>
