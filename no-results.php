<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package it-company-pro
 */
?>
<header>
	<h3 class="entry-title"><?php _e( 'Nothing Found', 'it-company-pro' ); ?></h3>
</header>
<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'it-company-pro' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
<?php elseif ( is_search() ) : ?>
	<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'it-company-pro' ); ?></p><br />
		<?php get_search_form(); ?>
<?php else : ?>
	<p><?php _e( 'Don\'t worry &hellip; it happens to the best of us.', 'it-company-pro' ); ?></p>
	<br />
	<div class="read-moresec">
		<div><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button hvr-sweep-to-right"><?php _e( 'Back to Home Page', 'it-company-pro' ); ?></a></div>
	</div>
<?php endif; ?>