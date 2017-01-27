<?php
/**
 * The template for displaying the case studies archive page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.1
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); 
				$size = "full";
				$services = get_field("services");
				$link = get_field("site_link");
				$image_1 = get_field("image_1");
			?>
		
				<article class="case-study archive-case-study">
					<aside class="case-study-sidebar">
						<h2 class="archive-case-study-headline"><a href="<?php echo $link; ?>"><?php the_title(); ?></a></h2>
						<h5><?php echo $services; ?></h5>

						<p><?php the_excerpt(); ?></p>

						<a href="<?php echo $link; ?>" alt="View Project">View Project</a>

					</aside>

					<div class="case-study-images">
						<a href="<?php echo $link; ?>" alt="View Project">
							<?php if ($image_1) { 
								echo wp_get_attachment_image($image_1, $size); 
							} ?>
						</a>
					</div>
				</article>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>