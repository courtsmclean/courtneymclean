<?php 
/*
Template Name: Home Page
*/

get_header(); ?>

<!-- Introduction -->
	<section id="home_intro">
		
		<div id="intro_image">
			<img src="<?php the_field('intro_image'); ?>" class="scale-with-grid" />
		</div>

		<div id="intro-wrapper">
			<div class="intro-text">
				<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
				<?php the_content();?>
			</div>
		</div><!-- #end intro-wrapper -->

	</section>
<!-- #end introduction -->




<!-- Latest Blog Post -->
	<section id="main-content">
		<div class="container">

			<?php
			$args = array( 'numberposts' => 1, 'order'=> 'DESC');
			$postslist = get_posts( $args );
			foreach ($postslist as $post) :  setup_postdata($post); ?> 
					

		<!-- date & category -->
			<div class="three col">
				<div class="date">
					<div class="date-category">
						<h5><a href="<?php echo get_month_link(get_the_time('Y'), get_the_time('m')); ?>"><?php the_time(__('j', 'f2')); ?> <?php the_time(__('M', 'f2')); ?> <?php the_time(__('Y', 'f2')); ?></a></h5>
						<ul class="tag">
						<li class="small"><?php the_category(', ') ?></li>
						</ul>
					</div>	
					<p class="small"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
				</div>
			</div>
		<!-- #end date & category -->



		<!-- article -->
			<div class="seven col post">
				<div class="article">
					<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<?php global $more;$more = 0; ?>
					<?php //if ( has_post_thumbnail() ) { /* loades the post's featured thumbnail, requires Wordpress 3.0+ */ echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; } ?>
					<div class="post-content">
						<?php the_content(__('Continue reading…'));?>
					</div>
				</div>
			</div>
		<!-- #end article -->



		<?php endforeach; ?>
	</div><!-- #close container -->


		
<?php endwhile; ?>
<?php endif; ?>
	</section>
<!-- #end Latest Blog Post -->

      
                
                
<?php get_footer(); ?>