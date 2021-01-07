<?php

//  Template Name: Contact

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the default template for displaying pages as denoted by the
//  WordPress 'pages' post type.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <section class="bg--lgrey">
    <div class="container block clear">
			<div class="col-12 col-8-l no-padding same-height">
				<div class="bg--white pad-20 pad-40-l">
					<h1>Contact us</h1>
					<?php the_content(); ?>
				</div>
			</div>
			<div class="col-12 col-4-l no-padding bg--color1 same-height">
				<?php include get_template_directory() . '/inc/contact-sidebar.php'; ?>
			</div>
		</div>
	</section>

<?php endwhile; ?>

<?php get_footer(); ?>