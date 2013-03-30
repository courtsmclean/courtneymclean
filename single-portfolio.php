<?php
/*
Template Name Posts: Project
*/


get_header(); ?>


<!-- Introduction -->
	<section id="introduction">
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		<div id="intro_image">
			<?php the_post_thumbnail(largethumbnail); ?>
		</div>

		<div id="intro-wrapper">

			<div class="intro-text">
			</div><!-- #end intro-text -->
			
		</div><!-- #end intro-wrapper -->
	</section>
<!-- #end introduction -->



<!-- Latest Blog Post -->
<section id="single-main-content">
	<div class="container">
		<div class="portfolio-post-container">


			<!-- article -->
			<div class="article">
				<div class="post-content">
					<?php the_content();?>
					<?php // get post-nav.php (next/prev post link) ?>
					<?php get_template_part( 'includes/post-nav'); ?>				
				</div>
			</div>
			<!-- #end article -->

		</div><!-- #close post-container -->
	</div><!-- #close container -->





<?php endwhile; ?>
<?php endif; ?>
</section>
<!-- #end Latest Blog Post -->



<?php get_footer(); ?>