<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package success
 */

get_header(); ?>

	<div id="primary" class="content-area text-center">
		<main id="main" class="site-main">

			<section class="error-404 not-found pad-top-80 pad-bottom-80">

			<?php $icon = get_field('404_image', 'options'); 
			if($icon): ?>
				<img src="<?php echo $icon['url']; ?>" class="not-found-icon" alt="404" />
			<?php else: ?>
				<img class="not-found-icon" src="<?php bloginfo('template_directory'); ?>/images/404.svg" alt="404"  />
			<?php endif; ?>
					
				<h1 class="page-title"><?php esc_html_e( 'Oops! That Page Can&rsquo;t Be Found', 'success' ); ?></h1>

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. ', 'success' ); ?></p>

					<a class="button color--white bg--color2" href="/sitemap/">Visit Our Sitemap</a>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
