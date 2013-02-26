<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package _s
 * @since _s 1.0
 */

get_header(); ?>

<section id="latest-post">
	<div class="container">



		<div id="fourofour">
			<div class="five col">
				<p class="statistic"><span><?php _e( '404' ); ?></span><h1><?php _e( 'Oops! That page can&rsquo;t be found.', '_s' ); ?></h1>
			</div>

			<div class="wrapper">
				<div class="seven col">
						<img class="scale-with-grid" src="<?php bloginfo('template_directory'); ?>/images/mr_bean.gif" alt="process-circle" />
				</div>	
			</div><!-- /end wrapper class -->
		</div><!-- /end fourofour class -->



		<!-- article -->
			<div class="eleven col">
				<div class="article">
					<p>That page doesn’t seem to exist anymore, but visit the <a href="" title="">home page</a> and we should be able to direct you better from there...</p>
				</div>
			</div>



	<!-- /end Latest Blog Post -->
	</div>
</section>

<?php get_footer(); ?>