<?php get_header(); ?>


<!-- Introduction -->
	<section id="introduction" class="teal-bg">
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


	<!-- spacer --><div class="one col"></div>


		<!-- article -->
			<div class="seven col">
				<div class="article">
					<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
					<?php if ( has_post_thumbnail() ) { /* loades the post's featured thumbnail, requires Wordpress 3.0+ */ echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; } ?>
					<div class="post-content">
						<?php the_content(__('Continue reading…'));?>
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