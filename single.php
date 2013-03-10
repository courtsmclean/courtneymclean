<?php
/**
 * The Template for displaying all single posts.
 *
 */

get_header(); ?>


<!-- Introduction -->
	<section id="introduction">
		<div id="intro-wrapper" class="black-bg">
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

			<h1 class="white"><?php the_title(); ?></h1>

		</div><!-- #end intro-wrapper -->
	</section>
<!-- #end introduction -->



<!-- Latest Blog Post -->
<section id="main-content">
	<div class="container">
		<div class="post-container">

			<!-- date & category -->
			<div class="three col date">
				<div class="date-category">
					<h5><a href="<?php echo get_month_link(get_the_time('Y'), get_the_time('m')); ?>"><?php the_time(__('j', 'f2')); ?> <?php the_time(__('M', 'f2')); ?> <?php the_time(__('Y', 'f2')); ?></a></h5>
					<ul class="tag">
					<li><a href="" class="category-link"><?php the_category(', ') ?></a></li>
					</ul>
				</div>	
				<p class="small"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
			</div>
			<!-- #end date & category -->

			<!-- article -->
			<div class="seven col post">
				<div class="article">
					<?php if ( has_post_thumbnail() ) { /* loads the post's featured thumbnail, requires Wordpress 3.0+ */ echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; } ?>
					<div class="post-content">
						<?php the_content(__('Continue reading…'));?>
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