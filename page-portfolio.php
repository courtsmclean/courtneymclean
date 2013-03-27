<?php
/* Template Name: Portfolio */


get_header(); 

query_posts('post_type=portfolio&posts_per_page=9');


?>


<!-- Main Content -->
<section id="main-content">
	<h1>Portfolio</h1>

	<div class="container">

	<!--  Portfolio Section -->
		<section id="portfolio">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


		<div class="item">
				<a href="<?php echo get_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
					<div><p class="white"><?php the_title(); ?></p></div>
				</a>
			<?php $site= get_post_custom_values('projLink'); 
				if($site[0] != ""){
			
			?>				
			<?php } ?>
		</div>
		
<?php endwhile; endif; ?>
		

		</section>
	<!-- /end Portfolio -->


	</div>
</section>
<!-- /end Main Content -->


                
<?php get_footer(); ?>