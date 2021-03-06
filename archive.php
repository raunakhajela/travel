<?php
/**
 * Template for displaying archive.
 *
 * @package WPAMPTheme
 */

get_header();
?>
<div class="travel-overlay-fx-scale">
	<div class="travel-no-focus flex-auto overflow-auto" role="button" tabindex="-1">

		<?php get_template_part( 'templates/breadcrumb' ); ?>
		<!-- Results -->
		<section class="travel-results pb1 md-pt1">
			<div class="travel-inline-list travel-results-list">
				<div class="max-width-3 mx-auto px1 md-px2">
					<h1><?php echo wp_kses_post( amp_travel_get_archive_title() ); ?></h1>
					<?php /* translators: %d: The number of adventures */ ?>
					<div><?php printf( esc_html( _n( '%d adventure', '%d adventures', amp_travel_get_posts_count(), 'travel' ) ), esc_html( amp_travel_get_posts_count() ) ); ?></div>
					<?php get_template_part( 'templates/live-lists/posts' ); ?>
				</div>
			</div>
		</section>
		<!--/ Results -->
	</div>
</div>

<div id="travel-landing-content" class="travel-landing-content relative">
	<div class="travel-footer-wrapper">
		<?php get_template_part( 'templates/footer-search' ); ?>
	</div>
</div>
<?php get_footer(); ?>
