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
			<div class="img"><a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
			<?php $site= get_post_custom_values('projLink'); 
				if($site[0] != ""){
			
			?>
				<p><a href="<?=$site[0]?>">Visit the Site</a></p>
				
			<?php } ?>
		</div>
		
<?php endwhile; endif; ?>
		

		</section>
	<!-- /end Portfolio -->


	</div>
</section>
<!-- /end Main Content -->


                
<?php get_footer(); ?>