<?php
/**
 * The Template for displaying all single posts.
 *
 */

get_header(); ?>
	

<!-- Introduction -->
	<section id="introduction" class="brown-bg">
		<div class="container">

		<!-- intro image -->
			<div class="four col">
			</div>

		<!-- intro text -->
			<div class="seven col">
			</div>

		</div>
	</section>
<!-- #end introduction -->
	



<!-- Latest Blog Post -->
	<section id="latest-post">
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>


		<div class="container">


		<!-- date & category -->
			<div class="three col">
				<div class="date">
					<div class="date-category"><h5><?php the_time('F j, Y'); ?></h5>
						<ul class="tag">
						<li><a href="" class="category-link"><?php the_category(', ') ?></a></li>
						</ul>
					</div>	
					<p><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
				</div>
			</div>
		<!-- #end date & category -->


	<!-- spacer --><div class="one col"></div>


		<!-- article -->
			<div class="seven col">
				<div class="article">
					<h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<?php if ( has_post_thumbnail() ) { /* loads the post's featured thumbnail, requires Wordpress 3.0+ */ echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; } ?>
					<div class="post-content">
						<?php the_content(__('Continue reading…'));?>

						<?php // get post-nav.php (next/prev post link) ?>
						<?php get_template_part( 'includes/post-nav'); ?>
				
						<?php // get comment template (comments.php) ?>
						<?php comments_template(); ?>
					
					</div>
				</div>
			</div>
		<!-- #end article -->



			
		</div><!-- #close container -->


<?php endwhile; ?>
<?php endif; ?>
	</section>
<!-- #end Latest Blog Post -->



<?php get_footer(); ?>