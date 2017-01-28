<?php
/**
 * The template for displaying the about page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<section class="about-page">
		<div class="site-content">
			<h2 class="tagline"><span class="about-tagline">Accelerate</span> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h2>
		
		
		</div><!-- .container -->
	</section><!-- .home-page -->

	<section class="services">
		<div class="site-content">
			<h6>Our Services</h6>
			<p class="services-intro">We take pride in our clients and the content we create for them.<br>Here's a brief overview of our offered services.</p>
			
			
			<?php query_posts("post_type=services"); ?>
	
			<?php while ( have_posts() ) : the_post(); 
					$size = "full";
					$image_left = get_field("image_left");
					$image_right = get_field("image_right");
			
				?>
				
				<section class="services-section">
					
					<?php if ($image_left) { ?>
					
						<figure class="left">
							<?php echo wp_get_attachment_image($image_left, $size); ?>
						</figure>
						
						<div class="services-div right">
							<h2><?php the_title(); ?></h2>
							<p><?php the_content(); ?></p>
						</div>
					
					<?php } else if ($image_right) { ?>
						
						<div class="services-div left">
							<h2><?php the_title(); ?></h2>
							<p><?php the_content(); ?></p>
						</div>
						
						<figure class="right">
							<?php echo wp_get_attachment_image($image_right, $size); ?>
						</figure>
						
						
					<?php } ?>
					
				</section>

			<?php endwhile; // end of the loop. ?>
		</div>
	</section>
	
	<section class="about-contact">
		<div class="site-content">
			<hr>
		
			<p>Interested in working with us?
		
				<a class="button" href="">Contact Us</a>
		
			</p>
		
			<hr>
		</div>
	</section>

<?php get_footer(); ?>