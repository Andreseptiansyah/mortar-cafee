<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * @package Mining Industry 
 */
?>

<h2 class="entry-title"><?php echo esc_html(get_theme_mod('mining_industry_no_results_page_title',__('Nothing Found','mining-industry')));?></h2>

<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	<p><?php printf( esc_html__( 'Ready to publish your first post? Get started here.', 'mining-industry' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
	<?php elseif ( is_search() ) : ?>
	<p><?php echo esc_html(get_theme_mod('mining_industry_no_results_page_content',__('Sorry, but nothing matched your search terms. Please try again with some different keywords.','mining-industry')));?></p><br />
		<?php get_search_form(); ?>
	<?php else : ?>
	<p><?php esc_html_e( 'Dont worry&hellip it happens to the best of us.', 'mining-industry' ); ?></p><br />
	<div class="more-btn">
		<a href="<?php echo esc_url(home_url() ); ?>"><?php esc_html_e( 'Back to Home Page', 'mining-industry' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Back to Home Page','mining-industry' );?></span></a>
	</div>
<?php endif; ?>