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
				<?php the_content(); ?>
				<?php endwhile; ?>
			</article>
			<!-- /end article-->

			<!-- article -->
			<article>
				<div class="three col">
					<h4>Things I Do</h4>
				</div>
				<div class="five col">
					<ul class="upper">
						<li>User experience</li>
						<li>Information architecture</li>
						<li>Interface & Web design</li>
						<li>Front-end development</li>
					</ul>
				</div>
				<div class="four col">
					<ul class="upper">
						<li>Brand Identity</li>
						<li>Visual language</li>
						<li>Print Design</li>
						<li>Art direction</li>
						<li>Concept development</li>
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

			<!-- article -->
			<article>
				<p><strong>Selected Clients:</strong><br />Nike, London Southbank University, Santander, Seat, Clover, Epson, HP, LG, Vodafone, Brother, Grant Thornton, Pringles, The Sunday Times, Trafalgar Events</p>
			</article>
			<!-- /end article-->
		
		</section>
	</div>
	<!-- /end Stats Section - SIDEBAR -->

	<!-- /end Container -->
	</div>
</section>


                
<?php get_footer(); ?>