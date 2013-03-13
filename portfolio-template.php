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
		
		
		<div class="row-one">
			<!-- article -->
			<div class="six col">	
				<div class="portfolio-image">
					<p><?php the_field('project_1'); ?></p>
				</div>
			</div>
			<!-- /end article-->

			<!-- article -->
			<div class="six col">	
				<div class="portfolio-image">	
					<p><?php the_field('project_2'); ?></p>
				</div>
			</div>
			<!-- /end article-->
		</div><!-- /end row-->


		<div class="row-two">
			<!-- article -->
			<div class="four col">	
				<div class="portfolio-image">	
					<p><?php the_field('project_3'); ?></p>
				</div>
			</div>
			<!-- /end article-->

			<!-- article -->
			<div class="four col">	
				<div class="portfolio-image">	
					<p><?php the_field('project_4'); ?></p>
				</div>
			</div>
			<!-- /end article-->

			<!-- article -->
			<div class="four col">	
				<div class="portfolio-image">	
					<p><?php the_field('project_5'); ?></p>
				</div>
			</div>
			<!-- /end article-->
		</div><!-- /end row-->


		</section>
	<!-- /end Portfolio -->


	</div>
</section>
<!-- /end Main Content -->


                
<?php get_footer(); ?>