<?php
/**
 * The Template for displaying all single posts.
 *
 */

get_header(); ?>


<!-- Introduction -->
	<section id="home-intro">
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		<div id="intro_image">
			<?php the_post_thumbnail(largethumbnail); ?>
		</div>

		<div id="intro-wrapper">

			<h4 class="white"><em><?php the_time(__('j', 'f2')); ?> <?php the_time(__('M', 'f2')); ?> <?php the_time(__('Y', 'f2')); ?></em></h4>
			<div class="intro-text">
			<h1 class="white"><?php the_title(); ?></h1>
			</div><!-- #end intro-text -->
			
		</div><!-- #end intro-wrapper -->
	</section>
<!-- #end introduction -->



<!-- Latest Blog Post -->
<section id="single-main-content">
	<div class="container">
		<div class="post-container">

			<!-- date & category -->
			<div class="three col date">
				<div class="date-category">
					<h5><a href="<?php echo get_month_link(get_the_time('Y'), get_the_time('m')); ?>"><?php the_time(__('j', 'f2')); ?> <?php the_time(__('M', 'f2')); ?> <?php the_time(__('Y', 'f2')); ?></a></h5>
					<ul class="tag">
					<li class="small"><?php the_category(', ') ?></li>
					</ul>
				</div>	
				<p class="small"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
			</div>
			<!-- #end date & category -->

			<!-- article -->
			<div class="eight col singlepost">
				<div class="article">
			<div class="post-content">
						<?php the_content();?>
						<?php // get post-nav.php (next/prev post link) ?>
						<?php get_template_part( 'includes/post-nav'); ?>				
					</div>
				</div>
			</div>
			<!-- #end article -->

		</div><!-- #close post-container -->
	</div><!-- #close container -->


	<?php comments_template( '', true ); ?>



<?php endwhile; ?>
<?php endif; ?>
</section>
<!-- #end Latest Blog Post -->



<?php get_footer(); ?>