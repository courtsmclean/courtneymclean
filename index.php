<?php 
/*
Template Name: Journal Page
*/

get_header(); ?>


<!-- Introduction -->
	<section id="introduction" class="teal-bg">
		<div class="container">

		<!-- intro image -->
			<div class="three col"><img src="" class="scale-with-grid" title="" alt="" /></div>
			<!-- spacer --><div class="one col"></div>
			
		<!-- intro text -->
			<div class="seven col"></div>


		</div>
	</section>
<!-- #end introduction -->
	



<!-- Latest Blog Post -->
	<section id="latest-post">
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

<?php echo get_post_meta($post->ID, 'songs', true); ?>
	<h3>This post is inspired by:</h3>
	<ul>
		<?php foreach($songs as $song) {
			echo '<li>'.$song.'</li>';
			} ?>
	</ul>
		<div class="container">


		<!-- date & category -->
			<div class="three col">
				<div class="date">
					<div class="date-category">
						<h5><a href="<?php echo get_month_link(get_the_time('Y'), get_the_time('m')); ?>"><?php the_time(__('j', 'f2')); ?> <?php the_time(__('M', 'f2')); ?> <?php the_time(__('Y', 'f2')); ?></a></h5>
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
					<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
					<?php if ( has_post_thumbnail() ) { /* loades the post's featured thumbnail, requires Wordpress 3.0+ */ echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; } ?>
					<div class="post-content">
						<?php the_excerpt(); ?>
					</div>
				</div>
			</div>
		<!-- #end article -->



			
	</div><!-- #close container -->


		
<?php endwhile; ?>
<?php endif; ?>
	</section>
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