<?php 
/*
Template Name: Journal Page
*/

get_header(); ?>
	


<!-- Latest Blog Post -->
<div id="main-content">
	<div class="container">
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

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

		<!-- post -->
				<div class="seven col post">
					<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
					<?php if ( has_post_thumbnail() ) { /* loades the post's featured thumbnail, requires Wordpress 3.0+ */ echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; } ?>
					<div class="post-content">
						<?php the_excerpt(); ?>
					</div>
			</div>
		<!-- #end post -->



		</div><!-- #close container -->


		
		<?php endwhile; ?>
		<?php endif; ?>
		</div><!-- #close container -->
	</div>
<!-- #end Latest Blog Post -->



   	<!-- page navigation -->
		
		<div class="container">
			<!-- spacer --><div class="four col"></div>

			<div class="seven col">
				<div class="navigation">
                <?php posts_nav_link(); ?>
                </div>
			</div>
		</div><!-- #close container -->

	<!-- #page navigation -->

      
                
                
<?php get_footer(); ?>