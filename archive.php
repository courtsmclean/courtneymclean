<?php
/*
Template Name: Archives
*/
get_header(); ?>


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
		<div class="container">

	<!-- spacer --><div class="three col"></div>

			<div class="seven col">
				<?php the_post(); ?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				
				<?php get_search_form(); ?>
				
				<h2>Archives by Month:</h2>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>
				
				<h2>Archives by Subject:</h2>
				<ul>
					 <?php wp_list_categories(); ?>
				</ul>
			</div>


   
     <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

		<!-- date & category -->
			<div class="three col">
				<div class="date">
					<div class="date-category">
						<h5><a href="" class=""><?php the_time('F j, Y'); ?></a></h5>
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