<?php 
/*
Template Name: Project Page
*/

get_header(); ?>


<!-- Introduction -->
	<section id="introduction">
		<div id="intro-wrapper" class="teal-bg">
		<?php while ( have_posts() ) : the_post() ?>

		<h1 class="white"><?php the_title(); ?></h1>

		</div><!-- #end intro-wrapper -->
	</section>
<!-- #end introduction -->



<!-- Main Content -->
<div id="project">
	<section id="main-content">
		<div class="project">
	
		<!--  Project Section -->
				<?php the_content(); ?>
				<?php endwhile; ?>
		<!-- /end Project Section -->
	
	
		</div>
	</section>
</div>
<!-- /end Main Content -->


                
<?php get_footer(); ?>