<?php 
/*
Template Name: Info Page
*/

get_header(); ?>


<!-- Info Container -->
<section id="main-content">
	<div class="container">

	<!--  Info Section -->
	<div class="eight col">	
		<section id="info">
	
			<!-- article -->
			<article>
				<?php while ( have_posts() ) : the_post() ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<?php endwhile; ?>
			</article>
			<!-- /end article-->
	
		</section>
	</div>
	<!-- /end Info Section -->


	<!--  Stats Section - SIDEBAR -->
	<div class="four col">		
		<section id="stats" class="centre-text">
	
			<!-- article -->
			<article>
				<p><?php the_field('sidebar_stat_1'); ?></p>
			</article>
			<!-- /end article-->
		
		</section>
	</div>
	<!-- /end Stats Section - SIDEBAR -->

	<!-- /end Container -->
	</div>
</section>


                
<?php get_footer(); ?>