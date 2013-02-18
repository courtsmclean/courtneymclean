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

<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
          <?php /* If this is a category archive */ if (is_category()) { ?>
                <h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category:</h2>
          <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
                <h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
          <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
                <h2>Archive for <?php the_time('F jS, Y'); ?>:</h2>
          <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                <h2>Archive for <?php the_time('F, Y'); ?>:</h2>
          <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                <h2>Archive for <?php the_time('Y'); ?>:</h2>
          <?php /* If this is an author archive */ } elseif (is_author()) { ?>
                <h2>Author Archive</h2>
          <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                <h2>Blog Archives</h2>
        <?php } ?>
        
        
        
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