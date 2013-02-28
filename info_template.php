<?php 
/*
Template Name: Info Page
*/

get_header(); ?>



<!-- Introduction -->
	<section id="introduction" class="black-bg">
		<div class="intro-container">
			<p class="white">I am a designer with a passion for creativity and a focus on delivering high quality visual and engaging user experiences and interfaces for businesses and individuals. 

I do this with a creative and realistic approach, strong technical skills and a focus on your objectives. I previously worked at <a href="http://nakedcreativity.co.uk/" class="teal" title="Naked Creativity" target="_blank">Naked Creativity</a>.</p>
		</div>
	</section>
<!-- #end introduction -->



<!-- Info Container -->
<div class="container">

	<!--  Info Section -->
	<div class="eight col">	
		<section id="info">
	
			<!-- article -->
			<article>
				<?php while ( have_posts() ) : the_post() ?>
				<?php the_content(); ?>
				<?php endwhile; ?>
			</article>
			<!-- /end article-->


			<!-- article -->
				<article>
					<div class="four col">
						<h4>Things I Do</h4>
					</div>
					<div class="three col">
						<ul class="upper">
							<li>CREATIVE CONCEPTS</li>				
							<li>Identity &amp; Branding</li>
							<li>Brand</li>
							<li>Info</li>
						</ul>
					</div>
					<div class="three col">
						<ul>
							<li>Articles</li>
							<li>Projects</li>
							<li>Projects</li>
							<li>Info</li>
						</ul>
					</div>
					<div class="two col">
						<ul>
							<li>Home</li>				
							<li>Articles</li>
							<li>Projects</li>
							<li>Info</li>
						</ul>
					</div>
				</article>
			<!-- /end article-->


		
		<!-- article -->
			<article>
				<h4>My Process</h4>
				<div class="wrapper centre-text">
					<div class="four col">
						<img class="scale-with-grid" src="<?php bloginfo('template_directory'); ?>/images/process-circle.png" alt="process-circle" />
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>	
					<div class="four col">
						<img class="scale-with-grid" src="<?php bloginfo('template_directory'); ?>/images/process-circle.png" alt="process-circle" />
						<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>	
					<div class="four col">
						<img class="scale-with-grid" src="<?php bloginfo('template_directory'); ?>/images/process-circle.png" alt="process-circle" />
						<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
					</div>
				</div>
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
				<p><span class="statistic">207</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
			</article>
		<!-- /end article-->



		<!-- article -->
			<article>
				<p><span class="statistic">8</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
			</article>
		<!-- /end article-->



		<!-- article -->
			<article>
				<p><span class="statistic">43</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
			</article>
		<!-- /end article-->
		
	</section>
	</div>


	<!-- /end Container -->
</div>
</section>

                
<?php get_footer(); ?>