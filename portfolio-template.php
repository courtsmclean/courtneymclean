<?php 
/*
Template Name: Portfolio Page
*/

get_header(); ?>


<!-- Main Content -->
<section id="main-content">
	<?php while ( have_posts() ) : the_post() ?>
	<h1><?php the_title(); ?></h1>

	<div class="container">

	<!--  Portfolio Section -->
		<section id="portfolio">
			<?php the_content(); ?>
			<?php endwhile; ?>
		


		</section>
	<!-- /end Portfolio -->


	</div>
</section>
<!-- /end Main Content -->


                
<?php get_footer(); ?>