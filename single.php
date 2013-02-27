<?php
/**
 * The Template for displaying all single posts.
 *
 */

get_header(); ?>



<!-- Latest Blog Post -->
	<section id="single-post">
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>


<div class="container">

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
					<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
					
					
					<?php if ( has_post_thumbnail() ) { /* loads the post's featured thumbnail, requires Wordpress 3.0+ */ echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; } ?>
					<div class="post-content">
						<?php the_content(__('Continue reading…'));?>

						<?php // get post-nav.php (next/prev post link) ?>
						<?php get_template_part( 'includes/post-nav'); ?>
				
					</div>
				</div>
			</div>
		<!-- #end article -->
		

</div><!-- #close container -->



<div class="comment-container white-bg">
	<div class="container">
	
		<!-- spacer --><div class="four col"></div>

		<div class="seven col">
			<?php // get comment template (comments.php) ?>
			<?php comments_template( '', true ); ?>
		</div><!-- -->

	</div><!-- #close container -->
</div>



<?php endwhile; ?>
<?php endif; ?>
	</section>
<!-- #end Latest Blog Post -->



<?php get_footer(); ?>