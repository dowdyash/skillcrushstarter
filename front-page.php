<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content">
		<div class="content">
			<?php while ( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<div class="social-btns">  <!-- populate or remove as many of these as you want -->
					<a href="https://twitter.com/ashdowdy" class="soc-icon tw"><span class="screen-reader-text">Twitter</span></a>
					<a href="https://www.linkedin.com/in/ashleydowdy/" class="soc-icon ln"><span class="screen-reader-text">LinkedIn</span></a>
					<a href="https://github.com/dowdyash" class="soc-icon gh"><span class="screen-reader-text">GitHub</span></a>
					<a href="https://www.medium.com/@dowdy/" class="soc-icon md"><span class="screen-reader-text">Medium</span></a>
				</div>
				<a href="<?php echo site_url('/blog/'); ?>" class="btn">Learn More</a>
			<?php endwhile; ?>
		</div>
	</div>
</section>

