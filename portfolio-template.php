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
				<div class="portfolio-image black-bg">
					<?php the_field('portfolio_image_01'); ?>
				</div>
			</div>
			<!-- /end article-->

			<!-- article -->
			<div class="six col">	
				<div class="portfolio-image black-bg">	
				</div>
			</div>
			<!-- /end article-->
		</div><!-- /end row-->


		<div class="row-two">
			<!-- article -->
			<div class="four col">	
				<div class="portfolio-image black-bg">	
				</div>
			</div>
			<!-- /end article-->

			<!-- article -->
			<div class="four col">	
				<div class="portfolio-image black-bg">	
				</div>
			</div>
			<!-- /end article-->

			<!-- article -->
			<div class="four col">	
				<div class="portfolio-image black-bg">	
				</div>
			</div>
			<!-- /end article-->
		</div><!-- /end row-->


		<div class="row-three">
			<!-- article -->
			<div class="three col">	
				<div class="portfolio-image teal-bg">	
				</div>
			</div>
			<!-- /end article-->

			<!-- article -->
			<div class="three col">	
				<div class="portfolio-image black-bg">	
				</div>
			</div>
			<!-- /end article-->

			<!-- article -->
			<div class="three col">	
				<div class="portfolio-image black-bg">	
				</div>
			</div>
			<!-- /end article-->

			<!-- article -->
			<div class="three col">	
				<div class="portfolio-image black-bg">	
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